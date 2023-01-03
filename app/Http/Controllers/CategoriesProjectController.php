<?php

namespace App\Http\Controllers;

use App\Models\CategoriesProject;
use App\Http\Requests\StoreCategoriesProjectRequest;
use App\Http\Requests\UpdateCategoriesProjectRequest;

class CategoriesProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoriesProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriesProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriesProject  $categoriesProject
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriesProject $categoriesProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriesProject  $categoriesProject
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriesProject $categoriesProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriesProjectRequest  $request
     * @param  \App\Models\CategoriesProject  $categoriesProject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesProjectRequest $request, CategoriesProject $categoriesProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriesProject  $categoriesProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriesProject $categoriesProject)
    {
        //
    }
}
