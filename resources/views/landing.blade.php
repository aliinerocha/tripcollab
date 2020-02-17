@extends('layouts.template')

@section('titulo')
    TripCollab
@endsection

@section('conteudo')

<!-- banner -->

<main class="main  mb-3">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner banner-img">
            <div class="carousel-item active ">
                <img src="./img/home/banner3.jpg" class="img-fluid d-block w-100" alt="Responsive image">
            </div>
            <div class="carousel-item ">
                <img src="./img/test03.jpg"  class="img-fluid d-block w-100" alt="Responsive image">
            </div>
            <div class="carousel-item">
                <img src="./img/home/banner2.jpg"  class="img-fluid d-block w-100" alt="Responsive image">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
    </div>

    <div class="over-hit over-banner">
            <div class="titulo">
                <h3 class="ml-4">Queremos viver momentos memoráveis com você!<br><br>
                        <strong class="subtitulo ml-5 mb-0">Bora viajar juntos?</strong></h3>
            </div>
            <div>
                    <button class="btn-cadastro btn btn-primary "> <a href="/user/cadastro">Cadastre-se</a> </button>

            </div>
    </div>

</main>



<!-- Conteudo -->

<div class="container-fluid card " >
    <h2 class="text-center">Saiba porquê sua viagem começa aqui</h2>
    <hr>
    <div class="row justify-content-center align-items-center">
        <!--Perfil-->
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="subtitulo text-center">
                    <a href="/user/perfil" class="btn-floating btn-blue "><i class="far fa-user-circle fa-2x fa-lg"></i> </a>
            </div>
            <div class="card-body text-center">
                    <p> <h5 class="text-center " >Criar um perfil com seus interesses de viagem e compartilhe experiencias com a nossa comunidade</h5> </p>
            </div>
        </div>
        <!--Perfil-->
        <hr>
            <!--destinos-->
        <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="subtitulo text-center">
                <a href="/trip/detalhesDeViagem"  class="btn-floating btn-blue"><i class="far fa-compass fa-2x fa-lg"></i></a>
            </div>
            <div class="card-body text-center mr-4">
                <h5 class="text-center " >Encontre os destinos de seu interesse com as melhores oportunidades oferecidas pelos nossos parceiros.</h5>
            </div>
        </div>
            <!--destinos-->
            <hr>
            <!--comunidade-->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="subtitulo text-center">
                <a href="/group/grupoComunidade" class="btn-floating btn-blue btn-lg btn-default d-flex flex-column align-items-center"><i class="fas fa-users "></i></a>
            </div>
            <div class="card-body text-center mr-4">
                <h5 class="text-center" >Crie, organize ou participe de grupos de viagem com amigos, familiares ou ainda conheça uma galera totalmente nova e compatível com seus interesses.</h5>

            </div>
        </div>
            <!--comunidade-->
        <hr>
        <!--metas-->
        <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="subtitulo text-center">
                <a href="/trip/criarGrupoDeViagem"  class="btn-floating btn-blue btn-lg btn-default d-flex flex-column align-items-center"><i class="fas fa-flag "></i></a>
            </div>
            <div class="card-body text-center mr-4">
                <h5 class="text-center" >Crie, organize ou participe de grupos de viagem com amigos, familiares ou ainda conheça uma galera totalmente nova e compatível com seus interesses.</h5>

            </div>
        </div>
        <!--metas-->
        <hr>
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

    <div id="carouselExampleControls"  class="carousel slide container grupo-slide" data-ride="carousel">
            <div class="carousel-inner ml-5">
                <!--primeiro slide grupo-->
                <div class="carousel-item active">
                    <div class="card border-0" style="width: 18rem;">
                        <!-- card-header -->
                        <div class="card-header border-0 text-center">
                            <span>Sonhos na Disney</span>
                        </div>
                        <!--Card image-->
                        <img src="./img/disney_card.jpg" class="card-img-top rounded-0 img-fluid d-block w-100 " style="max-height: 160px; object-fit: cover;" alt="Disney">
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <div class="texto d-flex justify-content-start align-items-center ">
                                <h5 class="mr-2 mb-0">250</h5>
                                <smaller>membros</smaller>
                            </div>
                            <!--Text-->
                            <p class="card-text">Comunidade dedicada ao compartilhamento dos melores roteiros nos parques da Disney.</p>
                            <a class="btn btn-primary">Participar</a>
                        </div>
                    </div>
                </div>
                <!--primeiro slide grupo-->

                <!--segundo slide grupo-->
                <div class="carousel-item ">
                    <div class="card border-0" style="width: 18rem;">
                        <!-- card-header -->
                        <div class="card-header border-0 text-center">
                            <span>Las Vegas</span>
                        </div>
                        <!--Card image-->
                        <img src="./img/vegas_card.jpg" class="card-img-top rounded-0" style="max-height: 160px; object-fit: cover;" alt="Disney">
                            <!--Card content-->
                            <div class="card-body">
                            <!--Title-->
                            <div class="texto d-flex justify-content-start align-items-center ">
                                <h5 class="mr-2 mb-0">250</h5>
                                <smaller>membros</smaller>
                            </div>
                            <!--Text-->
                            <p class="card-text">Dicas para aproveitar ao maximo a viagem e conhecer os melhores cassinos de Vegas. </p>
                            <a class="btn btn-primary">Participar</a>
                        </div>
                    </div>
                </div>
                <!--segundo slide grupo-->
                <!--terceiro slide grupo-->
                <div class="carousel-item ">
                    <div class="card border-0" style="width: 18rem;">
                        <!-- card-header -->
                        <div class="card-header border-0 text-center">
                            <span>Ilha Bela</span>
                        </div>
                        <!--Card image-->
                        <img src="./img/ilha-bela.jpeg"  class="card-img-top rounded-0" style="max-height: 160px; object-fit: cover;" alt="Disney">
                            <!--Card content-->
                            <div class="card-body">
                            <!--Title-->
                            <div class="texto d-flex justify-content-start align-items-center ">
                                <h5 class="mr-2 mb-0">250</h5>
                                <smaller>membros</smaller>
                            </div>
                            <!--Text-->
                            <p class="card-text">Comunidade dedicada a compartilhar destinos maravilhosos e pouco conhecidos.</p>
                            <a class="btn btn-primary">Participar</a>
                        </div>
                    </div>
                </div>
                <!--terceiro slide grupo-->
                <!--quarto slide grupo-->
                <div class="carousel-item">
                    <div class="card border-0" style="width: 18rem;">
                        <!-- card-header -->
                        <div class="card-header border-0 text-center">
                            <span>Ilhas Paradisiacas</span>
                        </div>
                        <!--Card image-->
                        <img src="./img/ilhas_card.jpg"  class="card-img-top rounded-0" style="max-height: 160px; object-fit: cover;" alt="Disney">
                            <!--Card content-->
                            <div class="card-body">
                            <!--Title-->
                            <div class="texto d-flex justify-content-start align-items-center ">
                                <h5 class="mr-2 mb-0">250</h5>
                                <smaller>membros</smaller>
                            </div>
                            <!--Text-->
                            <p class="card-text">Comunidade dedicada a compartilhar destinos maravilhos mais pouco conhecidos.</p>
                            <a class="btn btn-primary">Participar</a>
                        </div>
                    </div>
                </div>
                <!--quarto slide grupo-->
                <!--quinto slide grupo-->
                <div class="carousel-item">
                    <div class="card border-0" style="width: 18rem;">
                        <!-- card-header -->
                        <div class="card-header border-0 text-center">
                            <span>Destinos Familiares</span>
                        </div>
                        <!--Card image-->
                        <img src="./img/home/familia.jpg"  class="card-img-top rounded-0" style="max-height: 160px; object-fit: cover;" alt="Disney">
                            <!--Card content-->
                            <div class="card-body">
                            <!--Title-->
                            <div class="texto d-flex justify-content-start align-items-center ">
                                <h5 class="mr-2 mb-0">250</h5>
                                <smaller>membros</smaller>
                            </div>
                            <!--Text-->
                            <p class="card-text">Comunidades dedicada a compartilhar dicas de viagens para grupos familiares com crianças.</p>
                            <a class="btn btn-primary">Participar</a>
                        </div>
                    </div>
                </div>
                <!--quinto slide grupo-->
            </div>

        <!-- controls -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!-- Carousel CARDS grupos mais populares -->


<!-- facebook instan twiter-->

<div class="redes-sociais text-center py-4 mb-60">
    <!--Facebook-->
    <a rel="nofollow" target="_blank" id="footer-link-facebook" href="https://www.facebook.com/mdbootstrap">
        <i class="fab fa-facebook-f white-text mr-2"> </i>
        </a>
        <!--Twitter-->
        <a rel="nofollow" target="_blank" id="footer-link-twitter" href="https://twitter.com/MDBootstrap">
        <i class="fab fa-twitter white-text  mr-2"> </i>
        </a>

    <!--Youtube-->
    <a rel="nofollow" target="_blank" id="footer-link-google" href="https://www.gmail.com">
        <i class="fab fa-x8 fa-google white-text mr-2"> </i>
    </a>
</div>
<!-- facebook instan twiter-->
@endsection
