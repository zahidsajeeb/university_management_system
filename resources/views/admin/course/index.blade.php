@extends('admin.layouts.app')
@section('content')
    <section id="content" class="animated fadeIn">
        <div style="margin-bottom:10px;">
            <a onclick="addForm()" class="btn btn-info add-modal"><i class="fa fa-plus"></i>
                Course Add
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
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> &times; </span>
                            </button>
                            <h3 class="modal-title"></h3>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" id="id" name="id">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="course_name" class="form-control" id="title_add" autofocus placeholder="Course Name">
                                    <small>Min: 2, Max: 32, only text</small>
                                    <p class="errorTitle text-center alert alert-danger hidden"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-12">
                                    <input type="text" name="course_code" class="form-control" id="title_add" autofocus placeholder="Course Code">
                                    <small>Min: 2, Max: 32, only text</small>
                                    <p class="errorTitle text-center alert alert-danger hidden"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <select id="country" class="form-control" name="dept_id">
                                        <option value="">---Select Department---</option>
                                        @foreach($datas as $data)
                                            <option value="{{ $data->dept_id }}">{{ $data->dept_name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="arrow double"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <select name="teacher_id" class="form-control" id="state"></select>
                                    <i class="arrow double"></i>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-save">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <div id="addModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" role="form">
                            {{ csrf_field() }} {{ method_field('POST') }}
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="course_name" class="form-control" id="title_add" autofocus placeholder="Course Name">
                                    <small>Min: 2, Max: 32, only text</small>
                                    <p class="errorTitle text-center alert alert-danger hidden"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-12">
                                    <input type="text" name="course_code" class="form-control" id="title_add" autofocus placeholder="Course Code">
                                    <small>Min: 2, Max: 32, only text</small>
                                    <p class="errorTitle text-center alert alert-danger hidden"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <select id="country" class="form-control" name="dept_id">
                                        <option value="">---Select Department---</option>
                                        @foreach($datas as $data)
                                            <option value="{{ $data->dept_id }}">{{ $data->dept_name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="arrow double"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">

                                        <select name="teacher_id" class="form-control" id="state">
                                        </select>
                                        <i class="arrow double"></i>

                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info add btn-xs" data-dismiss="modal">
                                <span id="" class='glyphicon glyphicon-check'></span> Add
                            </button>
                            <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(".delete").on("submit", function(){
            return confirm("Do you want to delete this Record?");
        });
    </script>
    <!-- AJAX CRUD operations -->

    <script type="text/javascript">
        var table = $('#datatable2').DataTable({
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            },
            "iDisplayLength": 5,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            },
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.course') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'show_photo', name: 'show_photo'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Add Contact');
        }
        $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ route('course.store') }}";
                    else url = "{{ url('contact') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
//                        data : $('#modal-form form').serialize(),
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data){
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Oops...',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });
    </script>

    {{--<script type="text/javascript">--}}
        {{--$(document).on('click', '.add-modal', function() {--}}
            {{--$('.modal-title').text('Course Add');--}}
            {{--$('#addModal').modal('show');--}}
        {{--});--}}
    {{--</script>--}}
@endsection