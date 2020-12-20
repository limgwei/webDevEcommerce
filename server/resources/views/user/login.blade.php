require

<form action="/login" method="post">
@csrf 

@isset($error)
  {{$error}}
@endisset
username <input type="text" name="username"> 
password <input type="text" name="password">
<button type="submit">Submit</button>
</form>