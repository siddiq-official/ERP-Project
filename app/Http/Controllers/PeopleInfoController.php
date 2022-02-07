<?php

namespace App\Http\Controllers;

use App\peopleinfo;
use Illuminate\Http\Request;
use DB;
class PeopleInfoController extends Controller
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
        $dt = new peopleinfo;
        $dt->name = $request->name;
        $dt->catagory = $request->catagory;
        $dt->project_or_shope_name = $request->project_or_shope_name;
        $dt->phone_no = $request->phone_no;
        $dt->phone_no_optonal = $request->phone_no_optonal;
        $dt->email = $request->email;
        $dt->address = $request->address;
        $dt->about = $request->about;
        return $dt->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PeopleInfo  $peopleInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PeopleInfo $peopleInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PeopleInfo  $peopleInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PeopleInfo $peopleInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PeopleInfo  $peopleInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeopleInfo $peopleInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PeopleInfo  $peopleInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeopleInfo $peopleInfo)
    {
        //
    }
}
