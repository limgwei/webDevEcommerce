@extends ('layouts.app')

@section ('content')

@foreach($orders as $order)
  <div style="border:1px solid black">

    <div>ID:{{$order->id}}</div>

    <div>Price:{{$order->price}}</div>
    <div>Comment:{{$order->comment}}</div>

    <div>Address:{{$order->address}}</div>

    <div>Status:{{$order->status}}</div>

    <div>User:{{$order->user->name}}</div>
    <div><a href="order/orderItems/{{$order->id}}">View</a></div>
  </div>
@endforeach

@endsection