<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();

        return view('admin.hotels.list-hotel', [
            'hotels' => $hotels,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $photos_path;

    public function __construct()
    {
        $this->photos_path = public_path('/images');
    }

    public function create()
    {
        return view('admin.hotels.create-hotel');
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
            'hotel_name' => 'required|min:3|max:255',
            'city' => 'required|min:3|max:255',
            'stars' => 'required',
            'price' => 'required',
        ];

        $this->validate($request, $rules);

        $hotel = new Hotel();


        $hotel->hotel_name = $request->hotel_name;
        $hotel->stars = $request->stars;
        $hotel->city = $request->city;
        $hotel->address = $request->address;
        $hotel->price = $request->price;
        $hotel->rooms = $request->rooms;
        $hotel->departure_time = Carbon::parse($request->departure_time);
        $hotel->return_time = Carbon::parse($request->return_time);
        $hotel->description = $request->description;

//        $photos = $request->file('file');

//        if (!is_array($photos)) {
//            $photos = [$photos];
//        }
//
//        if (!is_dir($this->photos_path)) {
//            mkdir($this->photos_path, 0777);
//        }
//
//        for ($i = 0; $i < count($photos); $i++) {
//            $photo = $photos[$i];
//            $name = sha1(date('YmdHis') . str_random(30));
//            $save_name = $name . '.' . $photo->getClientOriginalExtension();
//            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
//
//            Image::make($photo)
//                ->resize(600, null, function ($constraints) {
//                    $constraints->aspectRatio();
//                })
//                ->save($this->photos_path . '/' . $resize_name);
//
//            $photo->move($this->photos_path, $save_name);
//
//            $upload = new Upload();
//            $upload->filename = $save_name;
//            $upload->resized_name = $resize_name;
//            $upload->original_name = basename($photo->getClientOriginalName());
//            $upload->save();

            if ($request->hasFile('image')) {
                $filename = time() . '.' . $request->image->getClientOriginalExtension();
                $path_600 = public_path('images/' . $filename);
                Image::make($request->image->getRealPath())->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path_600);
                $hotel->image = $filename;
            }
            $hotel->save();

            return redirect('admin/hotels/list-hotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::findOrFail($id);

        return view('admin.hotels.view-hotel', [
            'hotel' => $hotel,
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
        $hotel = Hotel::findOrFail($id);

        return view('admin.hotels.edit-hotel', [
            'hotel' => $hotel,
        ]);
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
        $rules = [
            'hotel_name' => 'required|min:3|max:255',
            'city' => 'required|min:3|max:255',
            'stars' => 'required',
            'price' => 'required',
        ];

        $this->validate($request, $rules);

        $hotel = Hotel::findOrFail($id);

        $hotel->hotel_name = $request->hotel_name;
        $hotel->stars = $request->stars;
        $hotel->city = $request->city;
        $hotel->address = $request->address;
        $hotel->price = $request->price;
        $hotel->rooms = $request->rooms;
        $hotel->departure_time = Carbon::parse($request->departure_time);
        $hotel->return_time = Carbon::parse($request->return_time);
        $hotel->description = $request->description;

        if ($request->hasFile('image')) {
            $filename = time().'.'.$request->image->getClientOriginalExtension();
            $path_600 = public_path('images/'.$filename);
            Image::make($request->image->getRealPath())->resize(600, null, function($constraint){
                $constraint->aspectRatio();
            })->save($path_600);
            $hotel->image = $filename;
        }

        $hotel->save();

        return redirect('admin/hotels/list-hotel/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
    }
}
