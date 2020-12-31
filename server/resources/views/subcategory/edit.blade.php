


<form action="/subcategory/{{$subcategory->id}}" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name" value="{{$subcategory->name}}"></div>

<div>subcategory:
  <select name="parent_id">
  <option value="0">___</option>
  @foreach ($parent_subs as $parent_sub) 
  
        <option value="{{$parent_sub->id}}" 
          {{$parent_sub->id == $subcategory->parent_id?'selected':''}} >{{$parent_sub->name}}</option>
  
      @endforeach
  </select>
  
</div>

<div>category:
  <select name="category_id">
    <option value="0">___</option>
  @foreach ($categories as $category) 
        <option value="{{$category->id}}" {{$category->id == $subcategory->category_id?'selected':''}}>{{$category->name}}</option>
      @endforeach
  </select>

</div>

<button>submit</button>
</form>