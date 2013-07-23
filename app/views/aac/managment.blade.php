@extends('base')
@section('main')

<div class="doc-content-box">

<legend>Account Managment</legend>

<a href="create_character" class="btn btn-success"><i class="icon-plus icon-white"></i> Create a new character</a>&nbsp;
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
</tbody>
</table>

</div>
</div>

@endsection