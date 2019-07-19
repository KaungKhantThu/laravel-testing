@extends("layout")



@section("content")
<h1>Welcome</h1>
<h1>
    
    @foreach($names as $name)
        <li>{{$greeting}} {{ $name }}</li>
    @endforeach
</h1>
@endsection


