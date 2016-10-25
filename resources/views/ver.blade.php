<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ver usuario</title>

	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

</head>
<body>
	<h1>usuario tal</h1>
	<h3>nombre
	{{ $user-> name}}</h3>
	<h3>emal
	{{$user-> email}}</h3>

<a href="{{ url()->previous() }}" class="btn btn-default">Volver</a>
</body>
</html>