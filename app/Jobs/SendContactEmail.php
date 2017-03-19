<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class SendContactEmail
{
    use Queueable;

    protected $data;


    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to('urthel@poczta.fm')
            ->send(new ContactEmail($this->data));
    }
}
