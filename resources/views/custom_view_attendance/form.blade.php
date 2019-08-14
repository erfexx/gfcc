<?php

    $date = \Carbon\Carbon::now()->format('Y-m-d');
    $event_id = 0;
    $pic_id = 0;
    $percent = 0;

    if (isset($item)){
        $date = $item->tanggal;
        $event_id = $item->event_id;
        $pic_id = $item->person_in_charge_id;
        $percent = $item->percentage;
    }

?>

<div class="form-group row">
    <label for="" class="col-sm-2 control-label">Tanggal</label>
    <div class="col-sm-10">
        {!! Form::input('date', 'tanggal', $date, array_merge(['class' => 'form-control'])) !!}
    </div>
</div>

<div class="form-group row">
    <label for="" class="col-sm-2 control-label">Event</label>
    <div class="col-sm-10">
        <select name="event" id="event" class="form-control" style="height: 120%;" >
            <option value="" >-Choose Event-</option>
            @foreach($event as $key => $item)
                <option value="{{$key}}"
                        @if ($key == $event_id)
                        selected="selected"
                        @endif
                >{{$item}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="" class="col-sm-2 control-label">PIC</label>
    <div class="col-sm-10">
        <select name="pic" id="pic" class="form-control " style="width:100%;" >
            <option value="" >-Choose PIC-</option>
            @foreach($pic as $key => $item)
                <option value="{{$key}}"
                        @if ($key == $pic_id)
                        selected="selected"
                        @endif
                >{{$item}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="" class="col-sm-2 control-label">Percentage of Attendance</label>
    <div class="col-sm-10">
        <input type='text' title="" class='form-control notfocus input_date' name="percentage" id="date"
               value={{$percent}} readonly/>
    </div>
</div>