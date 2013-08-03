@extends('base')
@section('title', 'Ban player')
@stop
@section('main')

<div class="doc-content-box">
	<legend>Ban players</legend>
	{{ Form::open(array('url' => 'admin/dash/violations/ban')) }}

	        <div class="control-group">
  {{ Form::label('player_id', 'Player ID:') }}
  <div class="controls">
    {{ Form::text('player_id', null, array('placeholder' => 'Player ID goes here..')) }}
  </div>
</div>

	        <div class="control-group">
  {{ Form::label('banned_by', 'Banned by:') }}
  <div class="controls">
    {{ Form::text('banned_by') }}
  </div>
</div>

        <div class="control-group">
  {{ Form::label('comment', 'Comment:') }}
  <div class="controls">
    {{ Form::textarea('comment', null, array('placeholder' => 'Comment goes here..')) }}
  </div>
</div>


<div class="form-actions">
  {{ Form::submit('Ban player', array('class' => 'btn btn-success')) }}
  {{ Form::button('Help', array('class' => 'btn btn-default')) }}
</div>
	{{ Form::close() }}
</div>
</div>

@stop