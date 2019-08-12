<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
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
        $hotel->latitude = $request->latitude;
        $hotel->longitude = $request->longitude;
        $hotel->price = $request->price;
        $hotel->description = $request->description;

//        dd($_FILES);
//
//        $input = Input::all();
//        $rules = array(
//            'file' => 'image|max:3000',
//        );
//
//        $validation = Validator::make($input, $rules);
//
//        if ($validation->fails())
//        {
//            return Response::make($validation->errors->first(), 400);
//        }
//
//        $file = Input::file('file');
//
//        $extension = File::extension($file['name']);
//        $directory = public_path('images/'.sha1(time()));
//        $filename = sha1(time().time()).".{$extension}";
//
//        //$upload_success = Input::upload('file', $directory, $filename);

//        Image::make($request->file->getRealPath())->resize(600, null, function($constraint){
//            $constraint->aspectRatio();
//        })->save(public_path('images/'.$filename));

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
        $hotel->latitude = $request->latitude;
        $hotel->longitude = $request->longitude;
        $hotel->price = $request->price;
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
