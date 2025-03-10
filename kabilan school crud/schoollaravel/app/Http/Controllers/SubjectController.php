<?php

namespace App\Http\Controllers;
use App\Models\Subject;


use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::paginate(10);
        return view('pages.subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.subject.create");        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = new Subject; 
        $subject->subject_name = $request->input('subject_name');
        $subject->subject_order = $request->input('subject_order');
        $subject->color = $request->input('subject_color'); 
        $subject->save();
        return redirect('/subjects')->with('success', 'Subject Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::find($id);
        $grades = Subject::find($id)->grades;
        $students = Subject::find($id)->students;
        return view('pages.subject.show', compact('subject','grades','students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::find($id);
        return view("pages.subject.edit",compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject =Subject::find($id);
        $subject->subject_name = $request->input('subject_name');
        $subject->subject_order = $request->input('subject_order');
        $subject->color = $request->input('subject_color'); 
        $subject->save();
        return redirect('/subjects')->with('success', 'Subject Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject=Subject::find($id);
        $subject->delete();
        return redirect('/subjects')->with('success', 'Subject Deleted Successfully!');
    }
}
