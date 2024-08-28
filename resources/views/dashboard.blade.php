<!DOCTYPE html> 
<html> 
<head> 
<title>Dashboard</title> 
<link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head> 
<body> 
<div class="container"> 
<h1>Dashboard</h1> 
<p>Welcome, {{ Auth::user()->name }}!</p> 
<a href="{{ route('logout') }}" 
onclick="event.preventDefault(); 
document.getElementById('logout
form').submit();"> 
Logout 
</a> 
<form id="logout-form" action="{{ route('logout') }}" 
method="POST" style="display: none;"> 
@csrf 
</form> 
</div> 
</body> 
</html>