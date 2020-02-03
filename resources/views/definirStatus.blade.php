<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Definir Status</title>
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

    <!-- NAV ABA-->
    <div class="bg-light pt-4 pb-4 mb-3">
        <div class="d-flex ml-3 align-items-center">
            <a class="link" href="aba_comunidade.html"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Meus Grupos de Viagem</h5>
            </div>
        </div>
    </div>
<div class="pai">
    <!-- CARD DO GRUPO SELECIONADO -->
    <main class="bg-light pt-4 pb-4">
            <div class="row">
                <div class="col-10 offset-1">
                <div class="d-flex mt-2 justify-content-center">
                    <div class="col-11 p-0">
                        <img src="./img/ilha-bela.jpeg" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                    </div>
                    <i class="material-icons" style="color:#CFCFCF; font-size: 40px;"> more_vert</i>
                </div>
                <div>
                        <div class="col-11 p-0">
                        <h5 class="my-4 text-center">Titulo da viagem</h5>
                        </div>
                        <p class="titulo_campo mb-2">Data:</p>
                            <p class="mb-1">Partida: 13/12/19</p>
                            <p class="mb-4">Retorno: 22/12/19</p>
                        <p class="titulo_campo mb-2">Administrador:</p>
                        <p class="mb-4">Nome do usuário administrador</p>
                        <p class="titulo_campo mb-2">Palavras-chave:</p>
                        <p class="mb-4">Praia; Amigos; Conhecer gente nova</p>
                        <p class="titulo_campo mb-2">Vinculado à comunidade:</p>
                        <p class="mb-4">Ilhas Paradisíacas</p>
                        <p class="titulo_campo mb-2">Investimento Previsto:</p>
                        <p class="mb-4">R$ 1500</p>
                        <p class="titulo_campo mt-4">Membros confirmados:</p>
                        <div>
                            <img class="foto-perfil rounded-circle" src="./img/perfil.1.jpg" alt="foto de perfil do membro">
                            <img class="foto-perfil rounded-circle" src="./img/perfil.2.jpg" alt="foto de perfil do membro">
                            <img class="foto-perfil rounded-circle" src="./img/perfil.3.jpg" alt="foto de perfil do membro">
                        </div>
                </div>
                </div>
            </div>
    </main>
</div>
    <!-- SIMULAÇÃO DO OVERLAY PARA DEFINIR STATUS -->
    <div class="overlay filho p-4">
                <a class="btn iconeNav p-0 mb-4" href="./aba_detalhesDeViagem.html"><i class="material-icons close">close</i></a>
                    <a href="./aba_comunidade.html" class="btn botao mb-4 tamanhoBotao">Confirmar presença</a>
                    <a href="./aba_comunidade.html" class="btn botao_atencao mb-4 tamanhoBotao">Deixar de seguir</a>
    </div>

    <!-- NAV INFERIOR -->
    <div class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">
            <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="fas fa-atlas fa-lg col-2"></a>
            <a href="#" class="far fa-comments fa-lg col-2"></a>
            <a href="aba_perfil.html" class="fas fa-home fa-lg col-2"></a>
            <a href="aba_comunidade.html" class="fas fa-users fa-lg col-2 ativo"></a>
            <a href="#" class="fas fa-search fa-lg col-2"></a>
        </div>
</body>
<html>

</html>