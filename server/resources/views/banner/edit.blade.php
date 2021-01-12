
@extends ('layouts.app')

@section ('content')
<div class="m-4">
  
  <div class="card" >
    <div class="card-body">
    <h5 class="card-title">Edit Banner</h5>
    <form action="/banner/{{$banner->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        Fields require when post <br>
        <div class="form-group">
          <label for="BannerName"> Name</label>
          <input type="text" class="form-control" name="name" value="{{$banner->name}}" id="BannerName" placeholder="Enter Product Name">
        </div>

        <div class="form-group">
          <label for="description"> Description</label>
          <textarea rows="4" type="text" class="form-control" name="description" id="description" placeholder="Enter Description">
          {{$banner->description}}
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
              <input type="file" class="custom-file-input" name="image[]" >
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              <!-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label>-->
              @foreach($banner->image as $key => $media)
                <small id="emailHelp" class="form-text text-muted">
                  {{ $media->getUrl('')}}
                </small>
              @endforeach
            </div>
          </div>
    
        </div>
        <p>2 picks one</p>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" name="category_id" id="category">
          <option value="0">___</option>
          @foreach ($categories as $category) 
            @if($category->id == $banner->category->id)
              <option value="{{$category->id}}" selected>{{$category->name}}</option>
              @else
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
          @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="product">Category</label>
          <select class="form-control" name="product_id" id="product">
          <option value="0">___</option>
          @foreach ($products as $product) 
            @if($product->id == $banner->product->id)
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
@endsection