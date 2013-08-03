@extends('base')
@section('title', 'Admin Dashboard')
@stop
@section('main')

<div class="doc-content-box">
	<legend>Violations</legend>

<a href="{{ URL::to('admin/dash/violations/ban') }}" class="btn btn-success"><i class="icon-ban-circle"></i> Ban</a>&nbsp;
<a href="{{ URL::to('admin/dash/violations/namelock') }}" class="btn btn-primary"><i class="icon-lock"></i> Namelock</a>&nbsp;

</div>

@stop