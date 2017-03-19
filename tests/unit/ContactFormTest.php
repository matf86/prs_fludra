<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactFormTest extends TestCase
{

    use WithoutMiddleware;

    public function setUp() 
    {
    parent::setUp();
    }
 
    public function tearDown()
    {
        Mockery::close();
    }
 
    /**
    *@test
    */
    public function post_contact_form_with_no_data()
    {
        $this->json('post','/contact', [])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_without_required_name_field()
    {
        $this->json('post','/contact', [
            'name' => '',
            'email' => 'test@example.com',
            'subject' => 'test subject',
            'message' => 'test message',
            'grecaptcha' => '1234',])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_without_required_email_field()
    {
        $this->json('post','/contact', [
            'name' => 'test name',
            'email' => '',
            'subject' => 'test subject',
            'message' => 'test message',
            'grecaptcha' => '1234',])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_without_required_subject_field()
    {
        $this->json('post','/contact', [
            'name' => 'test name',
            'email' => 'test@example.com',
            'subject' => '',
            'message' => 'test message',
            'grecaptcha' => '1234',])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_without_required_message_field()
    {
        $this->json('post','/contact', [
            'name' => 'test name',
            'email' => 'test@example.com',
            'subject' => 'test subject',
            'message' => '',
            'grecaptcha' => '1234',])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_without_required_grecaptcha_field()
    {
        $this->json('post','/contact', [
            'name' => 'test name',
            'email' => 'test@example.com',
            'subject' => 'test subject',
            'message' => 'test message',
            'grecaptcha' => '',])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_with_name_field_longer_then_90_chars()
    {
        $this->json('post','/contact', [
            'name' => str_repeat("a",91),
            'email' => 'test@example.com',
            'subject' => 'test subject',
            'message' => 'test message',
            'grecaptcha' => '12345',])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_with_not_email_formated_string()
    {
        $this->json('post','/contact', [
            'name' => 'test name',
            'email' => 'test',
            'subject' => 'test subject',
            'message' => 'test message',
            'grecaptcha' => '12345',])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_with_subject_field_longer_then_120_chars()
    {
        $this->json('post','/contact', [
            'name' => 'test name',
            'email' => 'test@example.com',
            'subject' => str_repeat("a",121),
            'message' => 'test message',
            'grecaptcha' => '12345',])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_with_message_field_longer_then_900_chars()
    {
        $this->json('post','/contact', [
            'name' => 'test name',
            'email' => 'test@example.com',
            'subject' => 'test subject',
            'message' => str_repeat("a",901),
            'grecaptcha' => '12345',])->seeStatusCode(422);
    }

    /**
    *@test
    */
    public function post_contact_form_with_valid_data()
    {
        $mock = Mockery::mock(App\Recaptcha\Recaptcha::class);

        $mock->shouldReceive('verify')
           ->withAnyArgs()
           ->once()
           ->andReturn(true);

        $this->app->instance(App\Recaptcha\Recaptcha::class, $mock);

        $this->expectsJobs(\App\Jobs\SendContactEmail::class);

        $this->json('post','/contact', [
            'name' => 'test_name',
            'email' => 'test_mail@example.com',
            'subject' => 'test_subject',
            'message' => 'test_message',
            'grecaptcha' => '1234'])->seeStatusCode(201);
    }

    /**
    *@test
    */
    public function post_contact_form_with_invalid_recaptch_token()
    {
        $mock = Mockery::mock(App\Recaptcha\Recaptcha::class);

        $mock->shouldReceive('verify')
           ->withAnyArgs()
           ->once()
           ->andReturn(false);

        $this->app->instance(App\Recaptcha\Recaptcha::class, $mock);

        $this->json('post','/contact', [
            'name' => 'test_name',
            'email' => 'test_mail@example.com',
            'subject' => 'test_subject',
            'message' => 'test_message',
            'grecaptcha' => '1234'])->seeStatusCode(400);
    }
}
