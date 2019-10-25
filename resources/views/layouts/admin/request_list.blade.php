<?php
$single_master=Config::get('app_config.blade.single_master');
//dd($booking);
?>
@extends($single_master)
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugin/datatables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugin/datepicker/bootstrap-datepicker.min.css')}}">

@endsection
@section('content')

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Booking List</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">

                            <div class="table-responsive">
                                <table id="package" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <th>Name</th>
                                    <th>Phno</th>
                                    <th>Address</th>
                                    <th>Type</th>
                                    <th>Details</th>
                                    </thead>
                                    <tbody>
                                    @foreach($request as $value)
                                        <tr>
                                            <td>{{$value['name']}}</td>
                                            <td>{{$value['phno']}}</td>
                                            <td>{{$value['address']}}</td>


                                            @if($value['type'] == 1)
                                               <td>Custom Package</td>
                                            @elseif($value['type']==2)
                                                <td>Rental Car</td>
                                            @endif
                                            <td>
                                                <a href="{{URL::to('user/request_delete/'.$value['id'])}}"><button class="btn btn-danger btn-md" onclick="return confirm('Are you sure want to delete ? ')">Delete</button></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
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
    <script type="text/javascript" src="{{ URL::asset('plugin/datepicker/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            //for data table

            $('#package').DataTable({

            });
        });


        $( document ).ready(function() {
            $('#start_date').datepicker({
                date: '18/08/2018',
                'bootcssVer': 4,
                format: "dd/mm/yyyy",
                autoclose: true,
                todayBtn: true
            });
        });
        $( document ).ready(function() {
            $('#end_date').datepicker({
                date: '18/08/2018',
                'bootcssVer': 4,
                format: "dd/mm/yyyy",
                autoclose: true,
                todayBtn: true
            });
        });

    </script>

@endsection