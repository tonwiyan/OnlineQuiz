<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;
use App\Quiz;

class Question extends Model
{
    protected $fillable = ['question', 'quiz_id'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }
}
