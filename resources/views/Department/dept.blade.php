<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
</head>
<body>
    @foreach($dname as $dn)
    <diV class='intro'> Name:{{$dn->name}}
        Id:{{$dn->id}}</div>
    @endforeach
    <h1>Offered courses</h1>
    @foreach($department as $dp)
    <h3><b>course:</b></h3>{{$dp->name}}<br>
    @foreach($dp->courses as $ct)
        Name:{{$ct->teacherCourse->teacher->name}}
    @endforeach
    @endforeach

</body>
</html>