@extends ('layouts.app')

@section ('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Price</th>
      <th scope="col">Comment</th>
      <th>Address</th>
      <th>Status</th>
      <th>User</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $order)
  <tr>
    <td scope="row">
    {{$order->id}}
    </td>
    <td>{{$order->price}}</td>
    <td> {{$order->comment}} </td>
    <td>{{$order->address}}</td>
    <td>{{$order->status}}</td>
    <td>{{$order->user->name}}</td>
    <td style="width: 20%;">
      <a class="btn btn-outline-success" href="order/orderItems/{{$order->id}}">View</a>
    </td>
  </tr>
 
  @endforeach

  </tbody>
</table>


@endsection