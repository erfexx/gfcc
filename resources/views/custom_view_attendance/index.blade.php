<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')

    <!-- Your custom  HTML goes here -->

    <div class="content-header">
        <h1>
            <i class='fa fa-eye'></i> {{($page_title)}} &nbsp;&nbsp;

            <a href="{{route('attendance.create')}}"
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
            <th width="35%">Date</th>
            <th width="30%" style="text-align: left">Event</th>
            <th width="25%" style="text-align: left">PIC</th>
            <th width="10%" style="text-align: right">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($result as $row)
                <tr>
                    <td>{{date('d F Y', strtotime($row->tanggal))}}
                        <a href="{{route('attendance.show', $row->id)}}" style="font-size: 12px;">&nbsp; [Click To Open Table Attendance]</a>
                    </td>
                    <td>{{$row->event_name}}</td>
                    <td>{{$row->fullname}}</td>
                    <td class="actions" align="center">
                        <ul class="list-inline" style="margin-bottom:0px;">
                            <li><a href="{{ route('attendance.edit', $row->id) }}" title="Edit Item" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                            <li>
                                {!! Form::open([
                                    'class'=>'delete',
                                    'url'  => route('attendance.destroy', $row->id),
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