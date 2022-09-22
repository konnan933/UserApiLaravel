@foreach($users as $user)
<form action="/api/user/{{$user->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div><input type="submit" value="{{$user->name}}"></div>
</form>


@endforeach