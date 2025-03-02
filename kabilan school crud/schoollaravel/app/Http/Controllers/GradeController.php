<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::paginate(10);
        // $grades = DB::table('grades')->get();
        // $grades = Grade::get();
        // $grades = DB::raw("select * from grades")->get();
        // dd($grades);
    
        return view('pages.grade.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.grade.create");        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $grade = new Grade; 
        $grade->grade_name = $request->input('grade_name');
        $grade->grade_group = $request->input('grade_group');
        $grade->grade_order = $request->input('grade_order'); 
        $grade->grade_color = $request->input('grade_color'); 
        $grade->save();
        return redirect('/grades')->with('success', 'Grade Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade = Grade::find($id);
        // $students = Student::where('grade_id',$id)->get();
        $students = Grade::find($id)->students;
        $subjects = Grade::find($id)->subjects;
        return view('pages.grade.show', compact('students', 'grade','subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grade = Grade::find($id);
        return view("pages.grade.edit",compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $grade =Grade::find($id);
        $grade->grade_name = $request->input('grade_name');
        $grade->grade_group = $request->input('grade_group');
        $grade->grade_order = $request->input('grade_order');
        $grade->grade_color = $request->input('grade_color'); 
        $grade->save();
        return redirect('/grades')->with('success', 'Grade Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $grade=Grade::find($id);
        $grade->delete();
        return redirect('/grades')->with('success', 'Grade Deleted Successfully!');
    }
}
