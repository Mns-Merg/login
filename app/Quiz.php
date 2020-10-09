<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    public $fillable=['question','answer_A', 'answer_B', 'answer_C', 'answer_D',
     'correct_answer','alt_question','alt_answer_A', 'alt_answer_B', 'alt_answer_C', 'alt_answer_D', 'alt_correct_answer'];
}
