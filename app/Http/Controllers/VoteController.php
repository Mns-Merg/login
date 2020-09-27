<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Rtquiz;
use App\Vote;

class VoteController extends Controller
{
    //

    public function vote(){

        $class= session()->get('class');

        $quiz = Rtquiz::where('class', $class)->get()->first();

        

        return view ('vote', compact('quiz'));
    }

    public function vote_send(Request $request){

        $vote = new Vote;

        $vote = new Vote ([
            'question' => $request->get('question'),
            'answer' => $request->get('answer'),
            'class' => session()->get('class'),
            
            ]);
            $vote->save();
            return redirect('/home')->with('success', 'Vote Submitted');





    }


    
}
