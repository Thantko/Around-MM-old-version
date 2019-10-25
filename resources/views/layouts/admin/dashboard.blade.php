<?php

$single_master=Config::get('app_config.blade.single_master');

?>
@extends($single_master)
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugin/datatables/css/jquery.dataTables.min.css')}}">
@endsection
@section('content')

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <!-- stats -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body text-xs-left">
                                            <h3 class="pink">{{$booking_count}}</h3>
                                            <span>Package Booking List</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-book pink font-large-2 float-xs-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body text-xs-left">
                                            <h3 class="teal">{{$request_count}}</h3>
                                            <span>Custom Request List</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-car red font-large-2 float-xs-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body text-xs-left">
                                            <h3 class="deep-orange">{{$package_count}}</h3>
                                            <span>Packages</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-list2 teal font-large-2 float-xs-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body text-xs-left">
                                            <h3 class="pink">{{$user_count}}</h3>
                                            <span>User Count List</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-user pink font-large-2 float-xs-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body text-xs-left">
                                            <h3 class="teal">{{$service_count}}</h3>
                                            <span>Service Count List</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-server red font-large-2 float-xs-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>



@endsection


@section('script')

    <script type="text/javascript" src="{{ URL::asset('plugin/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            //for data table
            $('#example').DataTable({

            });

            $('#rental').DataTable({

            });
        });
    </script>

@endsection