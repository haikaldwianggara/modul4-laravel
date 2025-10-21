<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
{
    $students = [
        [
            'name' => 'HAIKAL',
            'major' => 'SIKC',
            'age' => 20,
            'courses' => ['Pemrograman Web', 'Database', 'Cloud Computing'],
        ],
        [
            'name' => 'Siti',
            'major' => 'Sistem Informasi',
            'age' => 22,
            'courses' => ['UI/UX Design', 'Manajemen Proyek', 'IoT'],
        ],
    ];

    return view('students.index', compact('students'));
}
}