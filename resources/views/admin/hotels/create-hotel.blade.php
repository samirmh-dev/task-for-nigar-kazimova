@extends('admin.layouts.layout')

@section('content')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item">Hotels</li>
                <li class="breadcrumb-item active" aria-current="page">Create Hotel</li>
            </ol>
            <h6 class="slim-pagetitle">Create Hotel</h6>
        </div><!-- slim-pageheader -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form autocomplete="off" enctype="multipart/form-data" action="{{ url('admin/hotels/list-hotel') }}" method="POST" data-parsley-validate id="my-awesome-dropzone">
            @csrf
            <div class="row no-gutters wd-300">
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Hotel name: <span class="tx-danger">*</span></label>
                        <input type="text" name="hotel_name" class="form-control wd-250" placeholder="Leaky Cauldron..." required value="{{old('hotel_name')}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('hotel_name')}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Stars: </label>
                        <input type="number" name="stars" class="form-control wd-250" placeholder="3" max="5" required value="{{old('stars')}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('stars')}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>City: <span class="tx-danger"></span></label>
                        <input type="text" name="city" class="form-control wd-250" placeholder="Hogsmit..." required value="{{old('city')}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('city')}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Price: <span class="tx-danger">*</span></label>
                        <input type="text" name="price" class="form-control wd-250" placeholder="How much galleons?" required value="{{old('price')}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('price')}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Map link: <span class="tx-danger"></span></label>
                        <input type="text" name="address" class="form-control wd-250" placeholder="0.000000, 0.00000" required value="{{old('address')}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('address')}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Rooms: <span class="tx-danger">*</span></label>
                        <input type="number" name="rooms" class="form-control wd-250" placeholder="5..." required value="{{old('rooms')}}">
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
                        <input type="text" class="form-control fc-datepicker" name="departure_time" placeholder="MM/DD/YYYY" value="{{old('departure_time')}}">
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
                        <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" name="return_time" value="{{old('return_time')}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('return_time')}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Image: <span class="tx-danger"></span></label>
                        <input type="file" name="image" class="form-control wd-250">
                        {{--<div class="dz-message">--}}
                            {{--<div class="col-xs-8">--}}
                                {{--<div class="message">--}}
                                    {{--<p>Drop files here or Click to Upload</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="fallback">--}}
                            {{--<input type="file" name="file" multiple>--}}
                        {{--</div>--}}

                        {{--Dropzone Preview Template--}}
                        {{--<div id="preview" style="display: none;">--}}

                            {{--<div class="dz-preview dz-file-preview">--}}
                                {{--<div class="dz-image"><img data-dz-thumbnail /></div>--}}

                                {{--<div class="dz-details">--}}
                                    {{--<div class="dz-size"><span data-dz-size></span></div>--}}
                                    {{--<div class="dz-filename"><span data-dz-name></span></div>--}}
                                {{--</div>--}}
                                {{--<div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>--}}
                                {{--<div class="dz-error-message"><span data-dz-errormessage></span></div>--}}



                                {{--<div class="dz-success-mark">--}}

                                    {{--<svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="<a class="vglnk" href="http://www.w3.org/2000/svg" rel="nofollow"><span>http</span><span>://</span><span>www</span><span>.</span><span>w3</span><span>.</span><span>org</span><span>/</span><span>2000</span><span>/</span><span>svg</span></a>" xmlns:xlink="<a class="vglnk" href="http://www.w3.org/1999/xlink" rel="nofollow"><span>http</span><span>://</span><span>www</span><span>.</span><span>w3</span><span>.</span><span>org</span><span>/</span><span>1999</span><span>/</span><span>xlink</span></a>" xmlns:sketch="<a class="vglnk" href="http://www.bohemiancoding.com/sketch/ns" rel="nofollow"><span>http</span><span>://</span><span>www</span><span>.</span><span>bohemiancoding</span><span>.</span><span>com</span><span>/</span><span>sketch</span><span>/</span><span>ns</span></a>">--}}
                                    {{--<!-- Generator: Sketch 3.2.1 (9971) - <a class="vglnk" href="http://www.bohemiancoding.com/sketch" rel="nofollow"><span>http</span><span>://</span><span>www</span><span>.</span><span>bohemiancoding</span><span>.</span><span>com</span><span>/</span><span>sketch</span></a> -->--}}
                                    {{--<title>Check</title>--}}
                                    {{--<desc>Created with Sketch.</desc>--}}
                                    {{--<defs></defs>--}}
                                    {{--<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">--}}
                                        {{--<path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>--}}
                                    {{--</g>--}}
                                    {{--</svg>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--End of Dropzone Preview Template--}}

                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('image')}}</span>
                    </div>
                </div>
                {{--<div class="col-md-12">--}}
                    {{--<label>Image: </label>--}}
                    {{--<div class="form-group mg-t--1 mg-md-t-0" id="dropzoneDiv">--}}
                        {{--<div style="float:right; width:100%; height:150px; text-align:center; border: 1px dashed #888; padding: 0px; margin-bottom: 20px" class="dropzone-previews" id="showhere">Drop image here</div>--}}
                    {{--</div>--}}
                    {{--<span class="col-md-5 col-xs-2 text-danger">{{$errors->first('file')}}</span>--}}
                {{--</div>--}}
            </div>
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Description: </label>
                        <textarea rows="3" class="form-control mg-t-20" placeholder="Some Avada Kedavra here..." name="description">{{old('description')}}</textarea>
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

<script src="{{ asset('admin/lib/moment/js/moment.js') }}"></script>
<script src="{{ asset('admin/lib/jquery-ui/js/jquery-ui.js') }}"></script>
{{--<script src="{{ asset('admin/js/dropzone.js') }}"></script>--}}
{{--<script src="{{ asset('admin/js/dropzone-config.js') }}"></script>--}}

<script>
    $(function(){
        'use strict';

        // Datepicker
        $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
        });

    });
</script>

@endsection




