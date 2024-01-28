<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $data = CustomerModel::all();
        return view("customer.front", compact("data"));
    }
    public function show($id){
        $data = CustomerModel::find($id);
        return view("customer.display", compact("data"));
    }
}
