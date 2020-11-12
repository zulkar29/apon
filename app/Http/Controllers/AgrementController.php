<?php

namespace App\Http\Controllers;

use App\Agrement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgrementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agrements=DB::table('agrements')->latest()->paginate(6);
        return view('agrement.index', ['agrements'=>$agrements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('agrement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agrement = new Agrement([
            'date'=> $request->get('date'),
            'active_date'=> $request->get('active_date'),
            'owner_name'=> $request->get('owner_name'),
            'owner_address'=> $request->get('owner_address'),
            'owner_nid'=> $request->get('owner_nid'),
            'guest_name'=> $request->get('guest_name'),
            'gurdian_name'=> $request->get('gurdian_name'),
            'guest_nid'=> $request->get('guest_nid'),
            'permanent_address'=> $request->get('permanent_address'),
            'seat_no'=> $request->get('seat_no'),
            'validity_date'=> $request->get('validity_date'),



            'admission_fee'=> $request->get('admission_fee'),
            'security_deposit'=> $request->get('security_deposit'),
            'seat_rent'=> $request->get('seat_rent'),
            'roo_no'=> $request->get('roo_no'),
            'floor'=> $request->get('floor'),
            'hostel_address'=> $request->get('hostel_address')
        ]);

        $agrement->save();
        return redirect ('agrement')->with('success', 'agrement Information saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agrements=Agrement::find($id);
        return view('agrement.show') ->with('agrements',$agrements);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agrements=Agrement::find($id);
        return view::make('agrement.edit')->with('agrement',$agrements);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData=$request->validate([
            'active_date'=>'required',
            'date'=>'required',

        ]);

        $agrement=Agrement::find($id);
        $agrement->date= $request->get('date');
        $agrement->active_date= $request->get('active_date');

        $agrement->owner_name= $request->get('owner_name');
        $agrement->owner_address= $request->get('owner_address');
        $agrement->owner_nid= $request->get('owner_nid');

        $agrement->guest_name= $request->get('guest_name');
        $agrement->gurdian_name= $request->get('gurdian_name');
        $agrement->guest_nid= $request->get('guest_nid');

        $agrement->permanent_address= $request->get('permanent_address');
        $agrement->seat_no= $request->get('seat_no');
        $agrement->validity_date= $request->get('validity_date');
        $agrement->admission_fee= $request->get('admission_fee');
        $agrement->security_deposit= $request->get('security_deposit');
        $agrement->seat_rent= $request->get('seat_rent');
        $agrement->roo_no= $request->get('roo_no');
        $agrement->floor= $request->get('floor');
        $agrement->hostel_address= $request->get('hostel_address');

        $agrement->save();
        return redirect ('/agrement')->with('success', 'agrement Information Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $agrement=Agrement::find($id);
            $agrement->delete();
            return redirect ('/agrement')->with('delete', 'agrement Information Deleted!');
        }
        catch (\Exception $exception){
            return $exception;
        }
    }
}
