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
                <div class=" col-md-12">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body">
                                           <h3> Service Add Form</h3><br>

                                            <form action="{{URL::to('user/create_service')}}" method="post">


                                            <div class="row">
                                                <label class="offset-md-1 col-md-1 control-label">Name</label>
                                                <div class="col-md-3">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="text" class="form-control" name="service_name">

                                                </div>

                                                    <button type="submit" class="btn btn-outline-success">Create</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="table-responsive">
                                                <table id="service_table" class="display nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th class="info">No.</th>
                                                        <th class="info">Name</th>
                                                        <th class="info">Operation</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($services as $value)
                                                        <tr>
                                                            <input type="hidden" name="service_id" value="{{$value['id']}}">
                                                            <td>{{$value['id']}}</td>
                                                            <td>{{$value['name']}}</td>
                                                            <td>

                                                                <button class="btn btn-outline-success btn-md" data-toggle="modal"
                                                                        data-target="#updatemodal{{$value['id'] }}">
                                                                    <i class="icon-pencil22"></i>

                                                                </button>
                                                            </td>
                                                        </tr>


                                                        <div class="modal fade" id="updatemodal{{$value['id']}}" tabindex="-1" role="dialog"
                                                             aria-labelledby="myModalLabel"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                            &times;
                                                                        </button>
                                                                        <h4 class="modal-title" id="updatemodal">Service </h4>
                                                                    </div>
                                                                    <form action="{{URL::to('user/update_service')}}" method="post">
                                                                    <div class="modal-body">
                                                                        <label>Service name</label>
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <input type="text" name="name" value="{{$value['name']}}">

                                                                        <input type="hidden" name="service_id" value="{{$value['id']}}">

                                                                        <button type="submit" class="btn btn-success">Update</button>
                                                                    </div>
                                                                    </form>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-red" data-dismiss="modal">Close
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

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
            $('#service_table').DataTable({

            });

        });
    </script>

@endsection