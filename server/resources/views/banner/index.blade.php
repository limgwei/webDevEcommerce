

@extends ('layouts.app')

@section ('content')
@foreach($banners as $banner)
  <div style="border:1px solid black">

    <div>ID:{{$banner->id}}</div>

    <div>Name:{{$banner->name}}</div>

    <div>Image: 
      @foreach($banner->image as $key => $media)
        <img src="{{ $media->getUrl('') }}">
      @endforeach
    </div>
            
    @isset($banner->category->id)
      <div>Category:{{$banner->category->name}}</div>
    @endisset
   
    @isset($banner->product->id)
      <div>Product:{{$banner->product}}</div>
    @endisset
   
  </div>
@endforeach
@endsection ('content')