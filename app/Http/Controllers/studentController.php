<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

$students =  array(
    array(
        "id"                => 1,
        "name"              => "Adam Abusamra",
        "birthday"          => "25/10/2001",
        "github_account"    => "https://github.com/adamabusamra/",
        "linkedin"          => "www.linkedin.com/in/adam-abusamra",
        "projects"          => array(
            array(
                "project_name" => "Personal Portfolio",
                "completed" => 1
            ),
            "attendance" => array(
                array(
                    "check_in"      => "December 15, 2020, 09:00 pm",
                    "check_ out"    => "December 15, 2020, 09:00 pm"
                ),
                array(
                    "check_in"      => "December 15, 2020, 09:00 pm",
                    "check_out"     => "December 15, 2020, 09:00 pm"
                )
            )
        )
    )
);

class studentController extends Controller
{

    public function show_student($id)
    {

        include_once(app_path() . '/includes/students_array.php');
        $student_index = $id - 1;

        return view('dashboard/single_student', compact('id', 'students', 'student_index'));
    }
    public function show_students()
    {
        include_once(app_path() . '/includes/students_array.php');
        return view('dashboard/projects', compact('students'));
    }
}
