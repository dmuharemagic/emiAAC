@extends('base')
@section('main')

<div class="separator">
</div>
<div class="doc-content-box">
  <legend>
    <i class="icon-plus icon-2x pull-left icon-muted">
    </i>
    Create account
  </legend>
  
  
  <div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">
      &times;
    </button>
    <td>
      Your e-mail is primarily used to recover your account, so please enter a legitimate e-mail or you won't be able to recover your account when you lose it.
    </a>
</td>
</div>
{{ Form::open(array('url' => 'register')) }}


@if ($errors-> has('name'))
<div class="alert alert-danger">
  {{ $errors->
  first('name', ':message') }}
</div>
@endif

@if ($errors-> has('email'))
<div class="alert alert-danger">
  {{ $errors->
  first('email', ':message') }}
</div>
@endif

@if ($errors-> has('password'))
<div class="alert alert-danger">
  {{ $errors->
  first('password', ':message') }}
</div>
@endif


<div class="control-group">
  {{ Form::label('name', 'Account name') }}
  <div class="controls">
    {{ Form::text('name', null, array('placeholder' => 'Enter your account name')) }}
  </div>
</div>


<div class="control-group">
  {{ Form::label('email', 'E-mail') }}
  <div class="controls">
    {{ Form::text('email', null, array('placeholder' => 'Enter your e-mail')) }}
  </div>
</div>

<div class="control-group">
  {{ Form::label('password', 'Password') }}
  <div class="controls">
    {{ Form::password('password') }}
  </div>
</div>


<a href="#" class="btn btn-link">
  Already have an account?
</a>
<div class="form-actions">
  {{ Form::submit('Register', array('class' => 'btn btn-success')) }}
  {{ Form::button('Help', array('class' => 'btn btn-default')) }}
</div>

{{ Form::close() }}
</div>

@endsection