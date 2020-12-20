


<form action="/banner/{{$banner->id}}" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name" value="{{$banner->name}}"></div>
<div>description:<input type="text" name="description" value="{{$banner->description}}" ></div>


<input type="file" name="image[]" value="">
@foreach($banner->image as $key => $media)
{{ $media->getUrl('')}}
<div>image:</div>
      @endforeach
      
2 picks one
<div>category:
  <select name="category_id">
  <option value="0">___</option>
  @foreach ($categories as $category) 
       @if($category->id == $banner->category->id)
        <option value="{{$category->id}}" selected>{{$category->name}}</option>
        @else
        <option value="{{$category->id}}">{{$category->name}}</option>
      @endif
      @endforeach
  </select>

</div>

<div>product:
  <select name="product_id">
  <option value="0">___</option>
     @foreach ($products as $product) 
     @if($product->id == $banner->product->id)
        <option value="{{$product->id}}" selected>{{$product->name}}</option>
        @else
        <option value="{{$product->id}}">{{$product->name}}</option>
      @endif
      @endforeach
  </select>

</div>
<button>submit</button>
</form>