<?php

namespace App\Models\QA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    use HasFactory;

    protected $table = 'qa';
    protected $primaryKey = 'qa_id';
    public $timestamps = true;
    public $history = true;

    public $fillable = [
        'qa_id',
        'qa_section_id',
        'qa_title',
        'qa_text',
        'qa_active',
        'qa_author',
    ];
}
