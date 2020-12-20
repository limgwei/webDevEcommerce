


<form action="/product" method="post" enctype="multipart/form-data">
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name"></div>
<div>description:<input type="text" name="description"></div>
<div>image:<input type="file" name="image[]"></div>

<div>subcategory:
  <select name="sub_category_id">

  @foreach ($subcategories as $subcategory) 
        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
      @endforeach
  </select>

</div>

<div>Price: <input type="text" name="price"></div>

<div>Quantity: <input type="number" name="quantity"></div>

<button>submit</button>
</form>