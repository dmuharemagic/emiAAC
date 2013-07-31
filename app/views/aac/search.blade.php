@extends('base')
@section('title', 'Test')
@endsection
@section('main')

<div class="doc-content-box">
<form action="{{ URL::action('CharactersController@search') }}" method="get">
    <input type="text" name="search-term">
    <input type="submit" value="Search">
</form>
</div>

@endsection