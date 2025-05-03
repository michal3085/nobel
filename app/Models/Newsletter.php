<?php

namespace App\Models;

use App\Models\Newsletter\Recipient;
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
        'newsletter_author',
    ];

    public function relationRecipients()
    {
        return $this->hasMany(Recipient::class, 'newsletter_id', 'newsletter_id');
    }

    public function hasBeenSent()
    {
        if ($this->relationRecipients()->count() > 0) {
            return true;
        }
        return false;
    }
}
