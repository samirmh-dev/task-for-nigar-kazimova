<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index() {
        return view('index');
    }

    public function flightResults(Request $request) {

        $results = Flight::where('departure_point', $request->departure_point)
            ->orWhere('destination_point', $request->destination_point)
            ->orWhere('departure_time', $request->departure_time)
            ->orWhere('return_time', $request->return_time)
            ->orWhere('passengers', $request->passengers)
            ->paginate(2);

        return view('flight-results', [
            'results' => $results->appends(Input::except('page'))
        ]);

    }

    public function hotelResults(Request $request) {

        $results = Hotel::where('departure_point', $request->departure_point)
            ->orWhere('destination_point', $request->destination_point)
            ->orWhere('departure_time', $request->departure_time)
            ->orWhere('return_time', $request->return_time)
            ->orWhere('passengers', $request->passengers)
            ->paginate(2);

        return view('flight-results', [
            'results' => $results->appends(Input::except('page'))
        ]);

    }
}
