<?php

namespace App\Http\Controllers;

use App\Models\views_product_detailsModel;
use Illuminate\Http\Request;

class views_product_detailsController extends Controller
{
    public function index()
    {
        $data = views_product_detailsModel::all();
        return view("views_product_details.front", compact("data"));
    }
    public function show($id){
        $data = views_product_detailsModel::find($id);
        return view("product_view.display", compact("data"));
    }
    public function create(){ //the name cannot be changed
        return view("product_view.add");
    }
    public function store(Request $request){
        $this->validate($request, [
            "pro_name" => "required",
            "pro_type" => "required",
            "pro_price" => "required",
            "pro_images" => "required",
        ]);

        views_product_detailsModel::create($request->all());
        return redirect()->route("product.index");
    }
    public function edit($id){ //the name cannot be changed
        $item = views_product_detailsModel::find($id);
        return view("product_view.change", compact("item"));
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            "pro_name" => "required",
            "pro_type" => "required",
            "pro_price" => "required",
            "pro_images" => "required",
        ]);

        views_product_detailsModel::find($id)->update($request->all());

        return redirect()->route("product.index");
    }

    public function destroy($id){
        views_product_detailsModel::find($id)->delete();
        return redirect()->route("product.index");
    }
}
