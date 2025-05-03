<?php

namespace App\Services\Newsletter;

use App\Models\Newsletter;
use App\Models\Newsletter\Subscriber;
use App\Models\Newsletter\Recipient;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class SendService
{
    public function doService(Newsletter $newsletter): void
    {
        $subscribers = Subscriber::where('ns_active', 1)->get();

        foreach ($subscribers as $subscriber) {
            try {
                // Wyślij mail
                Mail::to($subscriber->ns_mail_address)->send(new NewsletterMail($newsletter));

                // Zapisz OK do recipient
                Recipient::create([
                    'newsletter_id' => $newsletter->newsletter_id,
                    'newsletter_subscribers_id' => $subscriber->newsletter_subscribers_id,
                    'newsletter_send_status' => 'OK',
                    'sent_at' => Carbon::now(),
                ]);
            } catch (\Throwable $e) {
                Log::error('Błąd wysyłki newslettera do: ' . $subscriber->ns_mail_address . ' — ' . $e->getMessage());

                // Zapisz błąd
                Recipient::create([
                    'newsletter_id' => $newsletter->newsletter_id,
                    'newsletter_subscribers_id' => $subscriber->newsletter_subscribers_id,
                    'newsletter_send_status' => $e->getMessage(),
                    'sent_at' => Carbon::now(),
                ]);
            }
        }
    }
}

