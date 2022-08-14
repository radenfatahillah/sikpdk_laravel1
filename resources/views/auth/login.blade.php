<!DOCTYPE html>
<html>

<head>
    <title>SIKPDK Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('loginku/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="{{ asset('loginku/img/wave.png')}}">
    <div class="container">
        <div class="img">
            <img src="{{ asset('loginku/img/bg.svg')}}">
        </div>
        <div class="login-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img src="{{ asset('backend/assets/images/Logo Kab Sambas.png')}}">
                <h4 class="title">SISTEM INFORMASI KEPENDUDUKAN<p>DAN PROFIL DESA KECAMATAN</h4>
                <h3 class="title">KECAMATAN TELUK KERAMAT</h3>
                <h3 class="title">KABUPATEN SAMBAS</h3>
                <p><br>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="col">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="col">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>

                </div>
                <!-- <a href="#">Forgot Password?</a> -->
                <button type="submit" class="btn btn-success">
                    {{ __('Login') }}
                </button>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>