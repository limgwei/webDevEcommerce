@extends ('layouts.app')

@section ('content')

@foreach($chatRooms as $chatRoom)
<a href="/chat/{{$chatRoom->chat_room_id}}">
  <div style="border:1px solid black">

    <div>ID:{{$chatRoom->chat_room_id}}</div>

    <div>Name:{{$chatRoom->user->name}}</div>
  </div>
  </a>
@endforeach

@endsection