<!DOCTYPE html>
<html lang=""pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <!-- Icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Css -->
    <link href="{{ URL::asset('css/cadastro-login.css')}}" rel="stylesheet">

    <title>Login</title>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="aba_home.html"><img src="./img/logo.png" alt="logo TripCollab"> TRIPCOLLAB</a>
        <a class="btn iconeNav" href="#"><i class="icone material-icons md-light">menu</i></a>

    </nav>
    <div class="container">
        <section class="mt-4 mb-4">
            <img class="ml-3 mr-3" src="./img/viajando.png" alt="pessoa c/ mala">
            <h3 class="text-center">Bem-vindo Novamente </h3>

            <form form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div class="col-md-4 mb-3">
                        <label for="email"></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="password"></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Senha">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted text-right">Esqueceu sua senha?</small>
                    </div>
                </div>
                <div class="align-self-center">
                    <button type="submit" class="btn-cadastre btn-lg p-2 m-2 shadow rounded">{{ __('Login') }}</button>
                    <h5>Ainda não tem cadastro?<a href="cadastro.html">Cadastre-se</a> </h5>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
