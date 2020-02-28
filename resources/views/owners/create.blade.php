<h3>Create new owner</h3>
<form action="/owners/create" method="post">
@csrf

<label for="firstname">First name:</label>
  <input type="text" name="firstname" placeholder="Insert first name">
<label for="surname">Surname:</label>
<input type="text" name="surname" placeholder="Insert surname">
<input type="submit" value="Create new owner">
</form>