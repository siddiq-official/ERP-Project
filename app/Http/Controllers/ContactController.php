<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
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
        $dt = new Contact;
        $dt->contacts_catagory = $request->contacts_catagory;
        $dt->full_name = $request->full_name;
        $dt->phone_no = $request->phone_no;
        $dt->phone_no_optonal = $request->phone_no_optonal;
        $dt->email = $request->email;
        $dt->address = $request->address;
        return $dt->save();
        //DB::table("contacts")->create($request);// Contact::insert($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dt =  Contact::find($id);
        return view('contacts_edit', compact('dt'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dt =  Contact::find($id);
        $dt->contacts_catagory = $request->contacts_catagory;
        $dt->full_name = $request->full_name;
        $dt->phone_no = $request->phone_no;
        $dt->phone_no_optonal = $request->phone_no_optonal;
        $dt->email = $request->email;
        $dt->address = $request->address;
        return $dt->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
