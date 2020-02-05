<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classificação</title>
    <link rel="icon" href=".../img/icone_logo.png">
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
             <!-- Fontaweasome -->
      <script src="https://kit.fontawesome.com/e369e6f381.js" crossorigin="anonymous"></script>
    <!-- meu css -->
    <link rel="stylesheet" href="./css/scrapbook.css">
</head>

<body>
    <!-- NAV SUPERIOR -->
    <nav class="navbar sticky-top">
            <a class="navbar-brand" href="../aba_home.html"><img src="../img/logo branco.png" class="img-fluid" alt="logo Trip Collab"> TRIP COLLAB</a>
            <div class="d-flex justify-content-end align-items-center">
                <a class="nav-link d-flex align-items-center" href="#"><i
                        class="material-icons mr-2">account_circle</i><span class="mr-3">SAIR</span></a>
                <a class="btn iconeNav" href="../aba_menu.html"><i class="material-icons">menu</i></a>
            </div>
        </nav>

    <!-- BANNER -->
    <main class="mb-2">
            <img src="../img/worldmap.svg" class="img-fluid banner-img" alt="banner">
            <h3 class="titulo ml-3">
        </div>
    </main>

    <!-- MENU LINHA DO TEMPO / CLASSIFICAÇÃO -->
    <div
    class="d-flex
    align-items-center
    justify-content-center
    w-100
    mb-3
    scrapbook-navbar
    ">
        <div
        class="
        d-flex
        w-50
        h-100
        justify-content-center
        align-items-center
        unactive-link
        "
        >
            <a href="/linhaDoTempo">Linha do tempo</a>
    	</div>
        <div

        class="
        d-flex
        w-50
        h-100
        justify-content-center
        align-items-center
        rounded-top
        active-link"
        >
            <h5 class="title mb-0"> Classificação </h5>
    	</div>
    </div>
    <!-- CLASSIFICAÇÃO -->

    <div class="d-flex flex-column align-items-center" >
      <div class="d-flex flex-column align-items-center">
        <i class="material-icons md-48">
          explore
        </i>
        <div class="main-achievement">
          <span class="main-achievement status">Status</span> <br>
          Pequeno Explorador<br>
        </div>
      </div>
    </div>
    <div class="w-100 mt-3" class="other-achievements">
        <div class="d-flex achievement-row">
          <div
          class="
          d-flex
          justify-content-center
          align-items-center
          achievement-box"
          >
                <i class="material-icons md-48">
                explore
                </i>
          </div>
          <div class="ml-3 d-flex flex-column w-100">
            <span>Prêmio 3</span>
            <span class="achievement-description">Descrição de como adquirir</span><br>
          </div>
        </div>
        <div class="d-flex achievement-row">
          <div class="d-flex justify-content-center align-items-center unactive-achievement">
              <i class="material-icons md-48">
                beach_access
              </i>
          </div>
          <div class="ml-3 d-flex flex-column w-100">
            <span>Prêmio 2</span>
            <span class="achievement-description">Descrição de como adquirir</span><br>
          </div>
        </div>
        <div class="d-flex achievement-row">
          <div class="d-flex justify-content-center align-items-center unactive-achievement">
              <i class="material-icons md-48">
                restaurant
              </i>
          </div>
          <div class="ml-3 d-flex flex-column w-100">
              <span>Prêmio 1</span>
              <span class="achievement-description">Descrição de como adquirir</span><br>
            </div>
        </div>
    </div>

    <!-- NAV INFERIOR -->
    <div class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">

      <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="fas fa-atlas fa-lg col-2 ativo"></a>
      <a href="#" class="far fa-comments fa-lg col-2"></a>
      <a href="../aba_perfil.html" class="fas fa-home fa-lg col-2"></a>
      <a href="../aba_comunidade.html" class="fas fa-users fa-lg col-2"></a>
      <a href="#" class="fas fa-search fa-lg col-2"></a>
</div>
</body>

</html>
