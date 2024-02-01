<?php

namespace App\Http\Controllers;

use App\Models\orders_viewModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class orders_viewController extends Controller
{

    public function index()
    {
        // $customer = CustomerModel::all();
        $order = ProductModel::all();
        return view("orders_view.front", compact("order"));
    }

    public function show($id){
        $order = orders_viewModel::find($id);
        return view("orders_view.display", compact("order"));
    }

    public function create(){ //the name cannot be changed
        return view("orders_view.add");
    }

    public function store(Request $request){
        $this->validate($request, [
            "pro_name" => "required",
            "pro_type" => "required",
            "pro_price" => "required",
            "pro_images" => "required",
        ]);

        orders_viewModel::create($request->all());
        return redirect()->route("orders_views.index");
    }

    public function edit($id){ //the name cannot be changed
        $order = orders_viewModel::find($id);
        return view("orders_views.change", compact("order"));
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            "pro_name" => "required",
            "pro_type" => "required",
            "pro_price" => "required",
            "pro_images" => "required",
        ]);

        orders_viewModel::find($id)->update($request->all());

        return redirect()->route("orders_views.index");
    }

    public function destroy($id){
        orders_viewModel::find($id)->delete();
        return redirect()->route("orders_views.index");
    }
}
