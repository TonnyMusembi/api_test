<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function index(){
        $students= Student::latest()->paginate(10);
        return response()->json([
            'message' => 'successfully',
            'data'=> $students
        ]);

    }
    public function getAllStudents() {
    $students = Student::get()->toJson(JSON_PRETTY_PRINT);
    return response($students, 200);
  }

    public function createStudent(Request $request) {
      // logic to create a student record goes here
    }
    public function getStudent($id) {
      // logic to get a student record goes here
    }

    public function updateStudent(Request $request, $id) {
      // logic to update a student record goes here
    }

    public function deleteStudent ($id) {
        
      // logic to delete a student record goes here
    }
}

