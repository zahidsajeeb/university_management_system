@extends('admin.layouts.app')
@section('content')
    <section id="content" class="animated fadeIn">
        <div style="margin-bottom:10px;">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <a href="{{route('teacher.create')}}" class="btn btn-info"><i class="fa fa-plus"></i>
                Teacher Information Add
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
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $data)
                                <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->dept_name}}</td>
                                        <td>
                                            <button class="btn btn-info"><i class="fa fa-folder-open"></i> Show</button>
                                            <button class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
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