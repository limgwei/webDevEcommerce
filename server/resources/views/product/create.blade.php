


<form action="/banner" method="post" enctype="multipart/form-data">
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name"></div>
<div>description:<input type="text" name="description"></div>
<div>image:<input type="file" name="image[]"></div>
2 picks one
<div>category:
  <select name="category_id">
    <option value="0">___</option>
  @foreach ($categories as $category) 
        <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
  </select>

</div>

<div>product:
  <select name="product_id">
  <option value="0">___</option>
     @foreach ($products as $product) 
        <option value="{{$product->id}}">{{$product->name}}</option>
      @endforeach
  </select>

</div>
<button>submit</button>
</form>