<?php

namespace App\Http\Controllers;

use App\Mail\DateCreated;
use App\Date;
use Illuminate\Http\Request;



class datesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Date::all();

        return view('Welcome', compact('dates'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {



      $attributes = $this->validateDates();

      $dates = Date::create(request(['name', 'lastName', 'phoneNumber', 'email', 'datetimepicker1', 'datetimepicker2',
                            'reservation_date', 'reservation_end_date', 'user_id', 'comment']));


      /* \Mail::to($dates->owner->email)->send(
           new DateCreated($dates)
       );*/

        return redirect('/');
        // return redirect('appointments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Date  $dates
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $dates = Date::findorfail($id);
        return view('dates.show', compact('dates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Date  $dates
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $dates = Date::findOrfail($id);
        return view('dates.edit', compact('dates'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Date  $dates
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        $dates = Date::findOrFail($id);

        $dates->update($this->validateDates());

        $dates->update(request(['name', 'lastName', 'phoneNumber', 'email', 'datetimepicker1',
            'datetimepicker2', 'reservation_date', 'reservation_end_date',
            'user_id', 'comment']));


        return redirect('/appointments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Date  $dates
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Date::findorfail($id)->delete();
        return redirect('/appointments');
    }

    public function validateDates(){

        return request()->validate([

            'name' => ['required', 'min:3'],
            'lastName' => ['required', 'min:4'],
            'phoneNumber' => ['required', 'min:10'],
            'email' => ['required', 'min:5'],

        ]);
    }
}
