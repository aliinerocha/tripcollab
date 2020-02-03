<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comunidade</title>
    <link rel="icon" href="./img/icone_logo.png">
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
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <!-- NAV SUPERIOR -->
    <nav class="navbar sticky-top">
            <a class="navbar-brand" href="aba_home.html"><img src="./img/logo branco.png" alt="logo Trip Collab"> TRIP COLLAB</a>
            <div class=" d-flex justify-content-end align-items-center">
                <a class="nav-link d-flex align-items-center" href="#"><i
                        class="material-icons mr-2">account_circle</i><span class="mr-5">SAIR</span></a>
                <a class="btn iconeNav mr-3 p-0" href="aba_menu.html"><i class="material-icons">menu</i></a>
            </div>
        </nav>

    <!-- BANNER -->
    <main class="mb-3">
            <img src="img\test03.jpg" class="img-fluid banner-img" alt="banner">
            <h3 class="titulo ml-3">Para onde você </br> quer ir hoje?</h3>
        </div>
    </main>

    <!-- COMUNIDADES -->

    <section class="bg-light pt-4 pb-4 mb-3">
        <div class="container mb-4">
            <h5>Minhas comunidades</h5>
        </div>
    <div class="d-flex">
        <div class=" input-group mb-4 mr-3 col-10">
            <input type="text" class="form-control border-0" placeholder="Buscar">
            <div class="input-group-append">
                <span class="input-group-text border-0"> <i class="material-icons">search</i></span>
            </div>
        </div>
        <a href="#" class="p-0 m-0"> 
            <i class="material-icons" style="color:#CFCFCF; font-size: 40px;">add_box</i>
        </a>
    </div>
        <div id="comunidade-slider" class="carousel slide container" data-ride="carousel">
                <div class="carousel-inner">
                <!-- CARD COMUNIDADES 1 -->
                <div class="carousel-item active">
                        <div class="card border-0" style="width: 18rem;">
                            <div class="card-header border-0 text-center">
                                <span>Sonhos na Disney</span>
                            </div>
                            <img src="./img/disney_card.jpg" class="card-img-top rounded-0" style="max-height: 160px; object-fit: cover;" alt="Disney">
                            <div class="card-body d-flex justify-content-between">
                                <div class="texto d-flex justify-content-start align-items-center ">
                                    <h5 class="mr-2 mb-0">250</h5>
                                    <smaller>membros</smaller>
                                </div>
                                <div class="botao">
                                    <a href="#" class="botao btn btn-primary float-right border-0">Visitar</a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- CARD COMUNIDADE 2 -->
                    <div class="carousel-item">
                            <div class="card border-0" style="width: 18rem;">
                                <div class="card-header border-0 text-center">
                                    <span>Curtindo em Vegas</span>
                                </div>
                                <img src="./img/vegas_card.jpg" class="card-img-top rounded-0" style="max-height: 160px; object-fit: cover;" alt="Las Vegas">
                                <div class="card-body d-flex justify-content-between">
                                    <div class="texto d-flex justify-content-start align-items-center ">
                                        <h5 class="mr-2 mb-0">180</h5>
                                        <smaller>membros</smaller>
                                    </div>
                                    <div class="botao">
                                        <a href="#" class="botao btn btn-primary float-right border-0">Visitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- CARD COMUNIDADE 3 -->
                        <div class="carousel-item">
                                <div class="card border-0" style="width: 18rem;">
                                    <div class="card-header border-0 text-center">
                                        <span>Ilhas Paradisíacas</span>
                                    </div>
                                    <img src="./img/ilhas_card.jpg" class="card-img-top rounded-0" style="max-height: 160px; object-fit: cover;" alt="Ilhas paradisíacas">
                                    <div class="card-body d-flex justify-content-between">
                                        <div class="texto d-flex justify-content-start align-items-center ">
                                            <h5 class="mr-2 mb-0">130</h5>
                                            <smaller>membros</smaller>
                                        </div>
                                        <div class="botao">
                                            <a href="#" class="botao btn btn-primary float-right border-0">Visitar</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                </div>
                </div> 
    </section>

    <!-- MINHAS VIAGENS -->

    <section class="bg-light pt-4 pb-2">
        <div class="container mb-4">
            <h5>Meus grupos de viagem</h5>
        </div>
        <div class="d-flex">
            <div class=" input-group mb-4 mr-3 col-10">
                <input type="text" class="form-control border-0" placeholder="Buscar">
                <div class="input-group-append">
                    <span class="input-group-text border-0"> <i class="material-icons">search</i></span>
                </div>
            </div>
            <a href="aba_criarGrupoDeViagem.html" class="p-0 m-0"> 
                <i class="material-icons" style="color:#CFCFCF; font-size: 40px;">add_box</i>
            </a>
        </div>
        <div class="container mt-4 pb-2">
            <h6>Visualizar: </h6>
            <div class="btn-group mt-2 filtro" role="group" aria-label="Botões para filtrar visualizações de viagens">
                <button type="button" class="btn btn-secondary border-top-0 border-left-0 border-bottom-0 filtro">Todas</button>
                <button type="button" class="btn btn-secondary border-top-0 border-bottom-0 filtro">Confirmadas</button>
                <button type="button" class="btn btn-secondary border-top-0 border-bottom-0 border-right-0 filtro">Quero ir</button>
            </div>
    </section>

    <!-- CARD VIAGENS 1 -->
    <section class="bg-light mt-2 mb-1 pb-4">
        <div class="col-md-4">
            <img src="./img/ilha-bela.jpeg" class="card-img float-left mr-4 mt-3" alt="Ilha Bela">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">Título da viagem</h5>
                    <span> <i class="material-icons check">check</i></span>
                </div>
                <div class="card-text d-flex justify-content-start">
                    <p class="mr-2">Destino:</p>
                    <p>Ilha Bela</p>
                </div>
                <div class="card-text d-flex justify-content-start mb-3 align-items-center">
                    <span class="mr-3 mb-0 p-0">Quem vai:</span>
                    <div>
                        <img class="foto-perfil rounded-circle" src="./img/perfil.1.jpg" alt="foto de perfil do membro">
                        <img class="foto-perfil rounded-circle" src="./img/perfil.2.jpg" alt="foto de perfil do membro">
                        <img class="foto-perfil rounded-circle" src="./img/perfil.3.jpg" alt="foto de perfil do membro">
                    </div>
                </div>
            <a href="aba_detalhesDeViagem.html" class="text-muted float-right link-detalhes">ver mais detalhes</a>
            </div>
        </div>
    </section>

    <!-- CARD VIAGENS 2 -->

    <section class="bg-light mt-2 mb-1 pb-4">
            <div class="col-md-4">
                <img src="./img/nova york.jpg" class="card-img float-left mr-4 mt-3" alt="Ilha Bela">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Título da viagem</h5>
                        <span> <i class="material-icons favorite">favorite</i></span>
                    </div>
                    <div class="card-text d-flex justify-content-start">
                        <p class="mr-2">Destino:</p>
                        <p>Nova York</p>
                    </div>
                    <div class="card-text d-flex justify-content-start mb-3 align-items-center">
                            <span class="mr-3 mb-0 p-0">Quem vai:</span>
                            <div>
                                    <img class="foto-perfil rounded-circle" src="./img/perfil.3.jpg" alt="foto de perfil do membro">
                                    <img class="foto-perfil rounded-circle" src="./img/perfil.4.jpg" alt="foto de perfil do membro">
                                </div>
                    </div>
                <a href="#" class="text-muted float-right link-detalhes">ver mais detalhes</a>
                </div>
            </div>
        </section>


    <!-- NAV INFERIOR -->
    <div class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">
        <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="fas fa-atlas fa-lg col-2"></a>
        <a href="#" class="far fa-comments fa-lg col-2"></a>
        <a href="aba_perfil.html" class="fas fa-home fa-lg col-2"></a>
        <a href="aba_comunidade.html" class="fas fa-users fa-lg col-2 ativo"></a>
        <a href="#" class="fas fa-search fa-lg col-2"></a>
    </div>
</body>

</html>