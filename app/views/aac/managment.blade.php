@extends('base')
@section('title', 'Account Managment')
@endsection
@section('main')

<div class="doc-content-box">

<legend>Account Managment</legend>

<a href="create_character" class="btn btn-success"><i class="icon-plus icon-white"></i> Create a new character</a>&nbsp;
<a href="#" class="btn btn-info"><i class="icon-cogs icon-white"></i> Change your credentials</a>

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
<td><?php if($player->vocation == 1){ 
echo "Sorcerer"; 
}else if($player->vocation == 2){
echo 'Druid';
}else if($player->vocation == 3){
echo 'Paladin';
}else if($player->vocation == 4){
echo 'Knight';
}else if($player->vocation == 5){
echo 'Master Sorcerer';
}else if($player->vocation == 6){
echo 'Elder Druid';
}else if($player->vocation == 7){
echo 'Royal Paladin';
}else{
echo 'Elite Knight';
}?></td>
<td>{{ $player->created_at }}</td>
<td><?php if($player->group_id == 1){ 
echo "Player"; 
}else if($player->group_id == 2){
echo 'Gamemaster';
}else if($player->group_id == 3){
echo 'God';
}?></td>
<td><span class="<?php echo($player->online == 1) ? 'label label-success' : 'label label-important' ;?>"> <?php echo($player->online ==1) ? 'Online' : 'Offline' ;?></span></td>
<td><a class="btn btn-mini btn-danger" href="{{ URL::action('AuthController@delete_character', ['id' => $player->id]) }}"><i class="icon-trash icon-white"></i> Delete</a></td>
</tr> 
@endforeach
</tbody> 
</table>

</div>
</div>

@endsection