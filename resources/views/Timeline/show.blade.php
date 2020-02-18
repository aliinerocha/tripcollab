@extends('layouts.template', ['pagina' => 'linhaDoTempo'])

@section('titulo')
    Criar nova Comunidade
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
    <div class="d-flex w-50 h-100 justify-content-center align-items-center rounded-top active-link">
        <h5 class="title mb-0">Linha do tempo</h5>
    </div>
    <div class="d-flex w-50 h-100 justify-content-center align-items-center unactive-link">
        <a href="/classificacao"> Classificação </a>
    </div>
</div>
<!-- LINHA DO TEMPO -->

<div class="timeline">
    <div class="entries">
        <div class="entry">
            <h3 class="title">Título da viagem</h3>
            <div class="body">
                <p>Destino: Campos do Jordão</p>
                <p>Grupo</p>
                <img class="img-fluid" src="../img/group.png" alt="">
                <p>Investimento</p>
                <p>$$$</p>
                <p>Avaliação</p>
                <div class="avaliacao">
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                </div>
            </div>
        </div>
        <div class="entry">
            <h3 class="title">Título da viagem</h3>
            <div class="body">
                <p>Destino: Campos do Jordão</p>
                <p>Grupo</p>
                <img class="img-fluid" src="../img/group.png" alt="">
                <p>Investimento</p>
                <p>$$$</p>
                <p>Avaliação</p>
                <div class="avaliacao">
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                </div>
            </div>
        </div>
        <div class="entry">
                <h3 class="title">Título da viagem</h3>
                <div class="body">
                    <p>Destino: Campos do Jordão</p>
                    <p>Grupo</p>
                    <img class="img-fluid" src="../img/group.png" alt="">
                    <p>Investimento</p>
                    <p>$$$</p>
                    <p>Avaliação</p>
                    <div class="avaliacao">
                        <i class="material-icons">star_border</i>
                        <i class="material-icons">star_border</i>
                        <i class="material-icons">star_border</i>
                        <i class="material-icons">star_border</i>
                    </div>
                </div>
        </div>
        <div class="entry">
                <h3 class="title">Título da viagem</h3>
                <div class="body">
                    <p>Destino: Campos do Jordão</p>
                    <p>Grupo</p>
                    <img class="img-fluid" src="../img/group.png" alt="">
                    <p>Investimento</p>
                    <p>$$$</p>
                    <p>Avaliação</p>
                    <div class="avaliacao">
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
