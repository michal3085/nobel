<?php

namespace App\Services\Newsletter;

use App\Models\Newsletter;
use App\Models\Newsletter\Subscriber;

class SendService
{
    public function doService(Newsletter $newsletter)
    {
        $subscribers = Subscriber::where('ns_active', 1)->pluck('ns_mail_address')->toArray();
        dd($subscribers, $newsletter);
    }
}
