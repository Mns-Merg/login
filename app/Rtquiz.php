<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rtquiz extends Model
{
    //
    public $fillable=['question','answer_A', 'answer_B', 'answer_C', 'answer_D', 'correct_answer', 'class','quiz_method'];
}

