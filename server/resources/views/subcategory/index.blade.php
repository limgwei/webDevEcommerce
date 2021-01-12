@extends ('layouts.app')

@section ('content')
@isset ($error)
  {{$error}}
@endisset

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th> Category</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach($subcategories as $subcategory)
    <tr>
      <th scope="row">{{ $subcategory->id }}</th>
      <td >  {{ $subcategory->name }} </td>

      @if(isset($subcategory->category->id))
      <td>{{$subcategory->category->name}}</td>
      @else 
      <td></td>
      @endif

      <td style="width: 20%;">
      <a href="/subcategory/{{$subcategory->id}}/edit" class="btn btn-outline-success">Edit</a>
      <a href="/subcategory/delete/{{$subcategory->id}}" class="btn btn-outline-danger">Del</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>




@endsection