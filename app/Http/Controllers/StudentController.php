<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function get_all_student(){
        $students=Student::all();
        return view('student_manage',['students'=>$students]);
    }
 

    public function get_student_by_id($id)
    {
        $students=Student::find($id);
        return view('student_edit',['students'=>$students]);
    }

    public function edit(Request $request,$id)
    {
        $student = Student::find($id);
        $student->fullname = $request->input('fullname');
        $student->birthday = $request->input('birthday');
        $student->address = $request->input('address');
        $student->update();
        return redirect('student');
    }}
