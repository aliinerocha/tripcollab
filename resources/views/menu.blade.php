@extends('layout.template')

@section('titulo')
    Menu
@endsection

@section('conteudo')
       <!-- MENU -->
    <menu class="container ml-2">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
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
@endsection