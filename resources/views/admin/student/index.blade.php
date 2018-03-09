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
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Mohammad Zahidul Islam</td>
                                    <td>Computer Engineering</td>
                                    <td>
                                        <button class="btn btn-info"><i class="fa fa-folder-open"></i> Show</button>
                                        <button class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection