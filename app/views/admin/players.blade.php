@extends('base')
@section('title', 'Administrating players')
@stop
@section('main')

<div class="doc-content-box">
	<legend>Administrating players</legend>

<div id="spaceholder">&nbsp;</div>
<table class="table table-striped table-condensed">
<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Level</th>
		<th>Vocation</th>
		<th>Created at</th>
		<th>Updated at</th>
	</tr>
</thead>

<tbody> 

@foreach($players as $player)

<tr> 
<td>{{ $player->id }}</td> 
<td>{{ $player->name }}</td>
<td>{{ $player->level }}</td>
<td>{{ $player->vocation }}</td>
<td>{{ $player->created_at }}</td>
<td>{{ $player->updated_at }}</td>

<td><a class="btn btn-mini btn-danger" href="{{ URL::action('AuthController@delete_character', ['id' => $player->id]) }}"><i class="icon-trash icon-white"></i> Delete</a></td>
</tr> 
@endforeach
</tbody> 
</table>

</div>
</div>

@stop