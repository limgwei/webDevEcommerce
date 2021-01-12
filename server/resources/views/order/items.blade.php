@extends ('layouts.app')

@section ('content')

<a href="/order" type="button" class="btn btn-outline-primary mb-2 mt-3 ">Back</a>
<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Receipt ID: {{$order->receipt}}</h5>
    <p class="card-text mb-0">Customer Name: {{$order->user->name}}</p>
    <p class="card-text mb-0">Customer Address: {{$order->address}}</p>
    <p class="card-text mb-0">Date: {{$order->updated_date}}</p>
    <div class="mb-5"></div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Products</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Amount</th>
        </tr>
      </thead>
      <tbody>
      @foreach($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->order_name}}</td>
        <td>{{$item->current_price}}</td>
        <td>{{$item->quantity}}</td>
        <td>{{$item->quantity * $item->current_price}}</td>
      </tr>
    @endforeach
        
      </tbody>
  </table>
  <div style="text-align:right">
    <p style="font-weight: bold;">Total:{{$order->price}}</p>
  </div>
  </div>
</div>

@endsection