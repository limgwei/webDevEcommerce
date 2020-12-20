


<form action="/subcategory/{{$subcategory->id}}" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name" value="{{$subcategory->name}}"></div>

<div>image:<input type="file" name="image[]"></div>
@foreach($product->image as $key => $media)
{{ $media->getUrl('')}}
<div>image:</div>
      @endforeach
      

<div>subcategory:
  <select name="parent_id">
  <option value="0">___</option>
  @foreach ($parent_subs as $parent_sub) 
    @if($parent_sub->id == $subcategory->parent->id)
        <option value="{{$parent_sub->id}}" selected>{{$parent_sub->name}}</option>
    @else
    <option value="{{$parent_sub->id}}">{{$parent_sub->name}}</option>
    @endif
      @endforeach
  </select>

</div>

<div>category:
  <select name="category_id">
    <option value="0">___</option>
  @foreach ($categories as $category) 
  @if($category->id == $subcategory->category->id)
        <option value="{{$category->id}}" selected>{{$category->name}}</option>
    @else
    <option value="{{$category->id}}">{{$category->name}}</option>
    @endif
      @endforeach
  </select>

</div>

<button>submit</button>
</form>