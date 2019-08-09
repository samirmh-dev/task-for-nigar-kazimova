@extends('admin.layouts.layout')

@section('content')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hotels</li>
            </ol>
            <h6 class="slim-pagetitle">Hotels</h6>
        </div><!-- slim-pageheader -->

        <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0" style="padding: 0;">
            <a href="{{ url('admin/hotels/create-hotel') }}" class="btn btn-purple btn-block mg-b-10">+ Create Hotel</a>
        </div><!-- col-sm-3 -->

        <div class="section-wrapper">
            <div class="table-responsive">
                <table class="table mg-b-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hotel name</th>
                        <th>Stars</th>
                        <th>City</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Company</td>
                        <td>Airplane type</td>
                        <td>Dep. time</td>
                        <td>Ar. time</td>
                        <td>Price</td>
                        <td>
                            <a href="{{ url('admin/hotels/view-hotel') }}" style="margin-right: 10px"><i class="fa fa-eye"></i></a>
                            <a href="{{ url('admin/hotels/edit-hotel') }}" style="margin-right: 10px"><i class="fa fa-pencil"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="icon ion-trash-a"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Company</td>
                        <td>Airplane type</td>
                        <td>Dep. time</td>
                        <td>Ar. time</td>
                        <td>Price</td>
                        <td>
                            <a href="#" style="margin-right: 10px"><i class="fa fa-eye"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="fa fa-pencil"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="icon ion-trash-a"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Company</td>
                        <td>Airplane type</td>
                        <td>Dep. time</td>
                        <td>Ar. time</td>
                        <td>Price</td>
                        <td>
                            <a href="#" style="margin-right: 10px"><i class="fa fa-eye"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="fa fa-pencil"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="icon ion-trash-a"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div><!-- section-wrapper -->

    </div><!-- container -->
</div><!-- slim-mainpanel -->
@endsection

@section('scripts')

@endsection
