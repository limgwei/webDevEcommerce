@extends ('layouts.app')

@section ('content')

Receipt:{{$order->receipt}}
<br>
Date:{{$order->updated_date}}
<br>
Name:{{$order->user->name}}
<br>
Address:{{$order->address}}
@foreach($items as $item)
  <div style="border:1px solid black">

    <div>ID:{{$item->id}}</div>
    <div>Products:{{$item->order_name}}</div>
    <div>Price:{{$item->current_price}}</div>
    <div>Quantity:{{$item->quantity}}</div>
    <div>Amount:{{$item->quantity * $item->current_price}}</div>
  </div>
@endforeach
  <div>Total:{{$order->price}}</div>
@endsection