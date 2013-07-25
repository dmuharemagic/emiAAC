@extends('base')
@section('title', Who is online?')
@section('main')

<div class="doc-content-box">
  <table class="table table-striped table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Level</th>
        <th>Vocation</th>
        <th>Date registered</th>
        <th>Role</th>
        </tr>
  </thead>
<tbody>
  @if(!empty($results))
    <?php $count = 0;?>
    @foreach($results as $result) 
      <?php $count++;?>
      <tr>
        
        <td>{{ $count }}. </td>

        <td>{{ $result->name }}</td>

        <td>{{ $result->level }}</td>

        <td><?php if($result->vocation == 1){ 
echo "Sorcerer"; 
}else if($result->vocation == 2){
echo 'Druid';
}else if($result->vocation == 3){
echo 'Paladin';
}else if($result->vocation == 4){
echo 'Knight';
}else if($result->vocation == 5){
echo 'Master Sorcerer';
}else if($result->vocation == 6){
echo 'Elder Druid';
}else if($result->vocation == 7){
echo 'Royal Paladin';
}else{
echo 'Elite Knight';
}?></td>
        
        <td>{{ $result->created_at }}</td>
        
        <td><?php if($result->group_id == 1){ 
echo "Player"; 
}else if($result->group_id == 2){
echo 'Gamemaster';
}else if($result->group_id == 3){
echo 'God';
}?></td>

      </tr>

    @endforeach 
  @else

  <tr>

    <td>{{"There are no users online."}}</td>

  </tr>
  @endif
</tbody>

  </table>
</div>
</div>

@endsection