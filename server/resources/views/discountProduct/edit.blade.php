

@extends ('layouts.app')

@section ('content')

<div class="m-4">
  <div class="card" >
    <div class="card-body">
  
      <form action="/discountProduct/{{$discountProduct->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="value">value</label>
          <input type="text" class="form-control" name="value" value="{{$discountProduct->value}}" id="value" placeholder="Enter value">
        </div>
        <div class="form-group">
          <label for="Start_date">Start_date</label>
          <input type="date" name="start_date" value="{{$discountProduct->start_date}}" min = "{{$discountProduct->start_date}}" class="form-control" id="Start_date" placeholder="Enter value" onchange="setDate()" >
        </div>
        <div class="form-group">
          <label for="End_date">End_date</label>
          <input type="date" name="end_date" value="{{$discountProduct->end_date}}" min="{{$discountProduct->start_date}}"class="form-control" id="End_date" placeholder="Enter value">
        </div>

        <div class="form-group">
          <label for="SubCategory">Product</label>
          <select class="form-control" name="product_id" id="SubCategory" disabled>
          @foreach ($products as $product)
            @if($product->id == $discountProduct->product->id)
              <option value="{{$product->id}}" selected>{{$product->name}}</option>
            @else
              <option value="{{$product->id}}">{{$product->name}}</option>
            @endif
          @endforeach
          </select>
        </div>

        <button class="btn btn-primary">submit</button>
      </form>
    </div>
  </div>
</div>

<script>
function setDate(){
  var start = document.getElementById("Start_date").value;
  document.getElementById("End_date").setAttribute("min", start);
}
</script>

@endsection