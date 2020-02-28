
<form action="{{action('PetController@index')}}" class="search" method="post">
  @csrf
  <label>Search by pet name</label>
  <input type="text" name="search" id="">
  <input type="submit" value="Search">
</form>
<br>
<div class="index">
  <h3>Index of pets</h3>
  <hr>
<table>
  <tr>
    <th>Pet Name</td>
    <th>Owner Name</th>
    <th>Show</td>
    <th>Edit</td>
  </tr>
@foreach($pets as $pet)
  <tr>
    <td>
      {{$pet->name}}
    </td>
    <td>
      {{$pet->owner->first_name}} {{$pet->owner->surname}}

    <td>
      <a href="{{action('PetController@show', ['id' => $pet->id])}}">SHOW
    </td>
    <td>
      <a href="{{action('PetController@edit', ['id' => $pet->id])}}">EDIT</a>
    </td>
  </tr>
@endforeach
</table>
</div>
