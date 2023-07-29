<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/user/login.css') }}">
</head>

<body>
    <section>
        <div class="login-box">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @error('email')

                <div class="alert alert-danger text-center" role="alert">
                   {{ $message }}
                </div>
                   
               @enderror
       
               @error('password')
       
                <div class="alert alert-danger text-center" role="alert">
                   {{ $message }}
                </div>
                   
               @enderror
       
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon"><i class="fa-sharp fa-solid fa-id-card"></i></i></span>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" id="password" name="password" required autocomplete="current-password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label> <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</label>
                    <a href="#">Forgot Password? </a>
                </div>
                <button type="submit">Login</button>
                <div class="register-link">
                    <p>Don't have a account? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>