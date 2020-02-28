<div class="search">
  <h3>List of owners</h3>
  <form action="/owners/index" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insert surname">
    <input type="submit" value="search">
  </form>
  <a href="{{action('OwnerController@index')}}"><button>Reset search</button></a>
  <a href="{{action('OwnerController@create')}}"><button>Create new owner</button></a>  
  <table>
    <tr>
      <th>Id.</th>
      <th>First name</th>
      <th>Surname</th>
      <th>Edit</th>
      <th>Show</th>
      <th>Delete</th>
    </tr>
    <tbody>
    @foreach ($owners as $owner)
      <tr>
        <td class="id">{{$owner->id}}</td>
        <td class="firstname">{{$owner->first_name}}</td>
        <td class="surname">{{$owner->surname}}</td>
        <td class="edit"><a href="#">Edit</a></td>
        <td class="show"><a href="{{action('OwnerController@show', ['id' => $owner->id])}}">Show</a></td>
        <td class="delete">
          <form action="/owners/delete" method="post">
            @method('delete')
            @csrf
            <input type="hidden" name="ownerid" value="{{$owner->id}}">
            <input type="submit" value="Delete">
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>