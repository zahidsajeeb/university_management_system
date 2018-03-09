@extends('admin.layouts.app')
@section('content')
    <section id="content" class="table-layout animated fadeIn">
        <div class="tray tray-center">
            <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">
                <div class="panel heading-border">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('teacher.store') }}" method="POST" id="admin-form">
                        @csrf
                        <div class="panel-body bg-light">
                            <div class="section-divider mt20 mb40">
                                <span> General Information </span>
                            </div>
                            <!-- .section-divider -->
                            <div class="section row" id="spy1">
                                <div class="col-md-6">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="name" id="firstname" class="gui-input" placeholder="Teacher Name">
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label for="firstname" class="field select">
                                        <select id="language" name="department">
                                            <option value="">---Select Department---</option>
                                            @foreach($datas as $data)
                                                <option value="{{ $data->dept_id }}">{{ $data->dept_name }}</option>
                                            @endforeach
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- end .form-body section -->
                        <div class="panel-footer text-right">
                            <button type="submit" class="button btn-primary"><i class="fa fa-check"></i> Submit </button>
                            <button type="reset" class="button"> Cancel </button>
                        </div>
                        <!-- end .form-footer section -->
                    </form>

                </div>

            </div>
            <!-- end: .admin-form -->

        </div>
    </section>
@endsection
