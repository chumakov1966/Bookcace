<!DOCTYPE html>
<html>
<head>
<title>Дописать {{$name}}</title>
</head>
<body>
<div>{{$author}}</div>
<div>{{$name}}</div>
<div>Внесите коррективы и нажмите "Дописать"</div>
<form id="text" method="Post" action="http://mvc/book/{{$id}}/write/save">
	<div>
		<textarea style="width:100%; height:400px" name="text">{{$text}}</textarea>
	</div>
	<div>
		<input type="submit" name="submit" form="text" value="Дописать">
	</div>
	{{ csrf_field() }} 
</form>
</body>
</html>