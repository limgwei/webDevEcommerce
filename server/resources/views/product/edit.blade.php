
@extends ('layouts.app')

@section ('content')

<form action="/product/{{$product->id}}" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name" value="{{$product->name}}"></div>
<div>description:<input type="text" name="description" value="{{$product->description}}" ></div>


<input type="file" name="image[]" value="">
@foreach($product->image as $key => $media)
{{ $media->getUrl('')}}
<div>image:</div>
      @endforeach
      
2 picks one
<div>subcategory:
  <select name="sub_category_id">
  @foreach ($subcategories as $subcategory) 
       @if($subcategory->id == $product->subcategory_id)
        <option value="{{$subcategory->id}}" selected>{{$subcategory->name}}</option>
        @else
        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
      @endif
      @endforeach
  </select>

  @endsection

</div>

<div>Price: <input type="text" name="price" value="{{$product->price}}"></div>

<div>Quantity: <input type="number" name="quantity" value="{{$product->quantity}}"></div>

<button>submit</button>
</form>