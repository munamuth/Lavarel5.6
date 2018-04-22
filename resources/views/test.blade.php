<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="/admin/admin" method="post">
		{{csrf_field()}}
		<input type="file" name="name">
		<button>Save</button>
	</form>
</body>
</html>