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
                                            <h3> Add User</h3><br>

                                            <form action="{{URL::to('user/create_user')}}" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                                <div class="row">
                                                    <label class="col-md-1 control-label">Name</label>
                                                    <div class="col-md-3">

                                                        <input type="text" class="form-control" name="user_name">

                                                    </div>

                                                    <label class="col-md-1 control-label">Email</label>
                                                    <div class="col-md-3">

                                                        <input type="text" class="form-control" name="user_email">

                                                    </div>
                                                    <label class="col-md-1 control-label">Password</label>
                                                    <div class="col-md-3">

                                                        <input type="password" class="form-control" name="user_password">

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6"></div>
                                                    <button type="submit" class="btn btn-success mt-3">Create</button>
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
                                                <table id="user_table" class="display nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th class="info">Name</th>
                                                        <th class="info">Email</th>
                                                        <th class="info">Operation</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($user as $value)
                                                        <tr>
                                                            <input type="hidden" name="user_id" value="{{$value['id']}}">
                                                            <td>{{$value['name']}}</td>
                                                            <td>{{$value['email']}}</td>
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
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                            &times;
                                                                        </button>
                                                                        <h4 class="modal-title" id="updatemodal">Edit User </h4>
                                                                    </div>
                                                                    <form action="{{URL::to('user/edit_user')}}" method="post">
                                                                        <div class="modal-body">
                                                                            <label>Name - {{$value['name']}}</label>
                                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                            <input type="text" name="email" value="{{$value['email']}}" class="form-control"> <br>

                                                                            <input type="password" name="password" value="{{$value['password']}}" class="form-control"><br>

                                                                            <input type="hidden" name="user_id" value="{{$value['id']}}">

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
            $('#user_table').DataTable({

            });

        });
    </script>

@endsection