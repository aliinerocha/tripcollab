@extends('layout.template')

@section('titulo')
    Criar novo Grupo de Viagem
@endsection

@section('conteudo') 
    <!-- BANNER -->
    <main class="mb-3">
        <img src="img\ilhas_card.jpg" class="img-fluid banner-img" alt="banner">
        </div>
    </main>

    <!-- NOME E MEMBROS -->

    <section class="bg-light pb-4 mb-3">
        <div class="container mb-4">
            <h1>Ilhas paradisíacas</h1>
        </div>

        <div class="container mb-4">
            <img src="./img/group.png" style="width: 45%;height:45%">
            <h6 class="ml-2">458 membros</h6>
            <span class="ml-2"><a href="comunidadesEViagens" class="text-muted link-detalhes">Participar</a></span>
        </div>
    
    <!-- NOME E MEMBROS -->

        <div class="container mb-4">
            <h5>Quem somos?</h5>

            <div>
                Somos uma comunidade dedicada a discutir qualquer coisa relacionada a ilhas paradisíacas e belas praias!
                Aqui você encontrará as melhores dicas de locais para viajar, as dicas culturais e curiosidades sobre cada praia
                e resort!
            </div>
        </div>

        <!-- VIAGENS REALIZADAS -->

        <div class="container mb-4">
            <h5>Viagens realizadas</h5>
        </div>

        <div id="comunidade-slider" class="carousel slide container" data-ride="carousel">
            <div class="carousel-inner">

                <!-- CARD VIAGEM 1 -->
                <div class="carousel-item active">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="card-header border-0 text-center">
                            <span>Cancún</span>
                        </div>
                        <img src="./img/cancun.jpeg" class="card-img-top rounded-0"
                            style="max-height: 160px; object-fit: cover;" alt="Cancún">
                        <div class="card-body d-flex justify-content-between">
                            <div class="texto d-flex justify-content-start align-items-center ">
                                <h6 class="mr-2 mb-0">Março de 2020</h6>
                            </div>
                            <div class="botao">
                                <a href="#" class="botao btn btn-primary float-right border-0">Histórico</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD VIAGEM 2 -->
                <div class="carousel-item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="card-header border-0 text-center">
                            <span>Bora Bora</span>
                        </div>
                        <img src="./img/borabora.jpg" class="card-img-top rounded-0"
                            style="max-height: 160px; object-fit: cover;" alt="Bora Bora">
                        <div class="card-body d-flex justify-content-between">
                            <div class="texto d-flex justify-content-start align-items-center ">
                                <h6 class="mr-2 mb-0">Abril de 2020</h6>
                            </div>
                            <div class="botao">
                                <a href="#" class="botao btn btn-primary float-right border-0">Histórico</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD VIAGEM 3 -->
                <div class="carousel-item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="card-header border-0 text-center">
                            <span>Havana</span>
                        </div>
                        <img src="./img/havana.jpeg" class="card-img-top rounded-0"
                            style="max-height: 160px; object-fit: cover;" alt="Havana">
                        <div class="card-body d-flex justify-content-between">
                            <div class="texto d-flex justify-content-start align-items-center ">
                                <h6 class="mr-2 mb-0">Maio de 2020</h6>
                            </div>
                            <div class="botao">
                                <a href="#" class="botao btn btn-primary float-right border-0">Histórico</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FÓRUM -->

    <section class="bg-light pt-2 pb-2">
        <div class="container mb-4">
            <h5>Fórum</h5>
        </div>
        <div>
            <div>
                <div class="input-group mx-1">
                    <input type="text" class="form-control border-0" placeholder="Buscar">
                    <div class="input-group-append">
                        <span class="input-group-text border-0">
                            <i class="material-icons">search</i>
                        </span>
                    </div>
                </div>
                <div class="mx-1 my-2">
                    <a href="#" class="botao btn btn-primary border-0">Novo tópico</a>
                    <a href="#" class="botao btn btn-primary border-0">Ver +</a>
                </div>
            </div>
        </div>
    </section>

    <!-- TÓPICO 1 -->
    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-md-8">
            <div class="card-body px-0">

                <div class="d-flex">
                    <div class="d-flex flex-column p-0 align-items-center justify-content-end">
                        <img class="foto-perfil rounded-circle display-column" src="./img/perfil.1.jpg" alt="foto de perfil do membro"> 
                        <div class="small">Angelina</div>
                    </div>

                    <div class="d-flex flex-column w-100 ml-2">
                        <h5 class="card-title mb-auto">Quais praias mais impressionaram vocês?</h5>
                        <div class="w-100 small d-flex align-items-end flex-column"><span>12 de abril de 2020</span></div>
                    </div>
                </div>

                <div class="mt-2">
                        Oi pessoal! Criando esse tópico para saber quais praias mais foram impressionantes em suas viagens!
                </div>

                <div class="d-flex w-100 mt-3 justify-content-between">
                    <div class="d-flex small">
                        <span class="d-flex mr-2 align-items-center">
                            <i class="material-icons">
                                thumb_up
                            </i>
                            <span class="align-items-center">
                                142
                            </span>
                        </span>
                        <span class="d-flex align-items-center">
                            <i class="material-icons mr-1">
                                thumb_down
                            </i>
                            <span class="align-items-center">
                                2
                            </span>
                        </span>
                    </div>
                    <div>
                        <a href="" class="text-muted link-detalhes">
                            Responder
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TÓPICO 2 -->

    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-md-8">
            <div class="card-body px-0">
    
                 <div class="d-flex">
                    <div class="d-flex flex-column p-0 align-items-center justify-content-end">
                        <img class="foto-perfil rounded-circle display-column" src="./img/perfil.4.jpg" alt="foto de perfil do membro"> 
                        <div class="small">Fernando</div>
                    </div>
    
                    <div class="d-flex flex-column w-100 ml-2">
                        <h5 class="card-title mb-auto">Momentos mais engraçados!</h5>
                        <div class="w-100 small d-flex align-items-end flex-column">1 de abril de 2020</div>
                        </div>
                    </div>
    
                    <div class="mt-2">
                        Vamos compartilhar nossos momentos engraçados durante as viagens!
                    </div>
    
                    <div class="d-flex w-100 mt-3 justify-content-between">
                            <div class="d-flex small">
                                <span class="d-flex mr-2 align-items-center">
                                    <i class="material-icons">
                                        thumb_up
                                    </i>
                                    <span class="align-items-center">
                                        182
                                    </span>
                                </span>
                                <span class="d-flex align-items-center">
                                    <i class="material-icons mr-1">
                                        thumb_down
                                    </i>
                                    <span class="align-items-center">
                                        6
                                    </span>
                                </span>
                            </div>
                            <div>
                                <a href="" class="text-muted link-detalhes">
                                    Responder
                                </a>
                            </div>
                        </div>
    
                </div>
            </div>
        </section>
@endsection