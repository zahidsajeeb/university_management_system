@extends('admin.layouts.app')
@section('content')
    <section id="content" class="animated fadeIn">
        <div style="margin-bottom:10px;">
            <a href="{{route('student.create')}}" class="btn btn-info"><i class="fa fa-plus"></i>
                Student Information Add
            </a>
        </div>
        <div class="tray tray-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-visible" id="spy2">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Search Bar Filtering</div>
                        </div>
                        <div class="panel-body pn">
                            <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>E-mail</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $data)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$data->student_name}}</td>
                                    <td>{{$data->mobile}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->dept_name}}</td>
                                    <td>
                                        <div class="col-xs-2">
                                            <div class="bs-component1">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action
                                                        <span class="caret ml5"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#"><i class="fa fa-folder-open"></i> Info Show</a></li>
                                                        {{--<li class="divider"></li>--}}
                                                        <li><a href="#"><i class="fa fa-edit"></i> Edit</a></li>
                                                        {{--<li class="divider"></li>--}}
                                                        <li><a href="#"><i class="fa fa-trash"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<button class="btn btn-info btn-xs"><i class="fa fa-folder-open"></i> Show</button>--}}
                                        {{--<button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</button>--}}
                                        {{--<button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>--}}
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
    </section>


@endsection