<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonte Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <!-- Meu CSS -->
    <link rel="stylesheet" href="./css/perfil.css">
    <title>Perfil</title>
    <link rel="icon" href="./img/icone_logo.png">
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
    <!-- NAV SUPERIOR -->

    <div class="container-fluid p-0">
        <!-- Foto da Capa -->
        <main class="col-xs-12 capa p-0">
            <img src="./img/foto_capa.png">
        </main>
        <!-- Foto da Capa -->

        <section class="usuario bg-light mb-2 px-3 pb-4">
            <!-- Foto do Usuário -->
            <div class="col-xs-12 usuario-foto p-0">
                <img src="./img/foto_usuario.png" class="rounded-circle" style="width:100px; height: 100px">
            </div>
            <!-- Foto do Usuário -->

            <!-- Botões -->
            <div class="col-xs-12 usuario-botoes text-right pull-right py-3">
                <a href="aba_notificacoes.html"><i class="far fa-bell fa-lg"></i></a>
                <a href="aba_perfil_editar.html"><i class="far fa-edit fa-lg"></i></a>
            </div>
            <!-- Botões -->

            <!-- Descrição do Usuário -->
            <h5 class="nome ml-3 py-1 ">Nome do Usuário</h5>

            <div class="col-xs-12">
                <div class="row usuario-local ml-3 pt-3">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                    <h6 class="localizacao ml-2">São Paulo, SP, Brasil</h6>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="row usuario-descricao text-justify mx-3 pt-4 pb-2">
                    Breve descrição do usuário para encontrar e ser encontrado por outros usuários da comunidade. Pode
                    inserir dados como interesses pessoais, idiomas que fala etc.
                </div>
            </div>
            <!-- Descrição do Usuário -->

            <!-- Interesses -->
            <h5 class="nome mx-3 pt-4">Meus interesses</h5>
            <div class="col-xs-12">
                <div class="row interesses text-justify mx-3 py-2">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, ducimus. Quibusdam dignissimos reprehenderit placeat quas modi, ipsa temporibus omnis labore aspernatur, fugit officia delectus iure. Eveniet deleniti odio explicabo ipsum!
                </div>
            </div>
            <!-- Interesses -->
        </section>
        
        <!-- Amigos -->
        <section class="amigos bg-light px-3 py-4">
            <h5 class="nome pt-1 pb-1 ml-3">Meus amigos</h5>
            <!-- Busca -->
            <div class=" input-group mb-3 py-3 col-10">
                <input type="text" class="form-control border-0" placeholder='Pesquisar "Amigos"'>
                <div class="input-group-append">
                    <span class="input-group-text border-0"> <i class="material-icons">search</i></span>
                </div>
            </div>

            <!-- Lista de Amigos -->
            <h7 class="amigo ml-3">123 amigos</h7>
                <div class="col-xs-12 amigo-foto ml-3 py-4">
                    <img src="./img/perfil.1.jpg" class="rounded-circle" style="width:90px; height: 90px"><h7 class="amigo ml-4">Amigo Amigo 1</h7>
                </div>
                <div class="col-xs-12 amigos-foto ml-3 py-4">
                    <img src="./img/perfil.2.jpg" class="rounded-circle" style="width:90px; height: 90px"><h7 class="amigo ml-4">Amigo Amigo 2</h7>
                </div>
                <div class="col-xs-12 amigos-foto ml-3 py-4">
                    <img src="./img/perfil.3.jpg" class="rounded-circle" style="width:90px; height: 90px"><h7 class="amigo ml-4">Amigo Amigo 3</h7>
                </div>
        </section>
        <!-- Amigos -->
    </div>


 <!-- NAV INFERIOR -->
        <div class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">

            <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="fas fa-atlas fa-lg col-2"></a>
            <a href="#" class="far fa-comments fa-lg col-2"></a>
            <a href="aba_perfil.html" class="fas fa-home fa-lg col-2 ativo"></a>
            <a href="aba_comunidade.html" class="fas fa-users fa-lg col-2"></a>
            <a href="#" class="fas fa-search fa-lg col-2"></a>
        </div>

    <!-- NAV INFERIOR 
    <div class="nav-inferior nav fixed-bottom d-flex justify-content-between align-items-center border-top col-12 px-2">
        <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="d-flex flex-column align-items-center py-2">
            <i class="fas fa-atlas fa-2x"></i>
            <span>Scrapbook</span>
        </a>
        <a href="#" class=" d-flex flex-column align-items-center py-2">
            <i class="far fa-comments fa-2x"></i>
            <span>Chat</span>
        </a>
        <a href="./aba_perfil.html" class="  d-flex flex-column align-items-center ativo pt-1 pb-2">
            <i class="fas fa-home fa-2x"></i>
            <span class="selecionado">Home</span>
        </a>
        <a href="./aba_comunidade.html" class="  d-flex flex-column align-items-center py-2">
            <i class="fas fa-users fa-2x"></i>
            <span>Comunidade</span>
        </a>
        <a href="./aba_comunidade.html" class="  d-flex flex-column align-items-center py-2">
            <i class="fas fa-search fa-2x"></i>
            <span>Busca</span>
        </a>
    </div>
    NAV INFERIOR -->

</body>

</html>