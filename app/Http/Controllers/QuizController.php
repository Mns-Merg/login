<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $quizs = Quiz::all();
        return view('quizs.index', compact('quizs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('quizs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $quiz = new Quiz ([
        'question' => $request->get('question'),
        'answer_A' => $request->get('answer_A'),
        'answer_B' => $request->get('answer_B'),
        'answer_C' => $request->get('answer_C'),
        'answer_D' => $request->get('answer_D')
        ]);
        $quiz->save();
        return redirect('/quizs')->with('success', 'Quiz Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $quiz = Quiz::find($id);
        return view('quizs.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $quiz = Quiz::find($id);
        $quiz->question =  $request->get('question');
        $quiz->answer_A = $request->get('answer_A');
        $quiz->answer_B = $request->get('answer_B');
        $quiz->answer_C = $request->get('answer_C');
        $quiz->answer_D = $request->get('answer_D');
        $quiz->save();

        return redirect('/quizs')->with('success', 'Quiz updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $quiz = Quiz::find($id);
        $quiz->delete();
        return redirect('/quizs')->with('success', 'Quiz deleted!');
    }
}
