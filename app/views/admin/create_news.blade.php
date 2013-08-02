@extends('base')
@section('title', 'Create news')
@stop
@section('main')


<div class="doc-content-box">
	<legend>Create news</legend>

    {{ Form::open(array('url' => 'admin/dash/news/add')) }}

     <div class="control-group">
  {{ Form::label('title', 'Title:') }}
  <div class="controls">
    {{ Form::text('title', null, array('placeholder' => 'Title goes here..')) }}
  </div>
</div>

 <div class="control-group">
  {{ Form::label('content', 'Content:') }}
  <div class="controls">
    {{ Form::textarea('content', null, array('class' => 'span9', 'placeholder' => 'Content goes here..', 'rows' => '10')) }}
  </div>
</div>

 <div class="form-actions">
  {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
  {{ Form::button('Help', array('class' => 'btn btn-default')) }}
</div>

	{{ Form::close() }}

</div>
</div>

@stop