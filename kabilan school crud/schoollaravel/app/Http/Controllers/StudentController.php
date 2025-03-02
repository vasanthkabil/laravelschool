<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $input =$request->all();
        // $students = Student::paginate(15);
        $students = Student::paginate(10);

        // dd($students);
        return view('pages.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades=Grade::pluck('grade_name','id');
        return view("pages.student.create",compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $student = new Student; 
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->grade_id = $request->input('grade_id'); 
        $student->save();
        return redirect('/students')->with('success', 'Student Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('pages.student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        $grades=Grade::pluck('grade_name','id');
        return view("pages.student.edit",compact('student','grades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student =Student::find($id);
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->grade_id = $request->input('grade_id'); 
        $student->save();
        return redirect('/students')->with('success', 'Student Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('/students')->with('success', 'Student Deleted Successfully!');
    }
}
