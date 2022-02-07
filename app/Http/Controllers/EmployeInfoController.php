<?php

namespace App\Http\Controllers;

use App\EmployeInfo;
use Illuminate\Http\Request;
use DB;

class EmployeInfoController extends Controller
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
        $dt = new EmployeInfo;
        $dt->name = $request->name;
        $dt->position = $request->position;
        $dt->position_label = $request->position_label;
        $dt->phone_no = $request->phone_no;
        $dt->phone_no_optonal = $request->phone_no_optonal;
        $dt->nid = $request->nid;
        $dt->birth_cirtificate = $request->birth_cirtificate;
        $dt->passport = $request->passport;
        $dt->email = $request->email;
        $dt->present_address = $request->present_address;
        $dt->parmanent_address = $request->parmanent_address;
        $dt->about = $request->about;
        return $dt->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeInfo  $employeInfo
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeInfo $employeInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeInfo  $employeInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeInfo $employeInfo)
    {
        $dt =  EmployeInfo::find($id);
        return view('contacts_edit', compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeInfo  $employeInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dt = EmployeInfo::find($id);
        $dt->name = $request->name;
        $dt->position = $request->position;
        $dt->position_label = $request->position_label;
        $dt->phone_no = $request->phone_no;
        $dt->phone_no_optonal = $request->phone_no_optonal;
        $dt->nid = $request->nid;
        $dt->birth_cirtificate = $request->birth_cirtificate;
        $dt->passport = $request->passport;
        $dt->email = $request->email;
        $dt->present_address = $request->present_address;
        $dt->parmanent_address = $request->parmanent_address;
        $dt->about = $request->about;
        return $dt->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeInfo  $employeInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeInfo $employeInfo)
    {
        //
    }
}
