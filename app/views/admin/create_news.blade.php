@extends('base')
@section('title', 'Create news')
@stop
@section('main')


<div class="doc-content-box">
	<legend>Create news</legend>

  @if ($errors-> has('author'))
<div class="alert alert-danger">
  {{ $errors->
  first('author', ':message') }}
</div>
@endif

@if ($errors-> has('title'))
<div class="alert alert-danger">
  {{ $errors->
  first('title', ':message') }}
</div>
@endif

@if ($errors-> has('content'))
<div class="alert alert-danger">
  {{ $errors->
  first('content', ':message') }}
</div>
@endif


    {{ Form::open(array('url' => 'admin/dash/news/add')) }}


     <div class="control-group">
  {{ Form::label('author', 'Author:') }}
  <div class="controls">
    {{ Form::text('author', null, array('placeholder' => 'Author name goes here..')) }}
  </div>
</div>

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