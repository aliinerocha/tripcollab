@extends('layouts.template', ['pagina' => 'linhaDoTempo'])

@section('titulo')
    Classificação
@endsection

@section('conteudo')
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
