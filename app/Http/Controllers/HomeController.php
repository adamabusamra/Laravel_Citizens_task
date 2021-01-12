<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function array()
    {
        include_once(app_path() . '/includes/students_array.php');

        return view('dashboard/index', compact('students'));
    }
}
