<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dt = new project;
        $dt->client_id = $request->client_id;
        $dt->project_name = $request->project_name;
        $dt->project_description = $request->project_description;
        $dt->project_type = $request->project_type;
        $dt->client_company = $request->client_company;
        $dt->project_budget = $request->project_budget;
        $dt->project_project_duration = $request->project_project_duration;
        return $dt->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dt = project::find($id);
        $dt->client_id = $request->client_id;
        $dt->project_name = $request->project_name;
        $dt->project_description = $request->project_description;
        $dt->project_type = $request->project_type;
        $dt->client_company = $request->client_company;
        $dt->project_budget = $request->project_budget;
        $dt->project_project_duration = $request->project_project_duration;
        return $dt->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}
