<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')

    <!-- Your custom  HTML goes here -->

    <div class="content-header">
        <h1>
            <i class='fa fa-tasks'></i> {{($page_title)}} &nbsp;&nbsp;

            <a href="{{route('positions.create')}}"
               id='btn_add_new_data' class="btn btn-sm btn-success" title="{{trans('crudbooster.action_add_data')}}">
                <i class="fa fa-plus-circle"></i> {{trans('crudbooster.action_add_data')}}
            </a>
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{CRUDBooster::adminPath()}}"><i class="fa fa-dashboard"></i> {{ trans('crudbooster.home') }}</a></li>
            <li class="active">{{$page_title}}</li>
        </ol>
    </div>
    <br>


    <table class='table table-striped table-bordered table-hover'>
        <thead>
            <tr>
                <th width="70%">Position</th>
                <th width="30%" style="text-align: right">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($result as $row)
                <tr>
                    <td>{{$row->name}}</td>
                    <td class="actions" align="right">
                        <ul class="list-inline" style="margin-bottom:0px;">
                            <li><a href="{{ route('positions.edit', $row->id) }}" title="Edit Item" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                            <li>
                                {!! Form::open([
                                    'class'=>'delete',
                                    'url'  => route('positions.destroy', $row->id),
                                    'method' => 'DELETE',
                                    ])
                                !!}
                                <button class="btn btn-danger btn-xs" title="Delete Item"><i class="fa fa-trash"></i></button>
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- ADD A PAGINATION -->



@endsection