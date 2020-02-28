<h3>{{$pet->name}} profile</h3>

@if (Session::has('success_message'))
<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>
@endif

<a href="{{action('PetController@edit', ['id' => $pet->id])}}"> EDIT PROFILE </a>
<br>
<a href="{{action('OwnerController@edit', ['id' => $pet->owner->id])}}"> EDIT OWNER PROFILE </a>
<br>

<div class="profile">
  <table>
    <tr>
      <th>Name</th>
      <td>{{$pet->name}}</td>
    </tr>
    <tr>
      <th>Owner</th>
      <td><a href="{{action('OwnerController@show', ['id' => $pet->owner->id])}}">{{$pet->owner->first_name}} {{$pet->owner->last_name}} </a></td>
    </tr>
    <tr>
      <th>Age</th>
      @if($pet->age === 0) 
        <td>N/A</td>
      @else
      <td>{{$pet->age}}</td>
      @endif
    </tr>
    <tr>
      <th>Weight</th>
      @if($pet->weight === 0) 
        <td>N/A</td>
      @else
      <td>{{$pet->weight}}</td>
      @endif
    </tr>
  </table>
<img src="../photos/{{$pet->photo}}">
</div>

