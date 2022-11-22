<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassStudents;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassStudentsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function classStudents(Classes $class)
    {
    //     $students = Classes::where('class_id', $class->id)->get();
    //    dd($students);

     $class_code = Classes::where('id', $class->id)->value('class_code');
    $students = Student::where('class_id', $class->id)->where('class_code', $class_code)->get();
    return view('teacher.students.index', compact('students'));
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
     * @param  \App\Models\ClassStudents  $classStudents
     * @return \Illuminate\Http\Response
     */
    public function show(ClassStudents $classStudents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassStudents  $classStudents
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassStudents $classStudents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassStudents  $classStudents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassStudents $classStudents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassStudents  $classStudents
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassStudents $classStudents)
    {
        //
    }
}
