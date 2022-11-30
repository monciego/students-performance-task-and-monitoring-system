<?php

namespace App\Http\Controllers;

use App\Models\StudentUpload;
use Illuminate\Http\Request;

class StudentUploadController extends Controller
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
        $formFields = $request->validate([
            'subject_id' => 'required',
            'user_id' => 'required',
            'activity_id' =>  'required',
            // 'student_id' => 'required',
            'file' => 'nullable',
            'comment' => 'nullable',
         ]);

         StudentUpload::create([
            'subject_id' => $request->subject_id,
            'user_id' => $request->user_id,
            // 'student_id' => $request->student_id,
            'activity_id' => $request->activity_id,
            'file' =>  $this->uploadAnswer($request),
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success-message', 'Uploaded Successfully!');
    }

    private function uploadAnswer($request) {
        $newFileName = uniqid() . '.' . $request->file->extension();
        $request->file->move(public_path('storage/answer'), $newFileName);
        return $newFileName;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentUpload  $studentUpload
     * @return \Illuminate\Http\Response
     */
    public function show(StudentUpload $studentUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentUpload  $studentUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentUpload $studentUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentUpload  $studentUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentUpload $studentUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentUpload  $studentUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentUpload $studentUpload)
    {
        //
    }
}
