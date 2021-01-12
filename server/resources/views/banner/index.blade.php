

@extends ('layouts.app')

@section ('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th>Category</th>
      <th>Product</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
  @foreach($banners as $banner)
  <tr>
    <td scope="row">
    {{$banner->id}}
    </td>
    <td>{{$banner->name}}</td>
    <td>  
      @foreach($banner->image as $key => $media)
        <img class="w-50" src="{{ $media->getUrl('') }}">
      @endforeach 
    </td>
    @if(isset($banner->category->id))
    <td>{{$banner->category->name}}</td>
    @else
    <td></td>
    @endif
    @if(isset($banner->product->id))
    <td>{{$banner->product->name}}</td>
    @else
    <td></td>
    @endif
    <td style="width: 20%;">
      <a class="btn btn-outline-success" href="banner/{{$banner->id}}/edit">View</a>
    </td>
  </tr>
 
  @endforeach

  </tbody>
</table>


@endsection ('content')