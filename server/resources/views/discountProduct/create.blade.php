
@extends ('layouts.app')

@section ('content')

<div class="m-4">
  <div class="card" >
    <div class="card-body">
      <h5 class="card-title">Create Discount</h5>
      <form action="/discountProduct" method="post" enctype="multipart/form-data"action="/discountProduct" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="value">value</label>
          <input type="text" class="form-control" name="value"  id="value" placeholder="Enter value">
        </div>
        <div class="form-group">
          <label for="Start_date">Start_date</label>
          <input type="date" name="start_date"  class="form-control" id="Start_date" placeholder="Enter value" onchange="setDate()">
        </div>
        <div class="form-group">
          <label for="End_date">End_date</label>
          <input type="date" name="end_date" class="form-control" id="End_date" placeholder="Enter value" disabled>
        </div>

        <div class="form-group">
          <label for="SubCategory">Product</label>
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

<script>
  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("Start_date").setAttribute("min", today);

function setDate(){
  document.getElementById("End_date").disabled = false;
  var start = document.getElementById("Start_date").value;
  console.log(start);
  document.getElementById("End_date").setAttribute("min", start);
}
</script>

@endsection