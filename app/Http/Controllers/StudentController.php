<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::with('user')->get();
        $student_code_input = Student::where('user_id',auth()->id())->get();
        return view('user.classes.index', compact('classes', 'student_code_input'));
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
         $validated = $request->validate([
            'class_code' => 'required|string|max:12',
        ]);

         Student::updateOrCreate([
            'class_id'   =>$request->class_id,
            'user_id' => Auth::id(),
        ],[
            'user_id' => Auth::id(),
            'class_id' => $request->class_id,
            'class_code' => $request->class_code,
        ]);
        return redirect(route('classes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $class)
    {
        $class_code = Classes::where('id', $class->id)->value('class_code');
        $student_code = Student::where('user_id', Auth::id())->where('class_id', $class->id)->value('class_code');

        if($class_code ===  $student_code ) {
            return view('user.classes.show', [
                'class' => $class
            ]);
        } else {
            abort(403, 'Unauthorized');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
