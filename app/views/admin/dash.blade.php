@extends('base')
@section('title', 'Admin Dashboard')
@stop
@section('main')

<div class="doc-content-box">
	<legend>Admin Dashboard</legend>

<p>Welcome to your dashboard, <strong><small>{{ Auth::user()->name }}</small></strong>.</p>
<hr></hr>
<a href="{{ URL::to('admin/dash/news') }}" class="btn btn-success"><i class="icon-tasks"></i> News</a>&nbsp;
<a href="{{ URL::to('admin/dash/players') }}" class="btn btn-primary"><i class="icon-male"></i> Players</a>&nbsp;
<a href="{{ URL::to('admin/dash/violations') }}" class="btn btn-danger"><i class="icon-thumbs-down-alt"></i> Ban or violation</a>&nbsp;

</div>

@stop