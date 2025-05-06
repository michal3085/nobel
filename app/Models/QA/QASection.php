<?php

namespace App\Models\QA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QASection extends Model
{
    use HasFactory;

    protected $table = 'qa_section';
    protected $primaryKey = 'qa_section_id';
    public $timestamps = true;
    public $history = true;
    public $fillable = [
        'qa_section_id',
        'qa_section_name',
        'qa_section_code',
        'qa_section_active',
    ];

    public function relationQuestionAnswers()
    {
        return $this->hasMany(QuestionAnswer::class, 'qa_section_id', 'qa_section_id');
    }

    public function getThreadsCount()
    {
        return $this->relationQuestionAnswers->count();
    }
}
