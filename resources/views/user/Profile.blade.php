@foreach ($users as $user)
    <p>{{$user->email}}</p> e {{$user->password}}
@endforeach
