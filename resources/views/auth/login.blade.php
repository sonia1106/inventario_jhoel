<!DOCTYPE html> 
<html> 
<head> 
    <title>Login</title> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head> 
<body> 
    <div class="container"> 
        <h1>Login</h1> 
        <form action="{{ route('login') }}" method="POST"> 
            @csrf 
            <div> 
                <label for="email">Email:</label> 
                <input type="email" name="email" id="email" value="{{ 
old('email') }}"> 
                @error('email') 
                    <div>{{ $message }}</div> 
                @enderror 
            </div> 
            <div> 
                <label for="password">Password:</label> 
                <input type="password" name="password" id="password"> 
                @error('password') 
                    <div>{{ $message }}</div> 
                @enderror 
            </div> 
            <div> 
                <button type="submit">Login</button> 
            </div> 
</form> 
</div> 
</body> 
</html>