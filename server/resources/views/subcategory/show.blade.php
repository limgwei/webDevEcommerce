



  <div style="border:1px solid black">

    <div>ID:{{$subcategory->id}}</div>

    <div>Name:{{$subcategory->name}}</div>

    <div>Image: 
      @foreach($subcategory->image as $key => $media)
        <img src="{{ $media->getUrl('') }}">
      @endforeach
    </div>
            
    @isset($subcategory->parent->id)
      <div>Subcategory:{{$subcategory->parent->name}}</div>
    @endisset

    @isset($subcategory->category->id)
      <div>Category:{{$subcategory->category->name}}</div>
    @endisset

    
   

   
  </div>
