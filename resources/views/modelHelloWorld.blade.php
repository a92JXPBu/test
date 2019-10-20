<html>
<body>
@foreach ($groups as $group)
    <div>
        <div>{{$group->name}}</div>
        <img src="{{$group->image}}"></img>
    </div>
@endforeach
</body>
</html>

