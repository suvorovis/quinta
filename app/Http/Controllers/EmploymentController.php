<?php

namespace App\Http\Controllers;

use App\Employment;
use App\Profession;
use App\Student;
use Illuminate\Http\Request;

class EmploymentController extends Controller
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
        $rows = Employment::where(['student_id' => $student['id']])->get();

        foreach ($rows as &$row) {
            $row['profession'] = Profession::where(['id' => $row['profession_id']])->first()['name'];
        }

        return view('employments.index', ['rows' => $rows]);
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
        dd($params);
        $params['profession'] = Profession::where(['id' => $params['profession_id']])->first()['name'];
        $params['student_id'] = auth()->user()->student()['id'];
//        $student = Student::where(['user_id' => auth()->user()->id])->first()['id'];

        Employment::create(

        );

        return redirect(route('employments.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function edit(Employment $employment)
    {
        if (!auth()->user()->hasAnyRole(['student'])) {
            return redirect('/');
        }
        return \Response::json($employment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employment $employment)
    {
        if (!auth()->user()->hasAnyRole(['student'])) {
            return redirect('/');
        }
        $employment->update($request->all());

        return redirect(route('employments.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Employment $employment
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Employment $employment)
    {
        if (!auth()->user()->hasAnyRole(['student'])) {
            return redirect('/');
        }
        $employment->delete();

        return redirect(route('employments.index'));
    }
}
