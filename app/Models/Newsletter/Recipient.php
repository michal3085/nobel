<?php

namespace App\Models\Newsletter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    use HasFactory;

    protected $table = 'newsletter_recipient';
    protected $primaryKey = 'newsletter_recipient_id';
    public $timestamps = true;
    public $history = true;

    public $fillable = [
        'newsletter_id',
        'newsletter_subscribers_id',
        'newsletter_send_status',
    ];
}
