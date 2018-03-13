@extends('admin.layouts.app')
@section('content')
    <section id="content" class="table-layout animated fadeIn">
        <div class="tray tray-center">
            <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">
                <div class="panel heading-border">
                    @foreach($datas as $data)
                    <form method="post" action="{{route('student.store')}}" id="admin-form" enctype="multipart/form-data">
                        <div class="panel-body bg-light">
                            <div class="section-divider mt20 mb40">
                                <span> General Information </span>
                            </div>
                            <div>

                            </div>
                            <table class="table table-striped">
                                <tr>
                                    <td><h3>Name:</h3> </td>
                                    <td><h3>{{$data->student_name}}</h3></td>
                                    <td><h3>Image:</h3></td>
                                    <td><img  src="{{url($data->student_photo)}}"></td>
                                </tr>

                                <tr>
                                    <td> <h3>Father's Name:</h3></td>
                                    <td><h3>{{$data->father_name}}</h3></td>
                                    <td><h3>Father's Name:</h3> </td>
                                    <td><h3>{{$data->mother_name}}</h3></td>
                                </tr>
                                <tr>
                                    <td><h3>Nationality:</h3> </td>
                                    <td><h3>{{$data->nationality}}</h3></td>
                                    <td> <h3>Mobile Number:</h3></td>
                                    <td><h3>{{$data->mobile}}</h3></td>
                                </tr>
                                <tr>
                                    <td><h3>E-mail:</h3> </td>
                                    <td><h3>{{$data->email}}</h3></td>
                                    <td> <h3>Date Of Birth:</h3></td>
                                    <td><h3>{{$data->dob}}</h3></td>
                                </tr>
                            </table>
                        </div>
                        <br>


                        <div class="panel-body bg-light">
                            <div class="section-divider mt20 mb40">
                                <span> SSC Information </span>
                            </div>
                            <table class="table table-striped">
                                <tr>
                                    <td> <h3>School Name:</h3> </td>
                                    <td> <h3>{{$data->school_name}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3>SSC Department:</h3></td>
                                    <td> <h3>{{$data->ssc_dept}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3>SSC GPA:</h3> </td>
                                    <td> <h3>{{$data->ssc_gpa}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3>SSC Role:</h3> </td>
                                    <td> <h3>{{$data->ssc_role}}</h3></td>
                                </tr>
                            </table>
                        </div>

                        <div class="panel-body bg-light">
                            <div class="section-divider mt20 mb40">
                                <span> HSC Information </span>
                            </div>
                            <table class="table table-striped">
                                <tr>
                                    <td> <h3>College Name:</h3> </td>
                                    <td> <h3>{{$data->college_name}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3>HSC Department:</h3> </td>
                                    <td> <h3>{{$data->hsc_dept}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3>HSC GPA:</h3></td>
                                    <td> <h3>{{$data->hsc_gpa}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3>HSC Role:</h3></td>
                                    <td> <h3>{{$data->hsc_role}}</h3></td>
                                </tr>
                            </table>
                        </div>

                        <div class="panel-body bg-light">
                            <div class="section-divider mt20 mb40">
                                <span> University Information </span>
                            </div>
                            <table class="table table-striped">
                                <tr>
                                    <td> <h3>University ID:</h3></td>
                                    <td> <h3>{{$data->uni_id}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3>Department:</h3> </td>
                                    <td> <h3>{{$data->dept_name}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3>Advisor:</h3> </td>
                                    <td> <h3>{{$data->name}}</h3></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
