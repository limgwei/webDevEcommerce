
{{$user->name}}
@foreach($chatMessages as $chatMessage)
@extends ('layouts.app')

@section ('content')
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

<input type="text" id="text">
<button onclick="submitText()">Submit</button>

<script>
  function submitText(){
    console.log($("#text").val());
  }
  
</script>

@endsection