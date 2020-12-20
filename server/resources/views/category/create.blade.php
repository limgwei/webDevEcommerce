


<form action="/category" method="post" enctype="multipart/form-data">
@csrf
Fields require when post <br>
<div>name:<input type="text" name="name"></div>
<div>image:<input type="file" name="image[]"></div>


<button>submit</button>
</form>