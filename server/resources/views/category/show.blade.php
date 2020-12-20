



  <div style="border:1px solid black">

    <div>ID:{{$category->id}}</div>

    <div>Name:{{$category->name}}</div>

    <div>Image: 
      @foreach($category->image as $key => $media)
        <img src="{{ $media->getUrl('') }}">
      @endforeach
    </div>
  </div>
