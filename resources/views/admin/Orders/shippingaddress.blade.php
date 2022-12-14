@extends('layouts.app')
@section('title', 'Admin Dashboard')
@section('styles')
    @parent
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <!-- END: Vendor CSS-->

@endsection
@include('admin.topmenu')
@include('admin.sidebar')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="mb-2 content-header-left col-md-9 col-12">
                    <div class="row breadcrumbs-top">
                        <div class="col-md-12">
                            <h4 class="float-left mb-0 content-header-title">Dashboard</h4>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Orders
                                    </li>
                                    <li class="breadcrumb-item active">Shipping Address
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <x-success-message />
                <x-error-message />
                <div class="p-2 p-md-4 card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-inline">
                                <h3 class="d-inline">{{ $user->firstname . ' ' . $user->lastname }} Shipping Address</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-5 col-md-8 offset-md-2">
                            <div class="form-group">
                                <label for="">Company</label>
                                <input type="text" value="{{ $addres->company }}" id=""
                                    class="shadow form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Street</label>
                                <input type="text" value="{{ $addres->street }}" id=""
                                    class="shadow form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" value="{{ $addres->city }}" id="" class="shadow form-control"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="">State</label>
                                <input type="text" value="{{ $addres->state }}" id=""
                                    class="shadow form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Poster Code</label>
                                <input type="text" value="{{ $addres->Postcode }}" id=""
                                    class="shadow form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" value="{{ $user->phone }}" id="" class="shadow form-control"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Additional Note for this order</label>
                                <textarea name="" id="" class="shadow-sm form-control" rows="10" readonly>
                                    {{ $order->info }}
                                </textarea>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
@section('scripts')
    @parent
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('dash/app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}"></script>
    <!-- END: Page JS-->
@endsection
