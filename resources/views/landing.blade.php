@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{url('css/stylesLandingPage.css')}}">
@endsection

@section('titulo')
    TripCollab
@endsection

@section('conteudo')

<!-- banner -->

<main class="main mb-3">
    <img src="./img/home/banner4final.jpg" class="img-fluid banner-img" alt="imagem banner">
    <div class="over">
        <div class="ml-4 mt-4 text-white">
        <h4 class="mb-4">Queremos viver momentos memoráveis com você!</h4><br>
        <h5>Bora viajar juntos?</strong><h5>
        <button class="mt-1 btn botao"><a href="/register" style="text-decoration: none; color:inherit">CADASTRE-SE</a></button> 
        </div>
    </div>

</main>


<!-- Conteudo -->

<div class="mt-5 mb-5">
    <h2 class="text-center mb-5">Saiba porquê sua viagem começa aqui</h2>

        <div class="card-group mt-5">

                <div class="card card-conteudo border-0">
                    <div class="subtitulo text-center">
                        <i class="far fa-user-circle fa-2x" style="color: #1d6ab0"></i>
                    </div>
                    <div class="card-body card-text text-center">
                        <p> <h5 class="text-left ml-4 mr-4 ml-md-0 mr-md-0">Crie seu perfil e conecte-se com pessoas do mundo todo com interesses em comum.</h5> </p>
                    </div>
                </div>

                <div class="card card-conteudo border-0">
                    <div class="subtitulo text-center">
                        <i class="far fa-compass fa-2x" style="color: #1d6ab0"></i>
                    </div>
                    <div class="card-body card-text text-center">
                            <p> <h5 class="text-left ml-4 mr-4 ml-md-0 mr-md-0" >Encontre os destinos de seu interesse, pessoas com interesses em comum e comece a partilhar experiências.</h5> </p>
                    </div>
                </div>

                <div class="card card-conteudo border-0">
                    <div class="subtitulo text-center">
                        <i class="fas fa-users fa-2x" style="color: #1d6ab0"></i>
                    </div>
                    <div class="card-body card-text text-center">
                        <p><h5 class="text-left ml-4 mr-4 ml-md-0 mr-md-0" >Crie, organize ou participe de grupos de viagem com amigos, familiares ou ainda conheça uma galera totalmente.</h5></p>
                    </div>
                </div>

                <div class="card card-conteudo border-0">
                    <div class="subtitulo text-center">
                        <i class="fas fa-flag fa-2x" style="color: #1d6ab0"></i>
                    </div>
                    <div class="card-body card-text text-center">
                            <p><h5 class="text-left ml-4 mr-4 ml-md-0 mr-md-0" >Compartilhe com toda a nossa comunidade as suas conquistas de viagem.</h5></p>
                    </div>
                </div>
        </div>
</div>





<!-- GRUPOS MAIS POPULARES -->
<section class="grupos-populares pt-4 pb-5" >

        <div class="container mb-5">
            <h2 class="text-center pb-3">Grupos mais populares</h2>
            <h5 class="text-left text-md-center ml-4 mr-4 ml-md-0 mr-md-0" >Encontre e seja encontrada por pessoas com interesses em comum para planejar a viagem dos seus sonhos!</h5>
        </div>

        <div class="d-flex flex-column  align-items-center flex-md-row justify-content-md-around">
            <div class="card border-0" style="width: 18rem;">
                <div class="card-header border-0 text-center">
                    <span>Sonhos na Disney</span>
                </div>
                <img src="./img/disney_card.jpg" style="max-height: 160px; object-fit: cover;" alt="Foto do Grupo">
                <div class="card-body d-flex justify-content-between">
                    <div class="texto d-flex justify-content-start align-items-center ">
                        <h5 class="mr-2 mb-0">700</h5>
                        <small>membros</small>
                    </div>
                        <button class="botao btn  float-right">Participar</button>
                </div>
            </div>

            <div class="card border-0 mt-3 mt-md-0" style="width: 18rem;">
                <div class="card-header border-0 text-center">
                    <span>Sonhos na Disney</span>
                </div>
                <img src="./img/vegas_card.jpg" style="max-height: 160px; object-fit: cover;" alt="Foto do Grupo">
                <div class="card-body d-flex justify-content-between">
                    <div class="texto d-flex justify-content-start align-items-center ">
                        <h5 class="mr-2 mb-0">500</h5>
                        <small>membros</small>
                    </div>
                    <button class="botao btn  float-right">Participar</button>
                </div>
            </div>

            <div class="card border-0 mt-3 mt-md-0" style="width: 18rem;">
                <div class="card-header border-0 text-center">
                    <span>Ilha Bela</span>
                </div>
                <img src="./img/ilha-bela.jpeg" style="max-height: 160px; object-fit: cover;" alt="Foto do Grupo">
                <div class="card-body d-flex justify-content-between">
                    <div class="texto d-flex justify-content-start align-items-center ">
                        <h5 class="mr-2 mb-0">370</h5>
                        <small>membros</small>
                    </div>
                    <button class="botao btn  float-right">Participar</button>
                </div>
            </div>
    </div>
        
</section>

@endsection
