@extends('layouts.app')
@section('content')
 <div class="card m-3" style="width: 18rem;">
    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$comic['title']}}</h5>
     </div>
</div>
<a href="{{ route('comics.edit', $comic )}}">
  <button type="button" class="btn btn-primary">EDIT</button>
</a>
<div>
  <form action="{{route('comics.destroy', ['comic' => $comic['id']] )}}" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" name="" id="" value="cancella">
  </form>
</div>
@endsection