@extends('layout.template')

@section('titulo')
    Criar nova Comunidade
@endsection

@section('conteudo') 
        <!-- NAV ABA-->
        <div class="bg-light pt-4 pb-4 mb-3">
            <div class="d-flex ml-3 align-items-center">
                <a class="link" href="/comunidade"><i class="material-icons">arrow_back</i></a>
                <div class="container">
                    <h5>Criar nova Comunidade</h5>
                </div>
            </div>
        </div>
    
        <!-- CARD COM OS DETALHES DO GRUPO DE VIAGEM SELECIONADO -->
        <main class="bg-light pt-4 pb-4">
            <div class="row">
                <form method="POST" class="col-10 offset-1">
                        <img src="./img/add.png" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                        <div class="form-group mt-4">
                            <label for="tituloComunidade">Titulo da Comunidade:</label>
                            <input type="text" class="form-control" id="tituloComunidade" placeholder="Insira titulo da comunidade">
                        </div>
                        <div class="form-group mt-4">
                            <label for="descrcaoComunidade">Descrição da Comunidade:</label>
                            <textarea type="text" class="form-control" id="descricaoComunidade" placeholder="Insira titulo da comunidade"></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for="palavrasChave">Palavras-chave:</label>
                            <select mutiple class="form-control" id="palavrasChave">
                                <option disabled selected>Selecione as palavras-chave deste grupo</option>
                                <option>Palavra 1</option>
                                <option>Palavra 2</option>
                                <option>Palavra 3</option>
                                <option>Palavra 4</option>
                                <option>Palavra 5</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="visibilidadeDoGrupo">Visibilidade da comunidade:</label>
                            <select class="form-control" id="visibilidadeDoGrupo">
                                <option disabled selected value="padrao">Selecione o nível de visibilidade do Grupo</option>
                                <option value="publico">Público</option>
                                <option value="amigos">Amigos</option>
                                <option value="amigosDeAmigos">Amigos de amigos</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                        <a href="/comunidade" class="btn botao_atencao mr-2">Cancelar</a>
                        <a href="/comunidade" class="btn botao">Salvar</a>
                        </div>
                </form>
            </div>
        </main>
@endsection