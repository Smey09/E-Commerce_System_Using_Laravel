<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MajorModel;

class MajorController extends Controller
{
    public function index(){
        $data = MajorModel::all();
        return view("major.front", compact("data"));
    }
}
