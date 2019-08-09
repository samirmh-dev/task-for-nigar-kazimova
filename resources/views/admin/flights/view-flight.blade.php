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



    </div><!-- container -->
</div><!-- slim-mainpanel -->

<div class="slim-footer">
    <div class="container">
        <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
        <p>Designed by: <a href="">ThemePixels</a></p>
    </div><!-- container -->
</div><!-- slim-footer -->
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
