<!DOCTYPE html>
<html>
<head>
	<title> Eurosport </title>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
@include('eurosport.headerfirst')
@include('eurosport.header')
<br><br>
<br>
@yield('content')
<br><br>
@include('eurosport.footer')
</body>
</html>
