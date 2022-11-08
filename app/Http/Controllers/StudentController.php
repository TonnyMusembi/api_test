<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students= Student::latest()->paginate(10);
      return response()->json([
        'message' => 'selected successfully',
        'data' => $students
      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id' => 'required',
            'name' => 'required',
            'course' => 'required'
        ]);
        if($validator->fails()){
            return  response()->json(
             $validator->errors());

        }
       $students = Student::create([
        'id'=>$request->id,
        'name' =>$request->name,
        'course' => $request->course
       ]);
       return response()->json([
        'message' => 'created successfully',
        'status' =>200
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'id' => 'required',
            'name' => 'required',
            'course' => 'required'

        ]);
        if($validator->fails()){
            return response()->json(
                $validator->errors());
        }


        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$students)
    {
        $students->delete();

        return response()->json([
            'message' => 'deleted successfully',
            'data' => $students
        ]);
    }
}
