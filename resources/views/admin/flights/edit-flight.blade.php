@extends('admin.layouts.layout')

@section('content')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item">Flights</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Flights</li>
            </ol>
            <h6 class="slim-pagetitle">Edit Flights</h6>
        </div><!-- slim-pageheader -->

        <form autocomplete="off" action="{{ url('admin/flights/list-flight/'.$flight->id) }}" method="post" data-parsley-validate>
            @csrf
            @method('put')
            <div class="row no-gutters wd-300">
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Company name: <span class="tx-danger">*</span></label>
                        <input type="text" name="company_name" class="form-control wd-250" placeholder="Hogwarts..." required value="{{old('company_name', $flight->company_name)}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('company_name')}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Airplane type: <span class="tx-danger">*</span></label>
                        <input type="text" name="airplane_type" class="form-control wd-250" placeholder="Broom..." required value="{{old('airplane_type', $flight->airplane_type)}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('airplane_type')}}</span>
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
                        <input type="text" class="form-control fc-datepicker" name="departure_time" placeholder="MM/DD/YYYY" value="{{old('departure_time', $flight->departure_time)}}">
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
                        <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" name="return_time" value="{{old('return_time', $flight->return_time)}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('return_time')}}</span>
                    </div>
                </div>
                <div class="col-md-12 mg-b-30">
                    <label>Estimate arrival: <span class="tx-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" name="estimate_arrival" value="{{old('estimate_arrival', $flight->estimate_arrival)}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('estimate_arrival')}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Price: <span class="tx-danger">*</span></label>
                        <input type="text" name="price" class="form-control wd-250" placeholder="How much galleons?" required value="{{old('price', $flight->price)}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('price')}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Destination Point: <span class="tx-danger"></span></label>
                        <div class="autocomplete" style="width:300px;">
                        <input id="destinationPoint" type="text" name="destination_point" class="form-control wd-250" placeholder="Amsterdam..." required value="{{old('destination_point', $flight->destination_point)}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('destination_point')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <div class="autocomplete" style="width:300px;">
                        <label>Departure Point: <span class="tx-danger"></span></label>
                        <input id="departurePoint" type="text" name="departure_point" class="form-control wd-250" placeholder="Baku..." required value="{{old('departure_point', $flight->departure_point)}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('departure_point')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Passengers: <span class="tx-danger"></span></label>
                        <input type="number" name="passengers" class="form-control wd-250" placeholder="2..." required value="{{old('passengers', $flight->passengers)}}">
                        <span class="col-md-5 col-xs-2 text-danger">{{$errors->first('passengers')}}</span>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Description: </label>
                        <textarea rows="3" class="form-control mg-t-20" placeholder="Some Avada Kedavra here..." name="description">{{old('description', $flight->description)}}</textarea>
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
