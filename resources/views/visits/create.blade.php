
@if(isset($pet))
<h3>Add visit for {{$pet->name}}</h3>
@else 
<h3>Add new visit</h3>
@endif


@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{action('VisitController@store')}}" class="edit" method="post">
  @method('put')
  @csrf
  <label>Pet id</label>
  <input type="number" name="pet_id" id="" value="{{(isset($pet)) ? $pet->id : 0}}">
  <label>Description</label>
  <textarea rows="10" cols="40" name="description" id="">
  </textarea>
  <input type="submit" value="Submit Changes">


</form>