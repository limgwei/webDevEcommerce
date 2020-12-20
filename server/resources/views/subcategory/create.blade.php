


<form action="/subcategory" method="post" enctype="multipart/form-data">

@csrf
Fields require when post <br>
<div>name:<input type="text" name="name"></div>

<div>image:<input type="file" name="image[]"></div>

<div>subcategory:
  <select name="parent_id">
  <option value="0">___</option>
  @foreach ($parent_subs as $parent_sub) 
    
        <option value="{{$parent_sub->id}}">{{$parent_sub->name}}</option>
  
      @endforeach
  </select>

</div>

<div>category:
  <select name="category_id">
    <option value="0">___</option>
  @foreach ($categories as $category) 
 
    <option value="{{$category->id}}">{{$category->name}}</option>
   
      @endforeach
  </select>

</div>

<button>submit</button>
</form>