<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Answer;

class Result extends Model
{
    protected $fillable = ['user_id', 'question_id', 'quiz_id', 'answer_id'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
