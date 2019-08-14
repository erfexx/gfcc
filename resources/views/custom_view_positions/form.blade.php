{!! Form::myInput('text', 'name', 'Name', ['required']) !!}
{{--{!! Form::input('text', 'name', null, array_merge(["class" => "form-control"])) !!}--}}


<div class="form-group row">
    <label for="" class="col-sm-2 control-label">Test</label>
    <div class="col-sm-9">
        {{ Form::radio('tributary', 'buy', null) }} Yes
    </div>
</div>