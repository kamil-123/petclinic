<h3>{{$visit->pet->name}} {{$visit->created_at}}</h3>

@if (Session::has('success_message'))
<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>
@endif

<a href="{{action('VisitController@edit', ['id' => $visit->id])}}"> EDIT VISIT </a>
<br>
<a href="{{action('VisitController@delete', ['id' => $visit->id])}}"> DELETE VISIT </a>
<br>

<div class="profile">
  <table>
    <tr>
      <th>Date</th>
      <td>{{$visit->created_at}}</td>
    </tr>
    <tr>
      <th>Owner</th>
      <td><a href="{{action('OwnerController@show', ['id' => $visit->pet->owner->id])}}">{{$visit->pet->owner->first_name}} {{$visit->pet->owner->surname}} </a></td>
    </tr>
    <tr>
      <th>Pet</th>
      <td><a href="{{action('PetController@show', ['id' => $visit->pet->id])}}">{{$visit->pet->name}}</a></td>
    </tr>
  </table>
  <hr>
  <h3>Description</h3>
  <p>{{$visit->description}}</p>
</div>

