@extends('base')
@section('title', 'Who is online?')
@endsection
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

    @if($results->count() > 0)
        <?php $count = 0;?>
        @foreach($results as $result) 
      <?php $count++;?>
      <tr>

        <td>{{ $count }}. </td>

        <td>{{ $result->name }}</td>

        <td>{{ $result->level }}</td>

        <td><?php 
        $vocations = array(

        1 => "Sorcerer",
        2 => "Druid",
        3 => "Paladin",
        4 => "Knight",
        5 => "Master Sorcerer",
        6 => "Elder Druid",
        7 => "Royal Paladin",
        8 => "Elite Knight"
        
        );

    echo $vocations[$result->vocation];?></td>
        
        <td>{{ $result->created_at }}</td>
        
        <td><?php 
        $groups = array(

         1=> "Player",
         2=>"Gamemaster",
         3=>"God"

         );

         echo $groups[$result->group_id];?></td>

      </tr>
      @endforeach 
@else

<td>{{ "There are no users online." }}</td>

@endif
</tbody>

  </table>
</div>
</div>

@endsection