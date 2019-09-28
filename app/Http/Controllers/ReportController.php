<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function generate(Request $request)
    {
        $params = $this->validate($request, [
            'from' => 'date_format:Y-m-d',
            'to' => 'date_format:Y-m-d',
        ]);

        $params['from'] = $params['from'] ?? '0000-00-00';
        $params['to'] = $params['to'] ?? '9999-12-31';

        $students = DB::table('education')->distinct()
            ->join('specialities', 'education.speciality_id', '=', 'specialities.id')
            ->join('professions', 'employments.profession_id', '=', 'professions.id')
            ->join('directions', 'professions.direction_id', '=', 'directions.id')
            ->select('student_id', 'direction_id')
            ->whereBetween('end_date', [$params['from'], $params['to']])->toSql();

        $employments = DB::table('employments')

            ->leftJoinSub('')
            ->selectRaw('directions.name AS direction, professions.name AS profession, count(DISTINCT student_id) AS employed')
            ->whereRaw("(`student_id`, `direction_id`) IN ({$students})")
            ->where(function ($query) use ($params) {
                $query->whereBetween('from', [$params['from'], $params['to']])
                    ->orWhereBetween('to', [$params['from'], $params['to']]);
            })
            ->groupBy('direction_id', 'profession_id')->toSql();


        dd($employments);

            /*
             * SELECT
             */
    }
}
