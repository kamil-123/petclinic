<div class="search">
 @foreach ($owners as $owner)
  <div class="firstname">{{$owner->first_name}}</div>
  <div class="surname">{{$owner->surname}}</div>
 @endforeach

</div>