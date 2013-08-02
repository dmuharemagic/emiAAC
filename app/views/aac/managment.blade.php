@extends('base')
@section('title', 'Account Managment')
@stop 
@section('main')

<div class="doc-content-box">

<legend>Account Managment</legend>

<a href="managment/create_character" class="btn btn-success"><i class="icon-plus icon-white"></i> Create a new character</a>&nbsp;
<a href="managment/change_credentials" class="btn btn-info"><i class="icon-cogs icon-white"></i> Change your credentials</a>

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
	<?php $count = 0;?> 
@foreach($account->players as $player)
	<?php $count++;?>
<tr> 
<td>{{ $count }}. </td> 
<td>{{ $player->name }}</td> 
<td>{{ $player->level }}</td> 
<td><?php $vocations = array(

        1 => "Sorcerer",
        2 => "Druid",
        3 => "Paladin",
        4 => "Knight",
        5 => "Master Sorcerer",
        6 => "Elder Druid",
        7 => "Royal Paladin",
        8 => "Elite Knight"
        
        );

    echo $vocations[$player->vocation];?></td>
<td>{{ $player->created_at }}</td>
<td><?php $roles = array(

        1 => "Player",
        2 => "Gamemaster",
        3 => "God",
        
        );

    echo $roles[$player->group_id];?></td>
<td><span class="<?php echo($player->online == 1) ? 'label label-success' : 'label label-important' ;?>"> <?php echo($player->online ==1) ? 'Online' : 'Offline' ;?></span></td>
<td><a class="btn btn-mini btn-danger" href="{{ URL::action('AuthController@delete_character', ['id' => $player->id]) }}"><i class="icon-trash icon-white"></i> Delete</a></td>
</tr> 
@endforeach
</tbody> 
</table>

</div>
</div>

@stop 