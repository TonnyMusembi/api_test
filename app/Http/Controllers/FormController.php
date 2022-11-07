<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class FormController extends Controller
{
    //

    public function index(){
        return view ('form');

    }
    public function store(Request $request){

    }
    public function delete(){

    }
}
