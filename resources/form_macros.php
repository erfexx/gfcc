<?php

//form type text
Form::macro('myInput', function($type="text", $name, $label="", $options=[], $default = null)
{
    return "
        <div class='form-group row'>
        	<label for=\"".$name."\" class=\"col-sm-2 control-label\">".$label."</label>
        	<div class=\"col-sm-9\">".
        Form::input($type, $name, $default, array_merge(["class" => "form-control"], $options))
        ."</div>
        </div>
    ";
});

//form type select
Form::macro('mySelect', function($name, $label="", $values=[], $selected=null, $options=[])
{
    return "
        <div class='form-group row'>
        	<label for=\"".$name."\" class=\"col-sm-2 control-label\">".$label."</label>
        	<div class=\"col-sm-9\">".
        Form::select($name, $values, $selected,array_merge(["class" => "form-control"], $options))
        ."</div>
        </div>
    ";
});

//form type radio button
Form::macro('myRadioBtn', function ($name, $label="", $values=[], $selected=null, $options=[]){
    return "
        
    ";
});


?>