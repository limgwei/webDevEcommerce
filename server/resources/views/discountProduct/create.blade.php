
@extends ('layouts.app')

@section ('content')

<form action="/discountProduct" method="post" enctype="multipart/form-data">
@csrf
Fields require when post <br>
<div>value:<input type="text" name="value"></div>
<div>
  Start_date<input type="date" name="start_date">

  End_date<input type="date" name="end_date">
</div>

<select name="product_id">
  @foreach ($products as $product)
    <option value="{{$product->id}}">{{$product->name}}</option>
  @endforeach

</select>

<button>submit</button>

</form>

@endsection