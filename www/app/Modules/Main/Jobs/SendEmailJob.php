<?php

namespace App\Modules\Main\Jobs;

use App\Modules\Main\Mail\SendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $mail;

    /**
     * Create a new job instance.
     */
    public function __construct($mail = [])
    {
        $this->mail = (object)$mail;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->mail->to)
            ->queue(new SendEmail($this->mail));
    }
}
