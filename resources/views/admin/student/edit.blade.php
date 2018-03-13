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

                    <form method="post" action="{{ route('student.update',$data->id)}}" id="admin-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="panel-body bg-light">
                            <div class="section-divider mt20 mb40">
                                <span> General Information </span>
                            </div>

                            <div style="text-align:center;">
                                <img id="preview" src="{{url($data->student_photo)}}" height="200px" width="200px"/>
                                <input type="file" id="image" name="student_photo" style="display:none;">
                                <br/> <br>
                                <a class="btn btn-info btn-xs" href="javascript:changeProfile();">Change</a> |
                                <a class="btn btn-danger btn-xs" href="javascript:removeImage()">Remove</a>
                                <input type="hidden" style="display: none" value="0" name="remove" id="remove">
                            </div>
                            <br>
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
                                        <input type="text" name="father_name" id="firstname" class="gui-input" value="{{$data->father_name}}">
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-6">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="mother_name" id="lastname" class="gui-input" value="{{$data->mother_name}}">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="section row" id="spy1">
                                <div class="col-md-4">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="nationality" id="firstname" class="gui-input" value="{{$data->nationality}}" placeholder="nationality">
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="mobile" id="username" class="gui-input" value="{{$data->mobile}}" placeholder="Mobile Number">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <td><div class="result" id="result"></div></td>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="email" id="email" class="gui-input" value="{{$data->email}}" placeholder="E-mail">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <td><div class="result" id="result1"></div></td>
                                    </label>
                                </div>
                            </div>

                            <div class="section row" id="spy2">
                                <div class="col-md-6">
                                    {{--<label for="file1" class="field file">--}}
                                    {{--<span class="button btn-primary"> Choose File </span>--}}
                                    {{--<input type="file" class="gui-file" name="student_photo" id="file1" onChange="document.getElementById('uploader1').value = this.value;">--}}
                                    {{--<input type="text" class="gui-input" id="uploader1" placeholder="Select Student Image" readonly>--}}
                                    {{--</label>--}}
                                </div>

                                <div class="col-md-6">
                                    <label for="datepicker1" class="field prepend-icon">
                                        <input type="text" id="datepicker1" name="dob" class="gui-input" value="{{$data->dob}}" placeholder="Date Of Birth">
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
                                        <input type="text" name="school_name" id="firstname" class="gui-input" value="{{$data->school_name}}" placeholder="School Name">
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
                                            <option value="{{$data->ssc_dept}}">{{$data->ssc_dept}}</option>
                                            <option value="Science">Science</option>
                                            <option value="Arts">Arts</option>
                                            <option value="Commerce">Commerce</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="ssc_gpa" id="lastname" class="gui-input" value="{{$data->ssc_gpa}}" placeholder="GPA">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="ssc_role" id="lastname" class="gui-input" value="{{$data->ssc_role}}" placeholder="Role No">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="section row" id="spy1">
                                <div class="col-md-12">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="college_name" id="firstname" class="gui-input" value="{{$data->college_name}}"  placeholder="College Name">
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
                                            <option value="{{$data->hsc_dept}}">{{$data->hsc_dept}}</option>
                                            <option value="Science">Science</option>
                                            <option value="Arts">Arts</option>
                                            <option value="Commerce">Commerce</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="hsc_gpa" id="lastname" class="gui-input" value="{{$data->hsc_gpa}}" placeholder="GPA">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="hsc_role" id="lastname" class="gui-input" value="{{$data->hsc_role}}" placeholder="Role No">
                                        <label for="lastname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <br>
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
@section('js')
    <script>
        function changeProfile() {
            $('#image').click();
        }
        $('#image').change(function () {
            var imgPath = $(this)[0].value;
            var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
                readURL(this);
            else
                alert("Please select image file (jpg, jpeg, png).")
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.readAsDataURL(input.files[0]);
                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                    $('#remove').val(0);
                }
            }
        }
        function removeImage() {
            $('#preview').attr('src', '{{url('images/noimage.jpg')}}');
            $('#remove').val(1);
        }
    </script>
@endsection
