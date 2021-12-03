<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon -->
    <link rel="icon" href="/img/covac.webp">
    
    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" >
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/login.css" />
    <link rel="stylesheet" type="text/css" href="/css/styles.css" />

    <!-- Bootstrap Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>COVAC | Login Page</title>

</head>
<body class="text-center bg-light">

    <main class="form-signin">
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                    {{ session('loginError') }}
            </div>
        @endif
        <form action="{{ route('login')}}" method="POST" >
            @csrf
            <img class=" mb-4" src="/img/COVAC Logo T.png" alt="" width="200">
            <h2 class="h3 mb-3 fw-normal">User Log in</h2>
            <label for="username" class="visually-hidden">{{ __('Username') }}</label>
            <div>
                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <label for="password" class="visually-hidden">{{ __('Password') }}</label>
            <div>
                <input  type="password" placeholder="Password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-md-6 offset-md-3 my-2">
                    <div class="form-check">
                    </div>
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-danger mb-3" type="submit">{{ __('Login') }}</button>
            <a href="/"><button class="w-100 btn btn-lg btn-outline-secondary mb-5" type="button">Back to Main Page</button></a>
            <p>Don't have an account yet? <b> <br> <a href="/"> Take me back to home </a></b></p>
            <div class="copyright text-center pt-5 pb-2">
                &copy; 2021 Copyright <strong>COVAC.com</strong>.
            </div>
        </form>
    </main>
</body>
</html>

