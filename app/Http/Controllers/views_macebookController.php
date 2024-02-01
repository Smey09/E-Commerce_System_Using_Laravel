<?php

namespace App\Http\Controllers;

use App\Models\views_macbookModel;
use Illuminate\Http\Request;

class views_macebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = views_macbookModel::all();
        return view("macbook_views.front", compact("data"));
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
    public function show(views_macbookModel $views_macbookModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(views_macbookModel $views_macbookModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, views_macbookModel $views_macbookModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(views_macbookModel $views_macbookModel)
    {
        //
    }
}
