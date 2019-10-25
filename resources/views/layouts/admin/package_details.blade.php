<?php
$single_master=Config::get('app_config.blade.single_master');
//dd($package['description']);
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
                        <h4 class="card-title">Edit Package</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">

                            <div class="container">
                                <form action="{{URL::to('user/packages/edit')}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $package['id']}}">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inp_title">Title</label>
                                            <input type="text" id="inp_title" name="title" class="form-control" value="{{$package['title']}}" required>
                                        </div>

                                    </div>


                                    <div class="form-group" style="margin-top: 20px">
                                        <label for="inp_long_desc">Full description</label>
                                        <textarea class="form-control" name="desc" id="inp_long_desc" rows="6" required>{{$package['description']}}</textarea>
                                    </div>


                                    <div class="form-group" style="margin-top: 20px">
                                        <label for="inp_long_desc">Routes</label>
                                        <textarea class="form-control" name="routes" id="inp_long_desc" rows="6" required>{{$package['route']}}</textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class='form-group'>
                                                <label class='control-label' for='start_date'>Start Date</label>
                                                <input class='form-control' name="start_date"  id="start_date" size="16"   value="{{$package['start_date']}}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class='form-group'>
                                                <label class='control-label' for='end_date'>End Date</label>
                                                <input class='form-control' name="end_date"  id="end_date" size="16"   value="{{$package['end_date']}}" readonly>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="inp_title">Amount</label>
                                            <input type="text" id="inp_title" name="amount" class="form-control" value="{{$package['amount']}}" required>
                                        </div>

                                    </div>

                                    <div>
                                        <label style="margin-top:20px">I would prefer these services</label>
                                        <div class="form-check">
                                            @foreach($service as $value)
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="services[]" value="{{$value['name']}}" checked> {{$value['name']}}
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="inp_image">Image</label>
                                            <input type="file" name="image" class="fileinput" onchange="readURL(this);"/>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <img id="img" src="{{URL::to('public/upload/'.$package['image'])}}" width="300px" height="200px" class="img-responsive" />
                                        </div>
                                    </div>

                                    <button style="margin-top: 20px" type="submit" class="btn btn-success">Create</button>
                                </form>
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