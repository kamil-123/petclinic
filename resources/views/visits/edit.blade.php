<h3>Edit {{$visit->pet->name}}'s visit on {{$visit->created_at}}</h3>

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{action('VisitController@update', ['id'=>$visit->id])}}" class="edit" method="post">
  @method('put')
  @csrf
  <label>Description</label>
  <textarea rows="10" cols="40" name="description" id="">
    {{$visit->description}}
  </textarea>
  <input type="submit" value="Submit Changes">


</form>