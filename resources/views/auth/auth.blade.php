<!DOCTYPE html> 
<html> 
<head> 
    <title>Register</title> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head> 
<body> 
    <div class="container"> 
        <h1>Register</h1> 
        <form action="{{ route('register') }}" method="POST"> 
            @csrf 
            <div> 
                <label for="name">Name:</label> 
                <input type="text" name="name" id="name" value="{{ 
old('name') }}"> 
                @error('name') 
                    <div>{{ $message }}</div> 
                @enderror 
            </div> 
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
                <label for="password_confirmation">Confirm 
Password:</label> 
                <input type="password" name="password_confirmation" 
id="password_confirmation"> 
                @error('password_confirmation') 
                    <div>{{ $message }}</div> 
                @enderror 
            </div> 
            <div> 
                <button type="submit">Register</button> 
            </div> 
        </form> 
    </div> 
</body> 
</html>