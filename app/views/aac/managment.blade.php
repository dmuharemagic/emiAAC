@extends('base')
@section('main')

<div class="doc-content-box">

<legend>Account Managment</legend>

<a href="#" class="btn btn-success"><i class="icon-plus icon-white"></i> Create a new character</a>&nbsp;
<a href="#" class="btn btn-danger"><i class="icon-cogs icon-white"></i> Change your credentials</a>

<div id="spaceholder">&nbsp;</div>

<h5>Character list</h5>
<table class="table table-striped table-condensed">
<thead>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Level</th>
		<th>Vocation</th>
		<th>Date registered</th>
		<th>Role</th>
		<th>Status</th>
	</tr>
</thead>

<tbody>
<tr>
	<td>1</td>
	<td><a href="#"><strong>Zysen</strong></a></td>
	<td>118</td>
	<td>Druid</td>
	<td>2013-07-22</td>
	<td>Player</td>
	<td><span class="label label-important">Offline</span></td>
	<td><a href="#" class="btn btn-mini btn-success"><i class="icon-edit icon-white"> Edit</i></a>&nbsp;<a href="#" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"> Delete</i></a></td>
</tr>
<tr>
	<td>2</td>
	<td><a href="#"><strong>GM Zysen</strong></a></td>
	<td>8</td>
	<td>Knight</td>
	<td>2013-07-23</td>
	<td>Administrator</td>
	<td><span class="label label-success">Online</span></td>
	<td><a href="#" class="btn btn-mini btn-success"><i class="icon-edit icon-white"> Edit</i></a>&nbsp;<a href="#" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"> Delete</i></a></td>
</tr>
</tbody>




</table>

</div>

@endsection