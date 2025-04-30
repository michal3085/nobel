<?php

namespace App\Models\Newsletter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $table = 'newsletter_subscribers';
    protected $primaryKey = 'newsletter_subscribers_id';
    public $timestamps = true;
    public $history = true;

    public $fillable = [
        'newsletter_subscribers_id',
        'ns_mail_address',
        'ns_active',
    ];
}
