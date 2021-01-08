


@extends ('layouts.app')

@section ('content')
Name:{{$user->name}}
<div style="display:flex;flex-direction:column-reverse" id="container">

@foreach($chatMessages as $chatMessage)
@if($chatMessage->is_admin == 1)

  <div style="display:flex;flex-direction:row-reverse">
    <div>
      <span style="background-color:#4267B2;color:white">{{$chatMessage->message}}</span>
    </div>
  </div>

  @else

  <div style="display:flex;flex-direction:row">
    <div>
      <span style="background-color:#898F9C;color:white">{{$chatMessage->message}}</span>
    </div> 
  </div>

  @endif
@endforeach


</div>

<input type="text" id="message">
<input type="hidden" name="_token" value="{{ csrf_token()}}" id="_token">
<button onclick="submitMessage()">Submit</button>

<script>

function update(){
  $("#container").load(" #container");
}
update();
window.setInterval('update()', 2000); // 30 seconds
  function submitMessage(){

    
     $.ajax({
       url:"/chat/{{$roomId}}",
       type:"POST",
       data:{
          _token: "{{ csrf_token() }}",
         message:$("#message").val(),
         user_id:"{{ $user->id }}",
         is_admin:1
       },
       success:function(response){
        $("#message").val('');
        $("#container").load(" #container");
       }
     });
  }

  $("#message").on('keyup',function(e){
    var code = e.key;
    
    if(code == "Enter"){
      if($("#message").val()!=""){
        submitMessage();
      }
     
    }
    
  })

  function get(){

  }
  
</script>

@endsection