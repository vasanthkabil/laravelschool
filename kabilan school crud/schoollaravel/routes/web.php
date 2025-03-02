<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;

// Route::resource('students', StudentController::class);
// Route::resource('subjects', SubjectController::class);
// Route::resource('grades', GradeController::class);

// Route::get('/{pages?}', function ($pages='index') {
//     $students=Student::all();
//     return view('pages.'.$pages,compact('students'));
// });

Route::get('/', function () {
    $studentCount=Student::count();
    $subjectCount=Subject::count();
    $gradeCount=Grade::count();
    return view('pages.index',compact('studentCount','subjectCount','gradeCount'));
});

// Route::get('/students/{id}', function ($id) {
//     $student=Student::find($id);
//     return view('pages.student.show',compact('student'));
// });

// Route::get('/students/create', function () {
//     // $student=Student::find($id);
//     return view('pages.student.create');
// });

// Route::get('/subjects/{id}', function ($id) {
//     $subject=Subject::find($id);
//     return view('pages.subject.show',compact('subject'));
// });

// Route::get('/grades/{id}', function ($id) {
//     $grade=Grade::find($id);
//     return view('pages.grade.show',compact('grade'));
// });
Route::resources([
    'students'=> StudentController::class,
    'grades'=> GradeController::class, 
    'subjects'=> SubjectController::class,
]);


// Route::get('students',[StudentController::class,'index']);



/*
Route::get('/', function () {
    return view('index');
});

Route::get('/students', function () {
    $students = Student::all();
    return view('student.index', compact('students'));
});

Route::get('/students/{id}', function ($id) {
    $student = Student::find($id);
    return view('student.show', compact('student'));
});

Route::get('/grades', function () {
    $grades = Grade::all();
    // $grades = DB::table('grades')->get();
    // $grades = Grade::get();
    // $grades = DB::raw("select * from grades")->get();
    // dd($grades);

    return view('grade.index', compact('grades'));
});

Route::get('/grades/{id}', function ($id) {
    $grade = Grade::find($id);
    // $students = Student::where('grade_id',$id)->get();
    $students = Grade::find($id)->students;
    $subjects = Grade::find($id)->subjects;
    return view('grade.show', compact('students', 'grade','subjects'));
});

Route::get('/subjects', function () {
    $subjects = Subject::all();
    return view('subject.index', compact('subjects'));
});

Route::get('/subjects/{id}', function ($id) {
    $subject = Subject::find($id);
    $grades = Subject::find($id)->grades;
    $students = Subject::find($id)->students;
    return view('subject.show', compact('subject','grades','students'));
});*/