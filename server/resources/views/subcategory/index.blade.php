
@isset ($error)
  {{$error}}
@endisset


@foreach($subcategories as $subcategory)
  <div style="border:1px solid black">

    <div>ID:{{$subcategory->id}}</div>

    <div>Name:{{$subcategory->name}}</div>
            
    @isset($subcategory->parent->id)
      <div>Subcategory:{{$subcategory->parent->name}}</div>
    @endisset

    @isset($subcategory->category->id)
      <div>Category:{{$subcategory->category->name}}</div>
    @endisset

    
   

   
  </div>
@endforeach