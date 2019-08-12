@extends('admin.layouts.layout')

@section('content')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item">Flights</li>
                <li class="breadcrumb-item active" aria-current="page">Create Flights</li>
            </ol>
            <h6 class="slim-pagetitle">Create Flights</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
            <h3>{{ $hotel->hotel_name }}</h3>
            <h5>{{ $hotel->stars }}</h5>
            <h5>{{ $hotel->city }}</h5>
            <h5>{{ $hotel->latitude }}</h5>
            <h5>{{ $hotel->longitude }}</h5>
            <h5>{{ $hotel->price }}</h5>
            <h5>{{ $hotel->description }}</h5>
            <img src="{{ url('images/'.$hotel->image) }}"/>
        </div>

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
