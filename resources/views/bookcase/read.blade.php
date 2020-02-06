<!DOCTYPE html>
<html>
<head>
<title>Читаем {{$name}}</title>
</head>
<body>
<div>{{$author}}</div>
<div>{{$name}}</div>
<a href="http://mvc/book/{{$id}}/write">Редактировать</a>
<form method="post"id="text" action="Book.php"  >
	<div>
		<textarea style="width:100%; height:400px;" form="text"  name="text" type="text">{{$text}}</textarea>
	</div>
	<div>
		<input type="submit" name="submit" form="text" value="Дописать">
	</div>
	
</form>
</body>
</html>