@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{url('css/stylesLandingPage.css')}}">
@endsection

@section('titulo')
    TripCollab
@endsection

@section('conteudo')

<!-- banner -->

<main class="main  mb-3">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner banner-img">
            <div class="carousel-item active">
                <img src="./img/home/banner3.jpg" class="img-fluid d-block w-100" alt="Responsive image">
            </div>
            <!-- <div class="carousel-item">
                <img src="./img/test03.jpg" class="img-fluid d-block w-100" alt="Responsive image">
            </div>
            <div class="carousel-item">
                <img src="./img/home/banner2.jpg" class="img-fluid d-block w-100" alt="Responsive image">
            </div>      -->
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>            
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon"></span>            
            </a> -->
        </div>
    </div>

    <div class="over-hit over-banner">
        <div class="titulo">
            <h3 class="ml-4">Queremos viver momentos memoráveis com você!<br>
                <strong class="subtitulo-viajar ml-2 mb-0">Bora viajar juntos?</strong>
            </h3>
        </div>
        <button class="btn-cadastro btn btn-primary"><a href="/register">CADASTRE-SE</a></button>       
    </div>      

</main>

<!-- Conteudo -->
<h2 class="text-center mb-5">Saiba porquê sua viagem começa aqui</h2>
<div class="card-group-conteudo mt-5">

        <div class="card-group">
             <!--Perfil-->
                <div class="card card-conteudo">
                    <div class="subtitulo text-center">
                        <i class="far fa-user-circle fa-2x "></i> </a>
                    </div>
                    <div class="card-body card-text text-center">
                        <p> <h5 class="text-center " >Criar um perfil com seus interesses de viagem e compartilhe experiencias com a nossa comunidade</h5> </p>
                    </div>
                </div>
             <!--Perfil-->
             <!--destinos-->
                <div class="card card-conteudo">
                    <div class="subtitulo text-center">
                        <i class="far fa-compass fa-2x "></i>
                    </div>
                    <div class="card-body card-text text-center">
                            <p> <h5 class="text-center " >Encontre os destinos de seu interesse com as melhores oportunidades oferecidas pelos nossos parceiros.</h5> </p>
                    </div>
                </div>
             <!--destinos-->
             <!--comunidade-->
                <div class="card card-conteudo">
                    <div class="subtitulo text-center">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="card-body card-text text-center">
                        <p><h5 class="text-center" >Crie, organize ou participe de grupos de viagem com amigos, familiares ou ainda conheça uma galera totalmente nova e compatível com seus interesses.</h5></p>
                    </div>
                </div>
             <!--comunidade-->

            <!--metas-->
                <div class="card card-conteudo">
                    <div class="subtitulo text-center">
                        <i class="fas fa-flag fa-2x"></i>
                    </div>
                    <div class="card-body card-text text-center">
                            <p><h5 class="text-center" >Crie, organize ou participe de grupos de viagem com amigos, familiares ou ainda conheça uma galera totalmente nova e compatível com seus interesses.</h5></p>
                    </div>
                </div>
            <!--metas-->
        </div>
        
   
</div>





<!-- GRUPOS MAIS POPULARES -->
<section class="grupos-populares bg-light pt-4 pb-4 mb-3">
    <!--Grupos info-->
    <div class="over-hit">
        <div class="container mb-4">
            <h2 class="text-center my-3 ">Grupos mais populares</h2>
        </div>
        <div class="subtitulo text-center">
            <h4 class="text-center my-5" >Aqui você pode encontrar e ser encontrada pelas comunidades certas e curtir sua viagem dos sonhos!.</h4>
        </div>
    </div>
    <!--Grupos info-->

    <!-- cards -->

    <!-- Card deck -->
    <div class="card-deck group-cards">

        <!-- Card 1 -->
        <div class="card mb-4">
            <div class="card-header border-0 text-center">
                <span>Sonhos na Disney</span>
            </div>
            <!--Card image-->
            <div class="view overlay">
            <img src="./img/disney_card.jpg" class="card-img-top rounded-0 img-fluid d-block w-100 "  style="max-height: 160px; object-fit: cover;" alt="Disney">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
            </div>

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <div class="texto d-flex justify-content-start align-items-center ">
                    <h5 class="mr-2 mb-0">250</h5>
                    <small>membros</small>
                </div>
                <!--Text-->
                <p class="card-text">Comunidade dedicada ao compartilhamento dos melores roteiros nos parques da Disney.</p>
                <a class="btn botao">Participar</a>
            </div>

        </div>
        <!-- Card 1-->
        <!-- Card 2-->
        <div class="card mb-4">
            <div class="card-header border-0 text-center">
            <span>Las Vegas</span>
            </div>
            <!--Card image-->
            <div class="view overlay">
            <img src="./img/vegas_card.jpg" class="card-img-top rounded-0 img-fluid d-block w-100 " style="max-height: 160px; object-fit: cover;" alt="Disney">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
            </div>

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <div class="texto d-flex justify-content-start align-items-center ">
                    <h5 class="mr-2 mb-0">100</h5>
                    <small>membros</small>
                </div>
            <!--Text-->
            <p class="card-text">Dicas para aproveitar ao maximo a viagem e conhecer os melhores cassinos de Vegas. </p>
            <a class="btn botao">Participar</a>
                            
            </div>

        </div>
        <!-- Card 2-->

        <!-- Card 3-->
        <div class="card mb-4">
            <div class="card-header border-0 text-center">
                <span>Ilha Bela</span>
            </div>
            <!--Card image-->
            <div class="view overlay">
            <img src="./img/ilha-bela.jpeg"  class="card-img-top rounded-0 img-fluid d-block w-100 "  style="max-height: 160px; object-fit: cover;" alt="Disney">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
            </div>

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <div class="texto d-flex justify-content-start align-items-center ">
                    <h5 class="mr-2 mb-0">70</h5>
                    <small>membros</small>
                </div>
            <!--Text-->
            <!--Text-->
            <p class="card-text">Comunidade dedicada a compartilhar destinos maravilhosos e pouco conhecidos.</p>
                <a class="btn botao">Participar</a>                                         
            </div>

        </div>
        <!-- Card 3-->
        

    </div>
    <!-- Card deck -->


    <!-- Cards -->
    <!--  -->
</section>

<!-- Carousel CARDS grupos mais populares -->

<!-- facebook instan twiter-->

<!-- <div class="redes-sociais text-center py-4 mb-60"> -->
    <!--Facebook-->
    <!-- <a rel="nofollow" target="_blank" id="footer-link-facebook" href="https://www.facebook.com/mdbootstrap">
        <i class="fab fa-facebook-f white-text mr-2"> </i>
        </a> -->
        <!--Twitter-->
        <!-- <a rel="nofollow" target="_blank" id="footer-link-twitter" href="https://twitter.com/MDBootstrap">
        <i class="fab fa-twitter white-text  mr-2"> </i>
        </a> -->

    <!--Youtube-->
    <!-- <a rel="nofollow" target="_blank" id="footer-link-google" href="https://www.gmail.com">
        <i class="fab fa-x8 fa-google white-text mr-2"> </i>
    </a> -->
<!-- </div> -->
<!-- facebook instan twiter-->

@endsection
