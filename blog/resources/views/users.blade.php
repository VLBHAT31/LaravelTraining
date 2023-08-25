<x-header data="users component header" />

@if($users=="aaa")
<h3>hi {{$users}}</h3>
@elseif($users=="sam")
<h3>hello {{$users}}</h3>
@else
<h3>Unknown User</h3>
@endif

@for($i=0;$i<10;$i++)
<h4>{{$i}}</h4>
@endfor

@foreach($users as $users)
<h3>{{$users}}</h3>
@endforeach
