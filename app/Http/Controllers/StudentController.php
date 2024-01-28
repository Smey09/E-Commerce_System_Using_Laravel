<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data = StudentModel::all();
        return view("student_view.front", compact("data"));
    }
    public function show($id){
        $data = StudentModel::find($id);
        return view("student_view.display", compact("data"));
    }
    public function create(){ //the name cannot be changed
        return view("student_view.add");
    }

    public function store(Request $request){
        $this->validate($request, [
            "sName" => "required",
            "tel" => "required",
            "gender" => "required"
        ]);


        StudentModel::create($request->all());
        return redirect()->route("st.index");
    }

    public function edit($id){ //the name cannot be changed
        $item = StudentModel::find($id);
        return view("student_view.change", compact("item"));
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            "sName" => "required",
            "tel" => "required",
            "gender" => "required"
        ]);

        StudentModel::find($id)->update($request->all());

        return redirect()->route("st.index");
    }

    public function destroy($id){
        StudentModel::find($id)->delete();
        return redirect()->route("st.index");
    }
}

