

@foreach($orders as $order)
  <div style="border:1px solid black">

    <div>ID:{{$order->id}}</div>

    <div>Price:{{$order->price}}</div>
    <div>Comment:{{$discountProduct->comment}}</div>

    <div>Address:{{$order->address}}</div>

    <div>Status:{{$order->status}}</div>

    <div>Status:{{$order->user->name}}</div>
  </div>
@endforeach