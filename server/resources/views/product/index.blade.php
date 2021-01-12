@extends ('layouts.app')

@section ('content')
@isset ($error)
  {{$error}}
@endisset

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prduct Name</th>
      <th scope="col">Description</th>
      <th>Image</th>
      
      <th>Sub Category</th>
   
      <th>Price</th>
      <th>Quantity</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
  <tr>
    <td scope="row">
    {{$product->id}}
    </td>
    <td>{{ $product->name }}</td>
    <td> {{ $product->description }} </td>
    <td>  @foreach($product->image as $key => $media)
        <img class="w-100" src="{{ $media->getUrl('') }}">
      @endforeach 
    </td>
   
      <td>{{$product->sub_category->name}}</td>
   
    <td>{{$product->price}}</td>
    <td>{{$product->quantity}}</td>
    <td style="width: 20%;">
      <a href="/product/{{$product->id}}/edit" class="btn btn-outline-success">Edit</a>
      <a href="/product/{{$product->id}}" class="btn btn-outline-danger">Del</a>
      </td>
  </tr>
 
  @endforeach

  </tbody>
</table>


@endsection