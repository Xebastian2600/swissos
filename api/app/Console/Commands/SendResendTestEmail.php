<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Resend;

class SendResendTestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resend:test {to=karlrodriguez72200@gmail.com : Recipient address}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test email through the Resend API';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $key = config('services.resend.key');

        if (empty($key) || $key === 're_xxxxxxxxx') {
            $this->error('Set RESEND_KEY in your .env to your Resend API key.');

            return Command::FAILURE;
        }

        $resend = Resend::client($key);

        $result = $resend->emails->send([
            'from'    => 'onboarding@resend.dev',
            'to'      => $this->argument('to'),
            'subject' => 'Hello World',
            'html'    => '<p>Congrats on sending your <strong>first email</strong>!</p>',
        ]);

        $this->info('Email sent. ID: ' . $result->id);

        return Command::SUCCESS;
    }
}
