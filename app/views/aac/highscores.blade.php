@extends('base')
@section('title', 'Highscores')
@section('main')
<!-- This is not done yet. -->
<div class="doc-content-box">
	<div class="row-fluid" style="clear: both">
<div class="span3">
<ul class="nav nav-pills nav-stacked">
	
        <li class="active"><a href="#">Level</a></li>

        <li><a href="#">Magic Level</a></li>

        <li><a href="#">Sword Fighting</a></li>

        <li><a href="#">Club Fighting</a></li>

        <li><a href="#">Axe Fighting</a></li>

        <li><a href="#">Distance Fighting</a></li>

        <li><a href="#">Fist Fighting</a></li>

        <li><a href="#">Fishing</a></li>

        <li><a href="#">Shielding</a></li>

</ul>
</div>
<div class="span8">
	<table class="table table-striped table-condensed">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Level</th>
			</tr>
		</thead>
		<tbody>
		<?php $count = 0;?> 
@foreach ($players as $player)
        <?php $count++;?>
<tr>
    <td>{{ $count }}. </td> 
    <td>{{ $player->name }}</td>
    <td>{{ $player->level }}</td>
</tr>

@endforeach
        </tbody>
    </table>
</div>
</div>
</div>

@endsection