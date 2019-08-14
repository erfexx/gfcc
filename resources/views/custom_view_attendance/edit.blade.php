<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
    <!-- Your html goes here -->
    <div class="content-header">
        <h1>
            <i class='fa fa-eye'></i> {{($page_title)}} &nbsp;&nbsp;
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

            {!! Form::model($item, [
                        'action' => ['AttendanceController@update', $item->id],
                        'method' => 'put',
                        'files' => true
                    ])
                !!}

            <div class="box-body" id="parent-form-area">
                @include('custom_view_attendance.form')
            </div>

            <!-- etc .... -->
            <div class='box-footer'>
                <a href={{route('attendance.index')}} class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>
                <input type='submit' class='btn btn-success' value='Save'/>
            </div>

            {!! Form::close() !!}
        </div>

    </div>


@endsection

@section('add_js')
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.js-example-basic-single').select2({
                height: 'resolve'
            });
        });
    </script>
@endsection