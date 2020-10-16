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

        if(!$quiz){
            return redirect('/home')->with('danger', 'No Quiz available');
        }

        return view ('vote', compact('quiz'));
    }

    public function vote_send(Request $request){

        $vote = new Vote;

        $class1= session()->get('class');

        $quiz1 = Rtquiz::where('class', $class1)->get()->first();
        
        if (!$quiz1){
            return redirect('/home')->with('danger', 'Voting has ended');
        }


        $vote = new Vote ([
            'question' => $request->get('question'),
            'answer' => $request->get('answer'),
            'class' => session()->get('class'),
            'correct_answer' => $quiz1->correct_answer
            
            ]);
            $vote->save();
            return redirect('/home')->with('success', 'Vote Submitted');
    }


    
}
