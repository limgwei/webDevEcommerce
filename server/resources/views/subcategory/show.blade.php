
@extends ('layouts.app')

@section ('content')


  <div style="border:1px solid black">

    <div>ID:{{$subcategory->id}}</div>

    <div>Name:{{$subcategory->name}}</div>
            
    @isset($subcategory->category->id)
      <div>Category:{{$subcategory->category->name}}</div>
    @endisset

    
   

   
  </div>

  @endsection
