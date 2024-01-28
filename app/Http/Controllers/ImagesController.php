<?php

namespace App\Http\Controllers;

use App\Models\ImagesModel;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index()
    {
        $data = ImagesModel::all();
        return view("product_view.front", compact("data"));
    }

    public function create()
    {
        return view("product_view.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImagesModel $imagesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImagesModel $imagesModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImagesModel $imagesModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImagesModel $imagesModel)
    {
        //
    }
}
