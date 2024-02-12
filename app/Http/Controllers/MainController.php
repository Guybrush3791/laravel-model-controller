<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class MainController extends Controller
{
    public function index() {

        $newStudent = new Student();
        $newStudent -> name = "Guybrush";
        $newStudent -> surname = "Threepwood";
        $newStudent -> date_of_birth = "1989-01-01";
        $newStudent -> fiscal_code = "GYBTHR10M72R784W";
        $newStudent -> enrolment_date = "2018-11-15";
        $newStudent -> registration_number = 621133;
        $newStudent -> email = "guybrush@gmail.com";

        $newStudent -> save();

        $students = Student :: all();
        // dd($students);

        return view('pages.index', compact('students'));
    }
    public function getStudents() {

        // get all students with surname like Threepwood
        // $students = Student
        //         :: where("surname", "Threepwood")
        //     -> get();

        // get all students ordered by surname
        $students = Student
                :: orderBy('surname', 'asc')
            -> get();

        return view('pages.index', compact('students'));
    }
    public function getStudent() {

        // get student with id = 5001
        // $student = Student :: find(5001);

        // get first student in table
        $student = Student :: where('id', '>', 2000)
            -> first();

        return view('pages.student', compact('student'));
    }
}
