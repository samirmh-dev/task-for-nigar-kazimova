<?php

namespace App\Http\Controllers;

use App\City;
use App\Flight;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index() {
        $cities = City::all()->pluck('name');

        return view('index', [
            'cities' => $cities,
        ]);
    }

    public function flightResults(Request $request) {

        $results = Flight::where('departure_point', $request->departure_point)
            ->orWhere('destination_point', $request->destination_point)
            ->orWhere('departure_time', $request->departure_time)
            ->orWhere('return_time', $request->return_time)
            ->orWhere('passengers', $request->passengers)
            ->paginate(5);

        return view('flight-results', [
            'results' => $results->appends(Input::except('page'))
        ]);

    }

    public function hotelResults(Request $request) {

        $results = Hotel::where('city', $request->city)
            ->orWhere('departure_time', $request->departure_time)
            ->orWhere('return_time', $request->return_time)
            ->orWhere('rooms', $request->rooms)
            ->paginate(5);

        $city = $request->city;

        return view('hotel-results', [
            'results' => $results->appends(Input::except('page')),
            'city' => $city,
        ]);

    }
}
