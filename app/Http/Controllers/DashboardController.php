<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $params = $this->validate($request, [
            'from' => 'date_format:Y-m-d',
            'to' => 'date_format:Y-m-d',
        ]);

        $reportParams = $params;

        $params['from'] = $params['from'] ?? '0000-00-00';
        $params['to'] = $params['to'] ?? '9999-12-31';
    
        
        $students = "
        SELECT e.student_id, s.direction_id, d.name as direction
        FROM education e 
            JOIN specialities s ON e.speciality_id = s.id
            JOIN directions d ON s.direction_id = d.id
        WHERE e.end_date BETWEEN '{$params['from']}' AND '{$params['to']}'";

        $employments = "
        SELECT p.direction_id, e.profession_id, p.name AS profession, COUNT(DISTINCT e.student_id) AS employed
        FROM employments e
            JOIN professions p ON e.profession_id = p.id
        WHERE (e.from BETWEEN '{$params['from']}' AND '{$params['to']}'
              OR e.to BETWEEN '{$params['from']}' AND '{$params['to']}')
             AND (e.student_id, p.direction_id) IN (SELECT student_id, direction_id FROM ({$students}) AS st)
        GROUP BY p.direction_id, e.profession_id, p.name";

        $query = "
        SELECT direction, profession, COUNT(DISTINCT s.student_id) AS educated, SUM(employed) AS employed, ROUND(SUM(employed) / IF(COUNT(DISTINCT s.student_id) = 0, 1, COUNT(DISTINCT s.student_id)) * 100, 0) AS rate
        FROM ({$students}) AS s LEFT JOIN ({$employments}) AS e USING (direction_id)
        GROUP BY direction, profession";

        $rows = DB::select( DB::raw($query) );

        $rows = array_map(function ($row) {
            return (array)$row;
        }, $rows);

        $all_students = "
        SELECT e.student_id, s.direction_id, d.name as direction
        FROM education e JOIN specialities s ON e.speciality_id = s.id JOIN directions d ON s.direction_id = d.id";

        $all_directions = "
        SELECT s.direction as name, COUNT(s.student_id) as count FROM ({$all_students}) as s GROUP BY s.direction";

        $directions = DB::select( DB::raw($all_directions) );

        $directions = array_map(function ($row) {
            return (array)$row;
        }, $directions);

        $all_profs = "
        SELECT p.name as name, COUNT(e.student_id) as count FROM employments as e JOIN professions as p ON e.profession_id = p.id GROUP BY p.name";

        $profs = DB::select( DB::raw($all_profs) );

        $profs = array_map(function ($row) {
            return (array)$row;
        }, $profs);

        return view('dashboard.index', [
            'rows' => $rows,
            'directions' => $directions,
            'profs' => $profs,
            'params' => $reportParams,
        ]);
    }
}
