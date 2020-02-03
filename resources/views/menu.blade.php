<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link rel="icon" href="./img/icone_logo.png">
    <link rel="icon" type="image/png" href="./img/logo azul.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- meu css -->
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <!-- NAV BAR -->
    <nav class="navbar sticky-top">
            <a class="navbar-brand" href="aba_home.html"><img src="./img/logo branco.png" alt="logo Trip Collab"> TRIP COLLAB</a>
            <div class=" d-flex justify-content-end align-items-center">
                <a class="nav-link d-flex align-items-center" href="#"><i
                        class="material-icons mr-2">account_circle</i><span class="mr-5">SAIR</span></a>
                <a class="btn iconeNav mr-3 ml-3 p-0" href="javascript:history.back()"><i class="material-icons">close</i></a>
            </div>
        </nav>

       <!-- MENU -->
    <menu class="container ml-2">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Saiba mais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hotéis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Passagens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Agências de Turismo</a>
            </li>
            <li class="divider">
                <hr>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Termos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Política de privacidade de dados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contate-nos</a>
            </li>
            <li class="divider">
                <hr>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons mr-2">language</i> <span>Idioma</span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">PT-BR</a>
                    <a class="dropdown-item" href="#">IN-EUA</a>
                </div>
            </li>
        </ul>
    </menu>
</body>
</html>