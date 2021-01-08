
@extends ('layouts.app')

@section ('content')

<form action="/category" method="post">
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name"></div>



<button>submit</button>
</form>
@endsection