
@extends ('layouts.app')

@section ('content')
  <div style="border:1px solid black">

    <div>ID:{{$discountProduct->id}}</div>

    <div>Value:{{$discountProduct->value}}</div>
    <div>Product:{{$discountProduct->product->name}}</div>

    <div>Start date:{{$discountProduct->start_date}}</div>

    <div>End date:{{$discountProduct->end_date}}</div>
  </div>

  @endsection
