
@extends ('layouts.app')

@section ('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Value</th>
      <th scope="col">Product Name</th>
      <th>Start Date</th>
      <th>End Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($discountProducts as $discountProduct)
  <tr>
    <td scope="row">
    {{$discountProduct->id}}
    </td>
    <td>{{$discountProduct->value}}</td>
    <td>{{$discountProduct->product->name}}</td>
    <td>{{$discountProduct->start_date}}</td>
    <td style="width: 20%;">{{$discountProduct->end_date}}</td>
    <td style="width: 20%;">
      <a href="/discountProduct/{{$discountProduct->id}}/edit" class="btn btn-outline-success">Edit</a>
      <a href="/discountProduct/delete/{{$discountProduct->id}}" class="btn btn-outline-danger">Del</a>
      </td>
  </tr>
 
  @endforeach

  </tbody>
</table>
@endsection