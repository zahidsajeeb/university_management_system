<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login-panel/css/style.css">
</head>

<body>
<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">University Management System</h2>

    <form class="login-container" method="POST" action="{{ route('login') }}">
        @csrf
        <p>
            {{--<input type="email" placeholder="Email">--}}
            <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </p>
        <p>
            {{--<input type="password" placeholder="Password">--}}
            <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </p>
        <p>
            <input type="submit" value="Log in">
            {{--<button type="submit" class="btn btn-primary">Login</button>--}}
        </p>
    </form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
