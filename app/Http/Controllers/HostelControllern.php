<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use Illuminate\Http\Request;

class HostelControllern extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create-hostel');
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
      
        // return $request->all();
        // $request->validate([
        //     'city'=>'required',
        //     'hostel_name'=>'required',
        //     'hostel_type'=>'required',
        //     'hostel_img'=>'required',
        //     'hostel_person_qnty'=>'required',
        //     'hostel_facilities'=>'required',
        //     'hostel_cell_number'=>'required',
        //     'hostel_address'=>'required',
            

        //     'hostel_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        // ]);
      
            $hostel = new Hostel;
            $hostel->user_id=$request->get('user_id');
            $hostel->city=$request->get('city');
            $hostel->hostel_name=$request->get('hostel_name');
            $hostel->hostel_type=$request->get('hostel_type');
            $hostel->available_seats=$request->get('hostel_seates');

            $imgname = "";
            if ($request->hasFile('hostel_img')) {
                $current = date('ymd') . rand(1, 999999) . time();
                $file = $request->file('hostel_img');
                $imgname = $current . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $imgname);
                $hostel->hostel_img = $imgname;
            }

            $hostel->total_persons=$request->get('hostel_person_qnty');
            $hostel->facilities=$request->get('hostel_facilities');
            $hostel->warden_name=$request->get('hostel_cell_number');
            $hostel->hostel_address=$request->get('hostel_address');

            // $imageName = time().'.'.$request->image->extension();  
     
            // $request->image->move(public_path('images'), $imageName);
            $hostel->save();
        //    return redirect('create-account');
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function show(Hostel $hostel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hostel $hostel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hostel $hostel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hostel $hostel)
    {
        //
    }
}
