<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = CustomerModel::all();
        return view("customer.front", compact("customer"));
    }
    public function show($id){
        $customer = CustomerModel::find($id);
        return view("customer.display", compact("customer"));
    }
    public function create(){ //the name cannot be changed
        return view("customer.add");
    }
    public function store(Request $request){
        $this->validate($request, [
            "Cus_Name" => "required",
            "Cus_Tel" => "required",
            "Cus_Gender" => "required",
            "Cus_Order_model" => "required",
            "Cus_Order_price" => "required",
            "Cus_Order_date" => "required",
        ]);

        CustomerModel::create($request->all());
        return redirect()->route("customer.index");
    }
    public function edit($id){ //the name cannot be changed
        $customer = CustomerModel::find($id);
        return view("customer.change", compact("customer"));
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            "Cus_Name" => "required",
            "Cus_Tel" => "required",
            "Cus_Gender" => "required",
            "Cus_Order_model" => "required",
            "Cus_Order_price" => "required",
            "Cus_Order_date" => "required",
        ]);

        CustomerModel::find($id)->update($request->all());

        return redirect()->route("customer.index");
    }

    public function destroy($id){
        CustomerModel::find($id)->delete();
        return redirect()->route("customer.index");
    }
}
