<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\CategoryQuestion;
use App\Models\Classes;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSubject(Classes $class)
    {
        // dd($class->id);
        $class = Classes::where('user_id', Auth::id())->findOrFail($class->id);
        return view('teacher.class.subject.create', compact('class'));
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
            'class_id' => 'required',
            'user_id' => 'required',
            'subject_name' =>  'required',
            'subject_details' => 'nullable',
         ]);

         Subject::create([
            'class_id' => $request->class_id,
            'user_id' => $request->user_id,
            'subject_name' => $request->subject_name,
            'subject_details' => $request->subject_details,
        ]);

        return redirect(route('class.index'))->with('success-message', 'Subject Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        $subject = Subject::with('classes')->where('user_id', auth()->id())->findOrFail($subject->id);
        $activities = Activity::with('subject')->where('user_id', auth()->id())->where('subject_id', $subject->id)->latest()->get();
        $questions = CategoryQuestion::with('question')->where('subject_id', $subject->id)->get();
        // where auth id = auth ->id
        return view('teacher.class.subject.index', compact('subject', 'activities', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
