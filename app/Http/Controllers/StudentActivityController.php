<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Classes;
use App\Models\Student;
use App\Models\StudentUpload;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentActivityController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $activity)
    {
         $class_code = Classes::where('id', $activity->id)->value('class_code');
         $student_code = Student::where('user_id', Auth::id())->where('class_id', $activity->id)->value('class_code');

        $activities = Activity::with('subject')->where('subject_id', $activity->id)->latest()->get();
        if($class_code ===  $student_code ) {
            return view('user.classes.activities.index', compact('activity', 'activities'));

        } else {
            abort(403, 'Unauthorized');
        }
    }


    public function activityDetails(Activity $activity) {
        $activity = Activity::with('subject')->findOrFail($activity->id);
        $studentUpload = StudentUpload::where('activity_id', $activity->id)->get();
        return view('user.classes.activities.activity-details', compact('activity', 'studentUpload'));
    }


    public function downloadFileStudent($file) {
        $file_path = public_path('storage/activities/' . $file);
        return response()->download($file_path);
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
    }
}
