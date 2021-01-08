@extends ('layouts.app')

@section ('content')



  <div style="border:1px solid black">

    <div>ID:{{$product->id}}</div>

    <div>Name:{{$product->name}}</div>
    <div>Description:{{$product->description}}</div>
    <div>Image: 
      @foreach($product->image as $key => $media)
        <img src="{{ $media->getUrl('') }}">
      @endforeach
    </div>
            
    @isset($product->sub_category->id)
      <div>Subcategory:{{$product->sub_category->name}}</div>
    @endisset

    <div>Price:{{$product->price}}</div>
    <div>Quantity:{{$product->quantity}}</div>
   

   
  </div>
@endsection