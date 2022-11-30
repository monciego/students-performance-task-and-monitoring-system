<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\StudentUpload;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
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
     * Show the form for uploading activity.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadActivity(Subject $subject)
    {
        $subject = Subject::where('user_id', Auth::id())->findOrFail($subject->id);
        return view('teacher.class.subject.activities.create', compact('subject'));
    }

    public function studentPassedActivity(Activity $activity)
    {
          $activity = Activity::findOrFail($activity->id);
        $studentUploads = StudentUpload::with('user')->where('activity_id', $activity->id)->get();
        return view('teacher.class.subject.activities.student-passed', compact('activity', 'studentUploads'));
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
            'subject_id' => 'required',
            'user_id' => 'required',
            'activity_name' =>  'required',
            'activity_details' => 'nullable',
            'ativity_file' => 'nullable',
            'activity_instruction' => 'nullable',
            'points' => 'nullable',
            'due_date' => 'nullable',
         ]);

         Activity::create([
            'subject_id' => $request->subject_id,
            'user_id' => $request->user_id,
            'activity_name' => $request->activity_name,
            'activity_details' => $request->activity_details,
            'activity_instruction' => $request->activity_instruction,
            'points' => $request->points,
            'due_date' => $request->due_date,
            'activity_file' =>  $this->storeFile($request),
        ]);

        return redirect()->back()->with('success-message', 'Activities Created Successfully!');
    }

    private function storeFile($request) {
        $newFileName = uniqid() . '-' . $request->activity_name . '.' . $request->activity_file->extension();
        $request->activity_file->move(public_path('storage/activities'), $newFileName);
        return $newFileName;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        $activity = Activity::findOrFail($activity->id);
        $studentUploads = StudentUpload::with('user', 'activity')->where('activity_id', $activity->id)->get();
        return view('teacher.class.subject.activities.show', compact('activity', 'studentUploads'));
    }


    public function downloadAnswer($file) {
        $file_path = public_path('storage/answer/' . $file);
        return response()->download($file_path);
    }


    public function downloadActivityFile($file) {
        $file_path = public_path('storage/activities/' . $file);
        return response()->download($file_path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
