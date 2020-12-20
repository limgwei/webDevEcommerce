Fields given <br>
category name with id <br>
{{$categories}} <br>
product name with id <br>
{{$products}} <br>

@foreach ($products as $product)
  <p>{{$product->id}}</p>
@endforeach

Fields require when post <br>
name<br>
description <br>
image <br>

two picks only one <br>
category_id <br>
product_id