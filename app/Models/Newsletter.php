<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $table = 'newsletter';
    protected $primaryKey = 'newsletter_id';
    public $timestamps = true;
    public $history = true;

    public $fillable = [
        'newsletter_id',
        'newsletter_body',
        'newsletter_subject',
        'newsletter_active',
    ];
}
