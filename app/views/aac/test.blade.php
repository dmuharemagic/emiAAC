@extends('base')
@section('title', 'Highscores')
@stop
@section('main')


<!-- test.blade.php -->
<div class="tabbable tabs-left">
    <ul class="nav nav-tabs">
    @foreach ($skills as $skill)
        <li><a href="?{{ $skill->id }}" data-toggle="tab">{{ $skill->name }}</a></li>       
    @endforeach
    </ul>
    <div class="tab-content">
    @foreach ($skills as $skill)
        <div class="tab-pane active" id="?{{ $skill->id }}">
            @foreach ($skills->players as $player)
                <p>{{ $player->name }} : {{ $player->pivot->count }} points !</p>
            @endforeach
        </div>
    @endforeach
    </div>
</div>


@stop