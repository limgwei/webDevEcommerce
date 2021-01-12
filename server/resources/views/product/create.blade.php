
@extends ('layouts.app')

@section ('content')

<div class="m-4">
  <div class="card" >
    <div class="card-body">
  
    <form action="/product" method="post" enctype="multipart/form-data">
      @csrf
      Fields require when post <br>
        <div class="form-group">
          <label for="ProductName">Product Name</label>
          <input type="text" class="form-control" name="name" id="ProductName" placeholder="Enter Product Name">
        </div>

        <div class="form-group">
          <label for="ProductDescription">Product Description</label>
          <textarea rows="4" type="text" class="form-control" name="description" id="ProductDescription" placeholder="Enter Product Description">
          </textarea>
        </div>

        <div class="form-group">
          <label for="Image">Image</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <!-- <input type="file" class="custom-file-input" id="inputGroupFile01"> -->
              <!-- <input type="file" class="custom-file-input" name="image" > -->
              <input type="file" class="custom-file-input" name="image" >
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              <!-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label>-->
            </div>
          </div>
    
        </div>
        <div class="form-group">
          <label for="SubCategory">Sub Category</label>
          <select class="form-control" name="sub_category_id" id="SubCategory">
          @foreach ($subcategories as $subcategory) 
            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
          @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="ProductPrice">Product Price</label>
          <input type="text" class="form-control" name="price"  id="ProductPrice" placeholder="Enter Product Price">
        </div>

        <div class="form-group">
          <label for="ProductQuantity">Product Quantity</label>
          <input type="text" class="form-control" name="quantity"  id="ProductQuantity" placeholder="Enter Product Quantity">
        </div>

        <button>submit</button>
      </form>
    </div>
  </div>
</div>
@endsection