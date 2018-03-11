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

                    <form method="post" action="{{route('student.store')}}" id="admin-form" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body bg-light">
                            <div class="section-divider mt20 mb40">
                                <span> General Information </span>
                            </div>
                            <!-- .section-divider -->

                            <div class="section row" id="spy1">
                                <div class="col-md-12">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="student_name" id="firstname" class="gui-input" value="{{$data->student_name}}">
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="section row" id="spy1">
                                <div class="col-md-6">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="father_name" id="firstname" class="gui-input" placeholder="Father's Name">
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-6">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="mother_name" id="lastname" class="gui-input" placeholder="Mother's Name...">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="section row" id="spy1">
                                <div class="col-md-4">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="nationality" id="firstname" class="gui-input" placeholder="Nationality">
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="mobile" id="username" class="gui-input" placeholder="Mobile Number">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <td><div class="result" id="result"></div></td>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="email" id="email" class="gui-input" placeholder="E-mail">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <td><div class="result" id="result1"></div></td>
                                    </label>
                                </div>
                            </div>

                            <div class="section row" id="spy2">
                                <div class="col-md-6">
                                    <label for="file1" class="field file">
                                        <span class="button btn-primary"> Choose File </span>
                                        <input type="file" class="gui-file" name="student_photo" id="file1" onChange="document.getElementById('uploader1').value = this.value;">
                                        <input type="text" class="gui-input" id="uploader1" placeholder="Select Student Image" readonly>
                                    </label>
                                </div>

                                <div class="col-md-6">
                                    <label for="datepicker1" class="field prepend-icon">
                                        <input type="text" id="datepicker1" name="dob" class="gui-input" placeholder="Date Of Birth">
                                        <label class="field-icon">
                                            <i class="fa fa-calendar-o"></i>
                                        </label>
                                    </label>
                                </div>


                            </div>

                            <br>

                            <div class="section-divider mt20 mb40">
                                <span> Educational Information </span>
                            </div>

                            <div class="section row" id="spy1">
                                <div class="col-md-12">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="school_name" id="firstname" class="gui-input" placeholder="School Name">
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="section row" id="spy1">
                                <div class="col-md-4">
                                    <label for="firstname" class="field select">
                                        <select id="language" name="ssc_dept">
                                            <option value="">Select Department...</option>
                                            <option value="EN">Science</option>
                                            <option value="FR">Arts</option>
                                            <option value="SP">Commerce</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="ssc_gpa" id="lastname" class="gui-input" placeholder="GPA">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="ssc_role" id="lastname" class="gui-input" placeholder="Role No">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="section row" id="spy1">
                                <div class="col-md-12">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="college_name" id="firstname" class="gui-input" placeholder="College Name">
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="section row" id="spy1">
                                <div class="col-md-4">
                                    <label for="firstname" class="field select">
                                        <select id="language" name="hsc_dept">
                                            <option value="">Select Department...</option>
                                            <option value="EN">Science</option>
                                            <option value="FR">Arts</option>
                                            <option value="SP">Commerce</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="hsc_gpa" id="lastname" class="gui-input" placeholder="GPA">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="hsc_role" id="lastname" class="gui-input" placeholder="Role No">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <br>
                            <div class="section-divider mt20 mb40">
                                <span> University Information </span>
                            </div>
                            <div class="section row" id="spy1">
                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="uni_id" id="lastname" class="gui-input" placeholder="ID Number">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="firstname" class="field  select">
                                        <select id="country" name="uni_dept">
                                            <option value="">---Select Department---</option>
                                            {{--@foreach($datas as $data)--}}
                                                {{--<option value="{{ $data->dept_id }}">{{ $data->dept_name }}</option>--}}
                                            {{--@endforeach--}}
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="firstname" class="field select">
                                        <select name="advisor" id="state">
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
                    </form>

                </div>

            </div>
            <!-- end: .admin-form -->

        </div>
    </section>
@endsection
