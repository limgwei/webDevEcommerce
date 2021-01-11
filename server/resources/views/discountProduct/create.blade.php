
@extends ('layouts.app')

@section ('content')

<div class="m-4">
  <div class="card" >
    <div class="card-body">
  
      <form action="/discountProduct/{{$discountProduct->id}}" method="post" enctype="multipart/form-data"action="/discountProduct" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="value">value</label>
          <input type="text" class="form-control" name="value"  id="value" placeholder="Enter value">
        </div>
        <div class="form-group">
          <label for="Start_date">Start_date</label>
          <input type="date" name="end_date"  class="form-control" id="Start_date" placeholder="Enter value">
        </div>
        <div class="form-group">
          <label for="End_date">End_date</label>
          <input type="date" name="end_date" class="form-control" id="End_date" placeholder="Enter value">
        </div>

        <div class="form-group">
          <label for="SubCategory">Sub Category</label>
          <select class="form-control" name="product_id" id="SubCategory">
          @foreach ($products as $product)
             <option value="{{$product->id}}">{{$product->name}}</option>
          @endforeach
          </select>
        </div>
        <button class="btn btn-primary"> submit</button>
      </form>
    </div>
  </div>
</div>

@endsection