@extends('admin.layouts.layout')

@section('content')

    <div class="slim-mainpanel">
        <div class="container">
            <div class="slim-pageheader">
                <ol class="breadcrumb slim-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item">Hotels</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Hotel</li>
                </ol>
                <h6 class="slim-pagetitle">Edit Hotel</h6>
            </div><!-- slim-pageheader -->

            <form enctype="multipart/form-data" action="{{ url('admin/hotels/list-hotel/'.$hotel->id) }}" method="post" data-parsley-validate id="mydz">
                @csrf
                @method('put')
                <div class="row no-gutters wd-300">
                    <div class="col-md-12">
                        <div class="form-group mg-t--1 mg-md-t-0">
                            <label>Hotel name: <span class="tx-danger">*</span></label>
                            <input type="text" name="hotel_name" class="form-control wd-250" placeholder="Leaky Cauldron..." required value="{{old('hotel_name', $hotel->hotel_name)}}">
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('hotel_name')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mg-t--1 mg-md-t-0">
                            <label>Stars: </label>
                            <input type="number" name="stars" class="form-control wd-250" placeholder="3" max="5" required value="{{old('stars', $hotel->stars)}}">
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('stars')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mg-t--1 mg-md-t-0">
                            <label>City: <span class="tx-danger"></span></label>
                            <input type="text" name="city" class="form-control wd-250" placeholder="Hogsmit..." required value="{{old('city', $hotel->city)}}">
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('city')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mg-t--1 mg-md-t-0">
                            <label>Price: <span class="tx-danger">*</span></label>
                            <input type="text" name="price" class="form-control wd-250" placeholder="How much galleons?" required value="{{old('price', $hotel->price)}}">
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('price')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mg-t--1 mg-md-t-0">
                            <label>Map link: <span class="tx-danger"></span></label>
                            <input type="text" name="address" class="form-control wd-250" placeholder="0.000000, 0.00000" required value="{{old('address', $hotel->address)}}">
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('address')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mg-t--1 mg-md-t-0">
                            <label>Rooms: <span class="tx-danger">*</span></label>
                            <input type="number" name="rooms" class="form-control wd-250" placeholder="5..." required value="{{old('rooms', $hotel->rooms)}}">
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('rooms')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12 mg-b-30">
                        <label>Departure time: <span class="tx-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control fc-datepicker" name="departure_time" placeholder="MM/DD/YYYY" value="{{old('departure_time', $hotel->departure_time)}}">
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('departure_time')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12 mg-b-30">
                        <label>Return time:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" name="return_time" value="{{old('return_time', $hotel->return_time)}}">
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('return_time')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mg-t--1 mg-md-t-0">
                            <label>Image: <span class="tx-danger"></span></label>
                            <input type="file" name="image" class="form-control wd-250">
                            <img src="{{ url('images/'.$hotel->image) }}" style="width: 60px"/>
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('image')}}</span>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="form-group mg-t--1 mg-md-t-0">
                            <label>Description: </label>
                            <textarea rows="3" class="form-control mg-t-20" placeholder="Some Avada Kedavra here..." name="description">{{old('description', $hotel->description)}}</textarea>
                            <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('description')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12 mg-t--1 mg-md-t-0">
                        <button type="submit" class="btn btn-primary pd-x-20">Submit</button>
                    </div>
                </div>
            </form>

        </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('scripts')

    {{--<script src="{{ asset('admin/js/dropzone.js') }}"></script>--}}

    {{--<script>--}}
        {{--Dropzone.options.mydz = {--}}
            {{--autoProcessQueue: false,--}}
            {{--uploadMultiple: false,--}}
            {{--parallelUploads: 1,--}}
            {{--maxFiles: 1,--}}
            {{--previewsContainer: "#showhere",--}}
            {{--clickable: "#showhere",--}}
            {{--dictDefaultMessage: "",--}}
            {{--init: function() {--}}
                {{--this.on('addedfile', function(file){--}}
                    {{--if(this.files.length > 1) {--}}
                        {{--this.removeFile(this.files[0]);--}}
                    {{--}--}}
                {{--});--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}


@endsection




