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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/register.css" />

    <title>COVAC | Patient Registration Form</title>

</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="mb-4" src="img/COVAC Logo T.png" alt="" width="200">
                <h2>Patient Registration Form</h2>
            </div>

            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="mb-3">Please Fill the Registration Form</h4><br>
                    <form class="needs-validation" novalidate="" method="POST" action="{{ route('register') }}">
                        @csrf

                        <input type="hidden" id="role" name="role" value="patient">
                        <div class="row g-3">
                            {{-- Username --}}
                            <div class="col-12">
                                <label for="username" class="form-label">{{ __('Username') }}</label>
                                <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="ex: User123" value="{{ old('username') }}" required  autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- First Name --}}
                            <div class="col-sm-6">
                                <label for="firstName">{{ __('First Name') }}</label>
                                <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" placeholder="ex: John" value="{{ old('firstName') }}" required>
                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Last Name --}}
                            <div class="col-sm-6">
                                <label for="lastName">{{ __('Last Name') }}</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="ex: Douglas" value="{{ old('lastName') }}" required>
                            </div>
                            {{-- Identification Card ID --}}
                            <div class="col-12">
                                <label for="ICPassport" class="form-label">{{ __('Identification Card ID Number') }}</label>
                                <input type="ICPassport" class="form-control @error('ICPassport') is-invalid @enderror" id="ICPassport" name="ICPassport" placeholder="ex: 527230400XXXXXXX" value="{{ old('ICPassport') }}" required>
                                @error('ICPassport')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Email --}}
                            <div class="col-12">
                                <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="youremail@example.com" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Password --}}
                            <div class="col-12">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Confirm Password --}}
                            <div class="col-12">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-danger btn-lg" type="submit">{{ __('Register Now') }}</button>
                        <br><br>
                        <a href="/home">
                            <button class="w-100 btn btn-outline-secondary btn-lg"
                                type="button">{{ __('Back to Main Page') }}</button>
                        </a>
                        <p class="text-center mt-5">Already have account? <b><a href="/login">Login Now</a></b>
                        </p>
                    </form>
                </div>
            </div>
        </main>

        <div class="copyright text-center pt-5 pb-2">
            &copy; 2021 Copyright <strong>COVAC.com</strong>.
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    
    <!-- JQuerry -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

</body>

</html>
