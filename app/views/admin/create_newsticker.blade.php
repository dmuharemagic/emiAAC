@extends('base')
@section('title', 'Create a newsticker')
@stop
@section('main')


<div class="doc-content-box">
	<legend>Create a newsticker</legend>

@endif

@if ($errors-> has('label'))
<div class="alert alert-danger">
  {{ $errors->
  first('label', ':message') }}
</div>
@endif

@if ($errors-> has('content'))
<div class="alert alert-danger">
  {{ $errors->
  first('content', ':message') }}
</div>
@endif


    {{ Form::open(array('url' => 'admin/dash/newsticker/add')) }}

     <div class="control-group">
  {{ Form::label('label', 'Label:') }}
  <div class="controls">
    {{ Form::text('label', null, array('placeholder' => 'Label content goes here..')) }}
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