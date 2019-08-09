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

        <form action="{{ url('admin/hotels/list-hotel') }}" data-parsley-validate class="dropzone" id="mydz">
            <div class="row no-gutters wd-300">
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Hotel name: <span class="tx-danger">*</span></label>
                        <input type="text" name="hotel-name" class="form-control wd-250" placeholder="Leaky Cauldron..." required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Stars: </label>
                        <input type="number" name="stars" class="form-control wd-250" placeholder="3" max="5" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>City: <span class="tx-danger"></span></label>
                        <input type="text" name="city" class="form-control wd-250" placeholder="Hogsmit..." required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Price: <span class="tx-danger">*</span></label>
                        <input type="text" name="price" class="form-control wd-250" placeholder="How much galleons?" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Latitude: <span class="tx-danger"></span></label>
                        <input type="text" name="latitude" class="form-control wd-250" placeholder="0.000000" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Longitude: <span class="tx-danger"></span></label>
                        <input type="text" name="longitude" class="form-control wd-250" placeholder="0.000000" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <style>

                    </style>
                    <label>Image: </label>
                    <div class="form-group mg-t--1 mg-md-t-0" id="dropzoneDiv">
                        <div style="float:right; width:100%; height:150px; text-align:center; border: 1px dashed #888; padding: 0px; margin-bottom: 20px" class="dropzone-previews" id="showhere">Drop image here</div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Description: </label>
                        <textarea rows="3" class="form-control mg-t-20" placeholder="Some Avada Kedavra here..."></textarea>
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
<script src="{{ asset('admin/js/dropzone.js') }}"></script>
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

<script>
    Dropzone.options.mydz = {
        autoProcessQueue: false,
        uploadMultiple: false,
        parallelUploads: 1,
        maxFiles: 1,
        previewsContainer: "#showhere",
        clickable: "#showhere",
        dictDefaultMessage: "",
        init: function() {
            this.on('addedfile', function(file){
                if(this.files.length > 1) {
                    this.removeFile(this.files[0]);
                }
            });
        }
    }
</script>


@endsection




