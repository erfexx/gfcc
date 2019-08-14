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

    <div class='panel panel-default'>
        <div class='panel-heading'>
            <strong><i class='{{CRUDBooster::getCurrentModule()->icon}}'></i> {!! $page_title or "Page Title" !!}</strong>
        </div>
        <div class='panel-body'>

            <?php
            $action = (@$row) ? CRUDBooster::mainpath("edit-save/$row->id") : CRUDBooster::mainpath("add-save");
            $return_url = ($return_url) ?: g('return_url');
            ?>

            <form class='form-horizontal' method='post' enctype="multipart/form-data" action='{{CRUDBooster::mainpath('edit-save/'.$row->id)}}'>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type='hidden' name='return_url' value='{{ @$return_url }}'/>
                <input type='hidden' name='ref_mainpath' value='{{ CRUDBooster::mainpath() }}'/>
                <input type='hidden' name='ref_parameter' value='{{urldecode(http_build_query(@$_GET))}}'/>

                @if($hide_form)
                    <input type="hidden" name="hide_form" value='{!! serialize($hide_form) !!}'>
                @endif

                <div class="box-body" id="parent-form-area">
                    @include('custom_view_galleries.form_gallery_view')
                </div>

                <!-- etc .... -->
                <div class='box-footer'>
                    <a href="{{$return_url}}" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>
                    <input type='submit' class='btn btn-success' value='Save'/>
                </div>

            </form>
        </div>
    </div>
@endsection