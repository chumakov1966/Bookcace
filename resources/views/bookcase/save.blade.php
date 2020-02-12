<!DOCTYPE html>
<html>
<head>
<title>Дописать {{$name}}</title>
</head>
<body>
<div>{{$author}}</div>
<div>{{$name}}</div>
<form id="text" method="Post" action="http://mvc/book/{{$id}}/write/save"  >
	<div>
		<textarea style="width:100%; height:500px;" form="Post"  name="text" type="text">{{$text}}</textarea>
	</div>

</form>
</body>
</html>