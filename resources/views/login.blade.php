<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/Logo.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <div class="login-dark">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="{{ asset('assets/img/logo.png') }}" width="50%"></div>
            
            @if($errors->any())
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                            <a>{{ $error }}</a>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="form-group">
                <input class="form-control" type="text" id="username" name="username" value="{{ old('username') }}"
                    placeholder="Username" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" id="password" name="password" placeholder="Password"
                    required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
        </form>
</body>

</html>