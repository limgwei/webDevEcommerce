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
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td >  {{  $category->name }} </td>
      <td style="width: 20%;">
      <a href="/category/{{$category->id}}/edit" class="btn btn-outline-success">Edit</a>
      <a href="/category/delete/{{$category->id}}" class="btn btn-outline-danger">Del</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection 