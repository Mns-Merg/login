<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
    public $fillable=['question', 'answer','class','correct_answer'];
}
