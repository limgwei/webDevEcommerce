
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Document</title>
  <style>
    /* body{
      background-image: linear-gradient(to bottom right, red, yellow);
      height:100vh;
      background-repeat: no-repeat;
    }
  .form-container{
    width: 360px;
    height: 200px;
    padding-top: 200px;
  }
  .input-group{
    margin-bottom: 5px;
  } */

  </style>
</head>
<body>
<center>

<form action="/login" method="post" class="form-container">
@csrf 

<div class="card" style="width: 50%;margin:0 auto;margin-top:120px">
  <div class="card-header">
    Login
  </div>
  @isset($error)
  {{$error}}
@endisset
  <div class="card-body">
  <div class="input-group mb-4">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="text" type="text" class="form-control" name="username" placeholder="username">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="d-flex justify-content-end">
    <button style="text-align:right" type="submit" class="btn btn-primary mt-2" class="submitbtn">Submit</button>
  </div>
  </div>
</div>
  

</form>
</center>
</body>
</html>
