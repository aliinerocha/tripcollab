@extends('layout.template')

@section('titulo')
    Comunidade
@endsection

@section('conteudo') 
    <!-- NAV ABA-->
    <div class="bg-light pt-4 pb-4 mb-3">
        <div class="d-flex ml-3 align-items-center">
            <a class="link" href="/comunidade"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Meus Grupos de Viagem</h5>
            </div>
        </div>
    </div>

    <!-- CARD COM OS DETALHES DO GRUPO DE VIAGEM SELECIONADO -->
    <main class="bg-light pt-4 pb-4">
        <div class="row">
            <div class="col-10 offset-1">
            <div class="d-flex mt-2 justify-content-center">
                <div class="col-11 p-0">
                    <img src="./img/ilha-bela.jpeg" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                </div>
                <a href="/definirStatus"><i class="material-icons" style="color:#CFCFCF; font-size: 40px;"> more_vert</i></a>
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
@endsection