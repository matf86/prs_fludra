<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SendContactEmailTest extends TestCase {

    use WithoutMiddleware;

    /**
     *@test
     */
    public function send_contact_form_email()
    {
        Mail::fake();

        $mock = Mockery::mock(App\Recaptcha\Recaptcha::class);

        $mock->shouldReceive('verify')
            ->withAnyArgs()
            ->once()
            ->andReturn(true);

        $this->app->instance(App\Recaptcha\Recaptcha::class, $mock);

        $this->json('post','/contact', [
            'name' => 'test_name',
            'email' => 'test_mail@example.com',
            'subject' => 'test_subject',
            'message' => 'test_message',
            'grecaptcha' => '1234']);

        Mail::assertSentTo(env('MAIL_CONTACT_FORM'), App\Mail\ContactEmail::class);
    }
}