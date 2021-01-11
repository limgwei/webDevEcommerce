@extends ('layouts.app')

@section ('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image </th>
      <th scope="col"> Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
     @foreach($users as $user)
    <tr>
      <td scope="row">{{ $user->id }}</td>
      <td >  {{ $user->name }} </td>
      <td>
      @foreach($user->image as $key => $media)
        <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
          <img src="{{ $media->getUrl('preview') }}">
        </a>
      @endforeach
      </td>
      <td>
        {{$user->email}} 
      </td>
      <td>
        {{$user->address}} 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection