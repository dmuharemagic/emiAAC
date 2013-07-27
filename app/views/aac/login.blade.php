@extends('base')
@section('title', 'Log in')
@endsection
@section('main')


<div class="separator">
</div>
<div class="doc-content-box">
  
  <div id="login" class="login">
    <legend>
      <i class="icon-lock icon-2x pull-left icon-muted">
      </i>
      Login
    </legend>
    {{ Form::open() }}
    
    
    @if ($errors->
    has('name'))
    <div class="alert alert-danger">
      {{ $errors->
      first('name', ':message') }}
    </div>
    @endif
    
    @if ($errors->
    has('password'))
    <div class="alert alert-danger">
      {{ $errors->
      first('password', ':message') }}
    </div>
    @endif
    
    <div class="control-group">
      {{ Form::label('acc', 'Account name') }}
      <div class="controls">
        {{ Form::text('acc', null, array('placeholder' =>
        'Enter your account name')) }}
      </div>
    </div>
    
    <div class="control-group">
      {{ Form::label('password', 'Password') }}
      <div class="controls">
        {{ Form::password('password') }}
      </div>
    </div>
    <a href="#" class="btn btn-link">
      Have you forgotten your password?
    </a>
    <div class="form-actions">
      {{ Form::submit('Sign in', array('class' =>
      'btn btn-success')) }}
      {{ Form::button('Help', array('class' =>
      'btn btn-default')) }}
    </div>
    {{ Form::close() }}
  </div>
</div>

@endsection