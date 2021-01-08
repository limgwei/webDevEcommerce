@extends ('layouts.app')

@section ('content')

@foreach($chatRooms as $chatRoom)
<a href="/chat/{{$chatRoom->id}}">
  <div style="border:1px solid black">

    <div>ID:{{$chatRoom->id}}</div>

    <div>Name:{{$chatRoom->user->name}}</div>
  </div>
  </a>
@endforeach

@endsection