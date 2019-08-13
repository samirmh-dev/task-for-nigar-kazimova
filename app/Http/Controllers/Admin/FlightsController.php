<?php

namespace App\Http\Controllers\Admin;

use App\Flight;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all();

        return view('admin.flights.list-flight', [
            'flights' => $flights,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flights.create-flight');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'company_name' => 'required|min:3|max:255',
            'airplane_type' => 'required|min:3|max:255',
            'departure_time' => 'required',
            'estimate_arrival' => 'required',
            'price' => 'required',
        ];

        $this->validate($request, $rules);

        $flight = new Flight();

        $flight->company_name = $request->company_name;
        $flight->airplane_type = $request->airplane_type;
        $flight->departure_time = Carbon::parse($request->departure_time);
        $flight->return_time = Carbon::parse($request->return_time);
        $flight->estimate_arrival = Carbon::parse($request->estimate_arrival);
        $flight->price = $request->price;
        $flight->destination_point = $request->destination_point;
        $flight->departure_point = $request->departure_point;
        $flight->passengers = $request->passengers;
        $flight->description = $request->description;
        $flight->save();

        return redirect('admin/flights/list-flight');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flight = Flight::findOrFail($id);

        return view('admin.flights.view-flight', [
            'flight' => $flight,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flight = Flight::findOrFail($id);

        return view('admin.flights.edit-flight', [
            'flight' => $flight,
        ]);
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'company_name' => 'required|min:3|max:255',
            'airplane_type' => 'required|min:3|max:255',
            'departure_time' => 'required',
            'estimate_arrival' => 'required',
            'price' => 'required',
        ];

        $this->validate($request, $rules);

        $flight = Flight::findOrFail($id);

        $flight->company_name = $request->company_name;
        $flight->airplane_type = $request->airplane_type;
        $flight->departure_time = Carbon::parse($request->departure_time);
        $flight->return_time = Carbon::parse($request->return_time);
        $flight->estimate_arrival = Carbon::parse($request->estimate_arrival);
        $flight->price = $request->price;
        $flight->destination_point = $request->destination_point;
        $flight->departure_point = $request->departure_point;
        $flight->passengers = $request->passengers;
        $flight->description = $request->description;
        $flight->save();

        return redirect('admin/flights/list-flight');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::findOrFail($id);
        $flight->delete();
    }
}
