@extends('base')
@section('title', 'Admin Dashboard')
@stop
@section('main')

<div class="doc-content-box">
	<legend>News managment</legend>

<a href="{{ URL::to('admin/dash/news/add') }}" class="btn btn-success"><i class="icon-pencil"></i> Create news</a>&nbsp;

<div id="spaceholder">&nbsp;</div>
<table class="table table-striped table-condensed">
<thead>
	<tr>
		<th>ID</th>
		<th>Author</th>
		<th>Title</th>
		<th>Content</th>
		<th>Created at</th>
		<th>Updated at</th>
	</tr>
</thead>

<tbody> 

@foreach($newss as $news)

<tr> 
<td>{{ $news->id }}</td>
<td>{{ $news->author }}</td>
<td>{{ $news->title }}</td> 
<td>{{ $news->content }}</td> 
<td>{{ $news->created_at }}</td>
<td>{{ $news->updated_at }}</td>
<td><a class="btn btn-mini btn-danger" href="{{ URL::action('NewsController@delete', ['id' => $news->id]) }}"><i class="icon-trash icon-white"></i> Delete</a></td>
</tr> 
@endforeach
</tbody> 
</table>

</div>

@stop