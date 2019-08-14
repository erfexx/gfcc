<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
    <!-- Your html goes here -->
    <div class="content-header">
        <h1>
            <i class='fa fa-eye'></i> {{($page_title)}} &nbsp; &nbsp;
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{CRUDBooster::adminPath()}}"><i class="fa fa-dashboard"></i> {{ trans('crudbooster.home') }}</a></li>
            <li class="active">{{$page_title}}</li>
        </ol>
    </div>
    <br>


    <div class='panel panel-default'>
        <div class='panel-heading'>
            <strong><i class='fa fa-eye'></i> {!! $page_title or "Page Title" !!}</strong>
        </div>
        <div class='panel-body'>
            {!! Form::open([
                'action' => ['AttendanceController@storeAttend', $attendance_id],
                'files' => true
                ])
            !!}

            <input type="hidden" name="att_id" value="{{$attendance_id}}">

            <div class="box-body" id="parent-form-area">
                <table class='table table-striped table-bordered table-hover' id="tblMember">
                    <thead>
                    <tr>
                        <th width="30%">Name </th>
                        <th width="25%" style="text-align: left">Address</th>
                        <th width="10%" style="text-align: left">Gender</th>
                        <th width="20%" style="text-align: left">Birthdate</th>
                        <th width="15%" style="text-align: right">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

            <!-- etc .... -->
            <div class='box-footer'>
                <div style="float: left;">
                    <a href={{route('attendance.index')}} class="btn btn-default " ><i class="fa fa-chevron-circle-left"></i> Back</a>
                    <input type='submit' class='btn btn-success' value='Submit'/>
                </div>
                <div style="float: right;">
                    <button type='button' class='btn btn-success'>Save</button>
                </div>
            </div>

            {!! Form::close() !!}
        </div>

    </div>


@endsection

@section('add_js')
    <script type="text/javascript">
        $( document ).ready(function() {
            console.log(window.location.pathname);

            var table = $('#tblMember').DataTable({
                processing: true,
                serverSide: true,
                "bPaginate": false,
                ajax: {
                    "url": "{{URL('admin/member/json')}}",
                    "type": "GET"
                },
                paging: false,
                ordering: false,
                info: false,
                select: true,
                stateSave: true,
                columns: [
                    { data: 'fullname', name: 'fullname' },
                    { data: 'address', name: 'address' },
                    { data: 'sex', name: 'sex' },
                    { data: 'birthdate', name: 'birthdate' },
                    { data: 'action', name: 'action' }
                ]
            });

            $('#tblMember tbody').on('click', 'td button.btnTgl', function () {
                var tr = $(this).closest('input.atte');
                var ss= $(this).parents('tr').find('input[type="hidden"].atte').val();

                console.log(ss);

                var value = $(this).val();

                $( this ).toggleClass("btn-danger");

                $(this).text(function(i, text){
                    return text === "Hadir" ? "Tidak Hadir" : "Hadir";
                });

                if ($(this).parents('tr').find('input[type="hidden"].atte').val() == "0") {
                    $(this).parents('tr').find('input[type="hidden"].atte').val("1");
                }
                else {
                    $(this).parents('tr').find('input[type="hidden"].atte').val("0");
                }
            });

        });
    </script>
@endsection