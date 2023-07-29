<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/user/register.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('register') }}" id="form-register">
        @csrf
            <div class="wrapper">
        <div class="title">
            Enregistrement
        </div>
        <div class="form">
            <div class="col-md-12 mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                <small class="text-danger fw-bold" id="error-register-firstname"></small>
            </div>
            <div class="col-md-12 mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
                <small class="text-danger fw-bold" id="error-register-lastname"></small>
            </div>
            <div class="col-md-12 mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required autocomplete="password">
                <small class="text-danger fw-bold" id="error-register-password"></small>
            </div>
            <div class="col-md-12 mb-3">
                <label for="password-confirm" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password-confirm" name="password-confirm" value="{{ old('password-confirm') }}" required autocomplete="password-confirm">
                <small class="text-danger fw-bold" id="error-register-password-confirm"></small>
            </div>
            <div class="col-md-12 mb-3">
                <label for="sexe" class="form-label">Sexe</label>
                <div class="custom-select">
                    <select name="sexe" id="sexe" class="form-select" required>
                      <option value="">Select</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Others</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
                <small class="text-danger fw-bold" id="error-register-email"></small>
            </div> 
            <div class="col-md-12 mb-3">
                <label for="number" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="number" name="number" required>
                <small class="text-danger fw-bold" id="error-register-number"></small>
            </div>
            <div class="col-md-12 mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
                <small class="text-danger fw-bold" id="error-register-address"></small>
        </div>
        <div class="col-md-12 mb-3">
            <label for="ages" class="form-label">Ages</label>
            <input type="text" class="form-control" id="ages" name="ages" required>
            <small class="text-danger fw-bold" id="error-register-ages"></small>
        </div>
        <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agreeTerms">
                <label class="form-check-label" for="agreeTerms">Agreed to terms and conditions</label><br>
                <small class="text-danger fw-bold" id="error-register-agreeTerms"></small>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button" id="register-user">Enregistrer</button>
        </div>
    </div>
</form>
@include('script')
</body>
</html>