@extends('base')
@section('main')

<div class="doc-content-box">
  <table class="table table-striped table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Date registered</th>
        <th>Role</th>
        
        </tr>
  </thead>

  <tbody>
    <?php $count = 0;?> 
@foreach($results as $result)
  <?php $count++;?>
    <tr>
      <td>{{ $count }}. </td>
      <td>{{ $result->name }}</td>
      <td>{{ $result->created_at }}</td>
      <td>{{ $result->group_id }}</td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>
</div>

@endsection