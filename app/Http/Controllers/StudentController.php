<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all(); // select * from students
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Student::create($request->all());

        // include validation
        $validated = $request->validate([
            'name' =>'required|min:4|string|max:255',
            'studID'=>'required|min:6|string|max:255',
            'mobileNumber' => 'required|min:10|Numeric'
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->studID = $request->studID;
        $student->mobileNumber = $request->mobileNumber;
        $student->save();

        return redirect()->route('student.index')
            ->withSuccess('New student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //return $request;
        // method 1 - take all fields
        //$student->update($request->all());

        // method 2 - do some checking
        $validated = $request->validate([
            'name' =>'required|min:4|string|max:255',
            'studID'=>'required|min:6|string|max:255',
            'mobileNumber' => 'required|min:10|Numeric'
        ]);

        $student->update($request->all());

        return redirect()->route('student.index')
            ->withSuccess('Student record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {

        $student->delete();
        return redirect()->route('student.index');
    }
}
