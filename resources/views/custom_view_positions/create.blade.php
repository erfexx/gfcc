<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
    <!-- Your html goes here -->
    @if(CRUDBooster::getCurrentMethod() != 'getProfile' && $button_cancel)
        @if(g('return_url'))
            <p><a title='Return' href='{{g("return_url")}}'><i class='fa fa-chevron-circle-left '></i>
                    &nbsp; {{trans("crudbooster.form_back_to_list",['module'=>CRUDBooster::getCurrentModule()->name])}}</a></p>
        @else
            <p><a title='Main Module' href='{{CRUDBooster::mainpath()}}'><i class='fa fa-chevron-circle-left '></i>
                    &nbsp; {{trans("crudbooster.form_back_to_list",['module'=>CRUDBooster::getCurrentModule()->name])}}</a></p>
        @endif
    @endif

    {{CRUDBooster::adminPath($slug=NULL)}}
    {{route('positions.create')}}

    <div class='panel panel-default'>
        <div class='panel-heading'>
            <strong><i class='{{CRUDBooster::getCurrentModule()->icon}}'></i> {!! $page_title or "Page Title" !!}</strong>
        </div>
        <div class='panel-body'>
                {!! Form::open([
                    'action' => ['PositionsController@store'],
                    'files' => true
                    ])
                !!}

                <div class="box-body" id="parent-form-area">
                    @include('custom_view_positions.form')
                </div>

                <!-- etc .... -->
                <div class='box-footer'>
                    <a href="#" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>
                    <input type='submit' class='btn btn-success' value='Save'/>
                </div>

            {!! Form::close() !!}
        </div>

    </div>
@endsection