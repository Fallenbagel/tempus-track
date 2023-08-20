<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index() {
        return view('index', [
            'time' => now()
        ]);
    }

    public function store() {
        now();
        dd(request()->all());
        redirect('/');
    }
}
