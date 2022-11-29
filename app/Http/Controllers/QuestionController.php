<?php

namespace App\Http\Controllers;

use App\Models\CategoryQuestion;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }
    /**
     * Create a question
     *
     * @return \Illuminate\Http\Response
     */
    public function createQuestion()
    {
         $category_question = CategoryQuestion::get();
        return view('teacher.questions.index', compact('category_question'));
    }
    /**
     * Create a question
     *
     * @return \Illuminate\Http\Response
     */
    public function questions(CategoryQuestion $categoryQuestion)
    {
        $questions = Question::where('category_question_id', $categoryQuestion->id)->get();
        return view('teacher.questions.questions', compact('questions'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $formFields = $request->validate([
            'category_question_id' =>  'required',
            'question' => 'nullable',
         ]);

         Question::create([
            'category_question_id' => $request->category_question_id,
            'question' => $request->question,
        ]);

        return redirect()->back()->with('success-message', 'Question Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
