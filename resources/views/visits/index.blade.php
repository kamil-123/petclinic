<form action="{{action('VisitController@search')}}" class="search" method="post">
  @csrf
  <label>By date</label>
  <input type="date" name="date" id="">
  <label>By pet</label>
  <input type="name" name="name" id="">
  <input type="submit" value="Search">
</form>
<br>
<div class="index">
  <h3>Index of visits</h3>
  <hr>
<table>
  <tr>
    <th>Pet Name</td>
    <th>Owner Name</th>
    <th>Date</th>
    <th>Show</td>
    <th>Edit</td>
  </tr>
@foreach($visits as $visit)
  <tr>
    <td>
      {{$visit->pet->name}}
    </td>
    <td>
      {{$visit->pet->owner->first_name}} {{$visit->pet->owner->surname}}
    </td>
    <td>
      {{$visit->created_at}}
    </td>
    <td>
      <a href="{{action('VisitController@show', ['id' => $visit->id])}}">SHOW
    </td>
    <td>
      <a href="{{action('VisitController@edit', ['id' => $visit->id])}}">EDIT</a>
    </td>
  </tr>
@endforeach
</table>
</div>
