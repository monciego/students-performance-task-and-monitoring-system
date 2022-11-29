<?php

namespace App\Http\Controllers;

use App\Models\CategoryQuestion;
use App\Models\Subject;
use Illuminate\Http\Request;

class CategoryQuestionController extends Controller
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
     * Create category.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategoryQuestion(Subject $subject)
    {
        $subject = Subject::with('classes')->findOrFail($subject->id);
        return  view('teacher.category-question.index', compact('subject'));
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
            'subject_id' =>  'required',
            'question_category' => 'nullable',
         ]);

         CategoryQuestion::create([
            'subject_id' => $request->subject_id,
            'question_category' => $request->question_category,
        ]);

        return redirect()->back()->with('success-message', 'Category Question Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryQuestion  $categoryQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryQuestion $categoryQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryQuestion  $categoryQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryQuestion $categoryQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryQuestion  $categoryQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryQuestion $categoryQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryQuestion  $categoryQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryQuestion $categoryQuestion)
    {
        //
    }
}
