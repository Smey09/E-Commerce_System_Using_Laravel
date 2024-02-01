<?php

namespace App\Http\Controllers;

use App\Models\views_asusModel;
use Illuminate\Http\Request;

class views_asusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = views_asusModel::all();
        return view("asus_views.front", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(views_asusModel $views_asusModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(views_asusModel $views_asusModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, views_asusModel $views_asusModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(views_asusModel $views_asusModel)
    {
        //
    }
}
