@include('header')
<h1>Users Page count</h1>
@include('inner')

@foreach ($users as $item)
<h3>{{$item}}</h3>
    
@endforeach
@csrf
{{-- users in javascript --}}
<script>
    var data = @json($users);
    console.warn(data);

</script>
{{-- @if($user == 'pratik')
<h3>Welcome {{$user}}</h3>
@elseif($user == 'bishu')
<h3>Welcome {{$user}}</h3>
@else
<h2>Unknown User</h2>
@endif --}}

{{-- @for($i = 0; $i < 10; $i++)
<h4>{{$i}} </h4>
@foreach ($users as $user)
<h3>{{$user}}</h3>
    
@endforeach
@endfor --}}

