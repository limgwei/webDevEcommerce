
@extends ('layouts.app')

@section ('content')

<div class="m-4">
    <div class="card">
        <div class="card-body"> 
            <h5 class="card-title">Create Sub Category</h5>
            <form action="/subcategory" method="post">
              @csrf
              <div class="form-group">
                  <label for="nameInput">name</label>
                  <input type="text" class="form-control" name="name" id="nameInput" placeholder="Insert Category">
              </div>
              <div class="form-group">
                <label for="subcategorySelect">category</label>
                <select name="category_id" class="form-control" id="subcategorySelect">
                @foreach ($categories as $category) 
                  <option value="{{$category->id}}">{{$category->name}}</option> 
                @endforeach
                </select>
              </div>
              <button class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
