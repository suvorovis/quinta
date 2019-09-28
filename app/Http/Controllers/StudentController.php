<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->hasAnyRole(['admin', 'institute', 'employer'])) {
            return redirect('/');
        }
        return view('students.index', ['rows' => Student::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->hasAnyRole(['admin', 'institute', 'employer'])) {
            return redirect('/');
        }
        return \Response::json([]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->hasAnyRole(['admin', 'institute', 'employer'])) {
            return redirect('/');
        }
        Student::create(
            $request->all()
        );

        return redirect(route('students.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        if (!auth()->user()->hasAnyRole(['admin', 'institute', 'employer'])) {
            return redirect('/');
        }
        return \Response::json($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        if (!auth()->user()->hasAnyRole(['admin', 'institute', 'employer'])) {
            return redirect('/');
        }
        $student->update($request->all());

        return redirect(route('students.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Student $student)
    {
        if (!auth()->user()->hasAnyRole(['admin', 'institute', 'employer'])) {
            return redirect('/');
        }
        $student->delete();

        return redirect(route('students.index'));
    }
}
