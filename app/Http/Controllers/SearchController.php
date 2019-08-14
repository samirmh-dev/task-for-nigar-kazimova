<?php

namespace App\Http\Controllers;

use App\City;
use App\Flight;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class SearchController extends Controller
{
    public function index() {
        $cities = City::all()->pluck('name');

        return view('index', [
            'cities' => $cities,
        ]);
    }

    public function flightResults(Request $request) {

        $results = Flight::where('departure_point', 'like', '%' . $request->departure_point . '%')
            ->where('destination_point', 'like', '%' . $request->destination_point . '%')
            ->where('departure_time', Carbon::parse($request->departure_time)->startOfDay())
            ->where('return_time', Carbon::parse($request->return_time)->startOfDay())
            ->where('passengers', $request->passengers)
            ->paginate(5);

        return view('flight-results', [
            'results' => $results->appends(Input::except('page'))
        ]);

    }

    public function hotelResults(Request $request) {

        $results = Hotel::where('city', 'like', '%' . $request->city . '%')
            ->where('departure_time', Carbon::parse($request->departure_time)->startOfDay())
            ->where('return_time', Carbon::parse($request->return_time)->startOfDay())
            ->where('rooms', $request->rooms)
            ->paginate(5);

        $city = $request->city;

        return view('hotel-results', [
            'results' => $results->appends(Input::except('page')),
            'city' => $city,
        ]);

    }
}
