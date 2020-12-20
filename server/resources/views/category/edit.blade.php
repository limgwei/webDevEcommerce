


<form action="/category/{{$category->id}}" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name" value="{{$category->name}}"></div>



<input type="file" name="image[]" value="">
@foreach($category->image as $key => $media)
{{ $media->getUrl('')}}
<div>image:</div>
      @endforeach
</div>

<button>submit</button>
</form>