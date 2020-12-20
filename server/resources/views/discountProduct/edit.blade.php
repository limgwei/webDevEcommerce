


<form action="/discountProduct/{{$discountProduct->id}}" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf
<div>value:<input type="text" name="value" value="{{$discountProduct->value}}"></div>
<div>
  Start_date<input type="date" name="start_date" value="{{$discountProduct->start_date}}">

  End_date<input type="date" name="end_date" value="{{$discountProduct->end_date}}">
</div>      

<select name="product_id">
  @foreach ($products as $product)
  @if($product->id == $discountProduct->product->id)
    <option value="{{$product->id}}" selected>{{$product->name}}</option>
@else
<option value="{{$product->id}}">{{$product->name}}</option>
@endif
  @endforeach

</select>

<button>submit</button>
</form>