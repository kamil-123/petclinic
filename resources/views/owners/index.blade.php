<div class="search">
  <h3>List of owners</h3>
  <form action="/owners/index" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insert surname">
    <input type="submit" value="search">
  </form>
  <table>
    <tr>
      <th>First name</th>
      <th>Surname</th>
    </tr>
    <tbody>
    @foreach ($owners as $owner)
      <tr>
        <th class="firstname">{{$owner->first_name}}</th>
        <th class="surname">{{$owner->surname}}</th>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>