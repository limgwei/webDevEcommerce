


  <div style="border:1px solid black">

    <div>ID:{{$orderItem->id}}</div>

    <div>Name:{{$orderItem->order_name}}</div>
    <div>Quantity:{{$orderItem->product->quantity}}</div>

    <div>Current price:{{$orderItem->current_price}}</div>

    <div>Order ID:{{$orderItem->order->id}}</div>

  </div>
