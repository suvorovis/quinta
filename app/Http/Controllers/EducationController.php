<?php

namespace App\Http\Controllers;

use App\Education;
use App\Institute;
use App\Speciality;
use App\Student;
use Illuminate\Http\Request;

class EducationController extends Controller
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
        if (!auth()->user()->hasAnyRole(['student'])) {
            return redirect('/');
        }

        $student = Student::where(['user_id' => auth()->user()->id])->first();
        $rows = Education::where(['student_id' => $student['id']])->get();

        foreach ($rows as &$row) {
            $row['institute'] = Institute::where(['id' => $row['institute_id']])->first()['name'];
            $row['speciality'] = Speciality::where(['id' => $row['speciality_id']])->first()['name'];
        }

        return view('education.index', [
            'rows' => $rows,
            'institutes' => Institute::all(),
            'specialities' => Speciality::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->hasAnyRole(['student'])) {
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
        if (!auth()->user()->hasAnyRole(['student'])) {
            return redirect('/');
        }
        $params = $request->all();

        $params['student_id'] = Student::where(['user_id' => auth()->user()->id])->first()['id'];

        Education::create(
            $params
        );

        return redirect(route('education.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        if (!auth()->user()->hasAnyRole(['student'])) {
            return redirect('/');
        }
        return \Response::json($education);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        if (!auth()->user()->hasAnyRole(['student'])) {
            return redirect('/');
        }
        $education->update($request->all());

        return redirect(route('education.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        if (!auth()->user()->hasAnyRole(['student'])) {
            return redirect('/');
        }
        $education->delete();

        return redirect(route('education.index'));
    }
}
