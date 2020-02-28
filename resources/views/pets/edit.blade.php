<h3>Edit {{$pet->name}}</h3>

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{action('PetController@update', ['id'=>$pet->id])}}" class="edit" method="post">
  @method('put')
  @csrf
  <label>Name</label>
  <input type="text" name="name" id="" value="{{$pet->name}}">
  <label>Breed</label>
  <input type="text" name="breed" id="" value="{{$pet->breed}}">
  <label>Weight</label>
  <input type="number" name="weight" id="" value="{{$pet->weight}}">
  <label>Age</label>
  <input type="number" name="age" id="" value="{{$pet->age}}">
  <label>Photo</label>
  <input type="text" name="photo" id="" value="{{$pet->photo}}">
  <input type="submit" value="Submit Changes">


</form>