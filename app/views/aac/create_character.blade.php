@extends('base')
@section('title', 'Create character')
@stop 
@section('main')

<div class="doc-content-box">
	<legend>Create a character</legend>
	{{ Form::open(array('url' => 'account/managment/create_character')) }}

@if ($errors-> has('character_name'))
<div class="alert alert-danger">
  {{ $errors->
  first('character_name', ':message') }}
</div>
@endif

        <div class="control-group">
  {{ Form::label('character_name', 'Character name:') }}
  <div class="controls">
    {{ Form::text('character_name', null, array('placeholder' => 'Character name goes here..')) }}
  </div>
</div>

   <div class="control-group">
    {{ Form::label('sex', 'Gender:') }}
   	  <div class="controls">
{{ Form::select('sex', array('1' => 'Male', '2' => 'Female'), '1'); }}
 </div>
</div>

   <div class="control-group">
    {{ Form::label('vocation', 'Vocation:') }}
      <div class="controls">
{{ Form::select('vocation', array('1' => 'Sorcerer', '2' => 'Druid', '3' => 'Paladin', '4' => 'Knight'), '1'); }}
 </div>
</div>

   <div class="control-group">
    {{ Form::label('town', 'Town:') }}
      <div class="controls">
{{ Form::select('town', array('1' => 'Main Town', '2' => 'Second Town'), '1'); }}
 </div>
</div>

<div class="form-actions">
  {{ Form::submit('Create a character', array('class' => 'btn btn-success')) }}
  {{ Form::button('Help', array('class' => 'btn btn-default')) }}
</div>
	{{ Form::close() }}
</div>

@stop 