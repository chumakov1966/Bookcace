<!DOCTYPE html>
<html>
<head>
<title>Дописать {{$name}}</title>
</head>
<body>
<div>{{$author}}</div>
<div>{{$name}}</div>
<form id="text" action="Book.php"  >
	<div>
		<textarea style="width:100%; height:500px;" form="text" method="post" name="text" type="text">{{$text}}</textarea>
	</div>
	<div>
		<input type="submit" name="submit" form="text" value="Дописать">
	</div>
	
</form>
</body>
</html>