@extends('base')
@section('title', 'Ban player')
@stop
@section('main')

<div class="doc-content-box">
	<legend>Namelock players</legend>
	{{ Form::open(array('url' => 'admin/dash/violations/namelock')) }}

	        <div class="control-group">
  {{ Form::label('player_id', 'Player ID:') }}
  <div class="controls">
    {{ Form::text('player_id', null, array('placeholder' => 'Player ID goes here..')) }}
  </div>
</div>

	        <div class="control-group">
  {{ Form::label('banned_by', 'Namelocked by:') }}
  <div class="controls">
    {{ Form::text('banned_by') }}
  </div>
</div>

        <div class="control-group">
  {{ Form::label('comment', 'Reason:') }}
  <div class="controls">
    {{ Form::textarea('comment', null, array('placeholder' => 'Comment goes here..')) }}
  </div>
</div>


<div class="form-actions">
  {{ Form::submit('Namelock player', array('class' => 'btn btn-success')) }}
  {{ Form::button('Help', array('class' => 'btn btn-default')) }}
</div>
	{{ Form::close() }}
</div>
</div>

@stop