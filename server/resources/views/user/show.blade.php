

@extends ('layouts.app')

@section ('content')
<div style="border:1px solid black;">
  <div>ID:{{$user->id}}</div>
  <div>Name:{{$user->name}}</div>
  <div>
 Image:
  @foreach($user->image as $key => $media)
                  <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                              <img src="{{ $media->getUrl('preview') }}">
                        </a>
              @endforeach
  </div>
  <div> Email:
 {{$user->email}} 
 </div>
 <div> Address:
 {{$user->address}} 
 </div>
 </div>

 @endsection