@extends('base')
@section('title', 'Create character')
@section('main')

@if ($errors-> has('character_name'))
<div class="alert alert-danger">
  {{ $errors->
  first('character_name', ':message') }}
</div>
@endif

<div class="doc-content-box">
	<legend>Create a character</legend>
	{{ Form::open(array('url' => 'account/create_character')) }}

        <div class="control-group">
  {{ Form::label('character_name', 'Character name:') }}
  <div class="controls">
    {{ Form::text('character_name', null, array('placeholder' => 'Character name goes here..')) }}
  </div>
</div>

   <div class="control-group">
    {{ Form::label('sex', 'Character sex:') }}
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

<div class="form-actions">
  {{ Form::submit('Create a character', array('class' => 'btn btn-success')) }}
  {{ Form::button('Help', array('class' => 'btn btn-default')) }}
</div>
	{{ Form::close() }}
</div>

@endsection