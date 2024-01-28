<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = ProductModel::all();
        return view("product_view.front", compact("data"));
    }
    public function show($id){
        $data = ProductModel::find($id);
        return view("product_view.display", compact("data"));
    }
    public function create(){ //the name cannot be changed
        return view("product_view.add");
    }
    public function store(Request $request){
        $this->validate($request, [
            "pro_title" => "required",
            "pro_type" => "required",
            "pro_price" => "required"
        ]);

        ProductModel::create($request->all());
        return redirect()->route("product.index");
    }
    public function edit($id){ //the name cannot be changed
        $item = ProductModel::find($id);
        return view("product_view.change", compact("item"));
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            "pro_title" => "required",
            "pro_type" => "required",
            "pro_price" => "required"
        ]);

        ProductModel::find($id)->update($request->all());

        return redirect()->route("product.index");
    }

    public function destroy($id){
        ProductModel::find($id)->delete();
        return redirect()->route("product.index");
    }

}
