<?php
$single_master=Config::get('app_config.blade.single_master');
//dd($package);
//$s = explode(",", $package[0]['route']);
//dd($s);
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
                        <h4 class="card-title">Create New Package</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">

                            <div class="container">
                                        <form action="{{URL::to('user/create_package')}}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="inp_title">Title</label>
                                                    <input type="text" id="inp_title" name="title" class="form-control" required>
                                                </div>

                                            </div>


                                            <div class="form-group" style="margin-top: 20px">
                                                <label for="inp_long_desc">Full description</label>
                                                <textarea class="form-control" name="desc" id="inp_long_desc" rows="6" required></textarea>
                                            </div>


                                            <div class="form-group" style="margin-top: 20px">
                                                <label for="inp_long_desc">Routes</label>
                                                <textarea class="form-control" name="routes" id="inp_long_desc" rows="6" required></textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class='form-group'>
                                                        <label class='control-label' for='start_date'>Start Date</label>
                                                        <input class='form-control' name="start_date"  id="start_date" size="16"   value="" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class='form-group'>
                                                        <label class='control-label' for='end_date'>End Date</label>
                                                        <input class='form-control' name="end_date"  id="end_date" size="16"   value="" readonly>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="inp_title">Amount</label>
                                                    <input type="text" id="inp_title" name="amount" class="form-control" required>
                                                </div>

                                            </div>

                                            <div>
                                                <label style="margin-top:20px">I would prefer these services</label>
                                                <div class="form-check">
                                                    @foreach($service as $value)
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="services[]" value="{{$value['name']}}"> {{$value['name']}}
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div style="margin-top:20px">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label style="color: #546e7a;">Image Upload: </label>
                                                            <input type="file" name="image" class="fileinput" onchange="readURL(this);"/>
                                                            <br/>
                                                        </div>
                                                        <div class="col-md-5"></div>
                                                        <div class="col-md-4">
                                                            <img id="img" src="/uploads" width="300px" height="200px" class="img-responsive" />

                                                            <br/>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <button style="margin-top: 20px" type="submit" class="btn btn-success">Create</button>
                                        </form>
                            </div>

                        </div>
                    </div>
                </div>


                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Package List</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">

                                <div class="table-responsive">
                                    <table id="package" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Amount</th>
                                        <th>Details</th>
                                        </thead>
                                        <tbody>
                                        @foreach($package as $value)
                                        <tr>
                                            <td>{{$value['title']}}</td>
                                            <td>{{$value['start_date']}}</td>
                                            <td>{{$value['end_date']}}</td>
                                            <td>{{$value['amount']}}</td>
                                            <td >
                                                <a href="{{URL::to('user/packages/details/'.$value['id'])}}" class="btn btn-xs btn-info pull-right">Details</a>
                                                <a href="{{URL::to('user/package_delete/'.$value['id'])}}"><button class="btn btn-danger btn-md" onclick="return confirm('Are you sure want to delete ? ')">Delete</button></a>
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

        function readURL(input)
        {
            if(input.files&&input.files[0])
            {
                var reader=new FileReader();
                reader.onload=function (e)
                {
                    $('#img').attr('src',e.target.result).width(150).height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

@endsection