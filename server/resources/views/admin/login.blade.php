
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Document</title>
  <style>
    body{
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
  }

  </style>
</head>
<body>
<center>
<form action="/login" method="post" class="form-container">
@csrf 
@isset($error)
  {{$error}}
@endisset

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="text" type="text" class="form-control" name="username" placeholder="username">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary" class="submitbtn">Submit</button>

</form>
</center>
</body>
</html>
