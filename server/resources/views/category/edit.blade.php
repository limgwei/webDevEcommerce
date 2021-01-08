

@extends ('layouts.app')

@section ('content')
<form action="/category/{{$category->id}}" method="post">
@method('PUT')
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name" value="{{$category->name}}"></div>
<button>submit</button>
</form>
@endsection