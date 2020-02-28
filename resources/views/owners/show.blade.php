<h3>Owner First name: {{$owner->first_name}}</h3>
<h3>Owner Surname: {{$owner->surname}}</h3>

<table>
  <tr>
    <th>Id.</th>
    <th>Name</th>
    <th>Breed</th>
    <th>Age</th>
    <th>Weight</th>
    <th>Photo</th>
    <th>Show</th>
    <th>Edit</th>
    <th>Delete</th>
    <th>Visits</th>
  </tr>
  <tbody></tbody>
@foreach ($owner->pets as $pet)
  <tr>
    <td>{{$pet->id}}</td>
    <td>{{$pet->name}}</td>
    <td>{{$pet->breed}}</td>
    <td>{{$pet->age}}</td>
    <td>{{$pet->weight}}</td>
    <td><img src="../photos/{{$pet->photo}}" alt="Photo {{$pet->name}}" style="width:100px"></td>
    <td><a href="{{action('PetController@show', ['id' => $pet->id])}}">Show</a></td>
    <td><a href="{{action('PetController@edit', ['id' => $pet->id])}}">Edit</a></td>
    <td>
      <form action="/pets/delete" method="post">
      @method('delete')
      @csrf
      <input type="hidden" name="petid" value="{{$pet->id}}">
      <input type="hidden" name="ownerid" value="{{$owner->id}}">
      <input type="submit" value="Delete">
      </form>
    </td>
    <td><a href="{{action('VisitController@search', ['id' => $pet->id])}}">Visits</a></td>

</tr>    
@endforeach
 </tbody>
</table>

