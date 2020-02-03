<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fontaweasome -->
      <script src="https://kit.fontawesome.com/e369e6f381.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="navbar sticky-top">
    <a class="navbar-brand" href="/home"><img src="./img/logo branco.png" alt="logo Trip Collab"> TRIPCOLLAB</a>
    <div class=" d-flex justify-content-end align-items-center">
        <a class="nav-link d-flex align-items-center" href="#">
        <i class="material-icons mr-2">account_circle</i><span class="mr-5">SAIR</span></a>
        <a class="btn iconeNav mr-3 p-0" href="aba_menu.html"><i class="material-icons">menu</i></a>
    </div>
</nav>

@yield('conteudo')

<footer class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">
<a href="/linhaDoTempo" class="fas fa-atlas fa-lg col-2"></a>
<a href="mensagens" class="far fa-comments fa-lg col-2"></a>
<a href="/perfil" class="fas fa-home fa-lg col-2"></a>
<a href="/comunidade" class="fas fa-users fa-lg col-2 ativo"></a>
</footer>
</body>
</html>