

@extends ('layouts.app')

@section ('content')
<div class="m-4">

    <div class="card">
        <div class="card-body"> 
            <h5 class="card-title">Edit Category</h5>
            <form action="/category/{{$category->id}}" method="post">
            @method('PUT')
            @csrf
            Fields require when post <br>
            <div class="form-group">
                <label for="nameInput">name</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}" id="nameInput" placeholder="Insert Category">
            </div>
            <button class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>

</div>

@endsection