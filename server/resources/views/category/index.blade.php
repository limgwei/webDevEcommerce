@extends ('layouts.app')

@section ('content')

@isset ($error)
  {{$error}}
@endisset

@foreach($categories as $category)
  <div style="border:1px solid black">

    <div>ID:{{$category->id}}</div>

    <div>Name:{{$category->name}}</div>
  </div>
@endforeach

@endsection