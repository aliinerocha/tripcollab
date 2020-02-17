@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Criar novo Grupo de Viagem
@endsection

@section('conteudo') 
        <!-- NAV ABA-->
        <div class="bg-light pt-4 pb-4 mb-3">
            <div class="d-flex ml-3 align-items-center">
                <a class="link" href="comunidadesEViagens"><i class="material-icons">arrow_back</i></a>
                <div class="container">
                    <h5>Criar novo Grupo de Viagem</h5>
                </div>
            </div>
        </div>
    
        <!-- CARD COM OS DETALHES DO GRUPO DE VIAGEM SELECIONADO -->
        <main class="bg-light pt-4 pb-4">
            <div class="row">
                <form method="POST" class="col-10 offset-1">
                        <img src="./img/add.png" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                        <div class="form-group mt-4">
                            <label for="tituloDaViagem">Titulo da viagem:</label>
                            <input type="text" class="form-control" id="tituloDaViagem" placeholder="Insira titulo da viagem">
                        </div>
                        <div class="form-group mt-4">
                            <label for="dataDaViagem">Data:</label>
                            <input type="text" class="form-control mb-2" id="tituloDaViagem" placeholder="Insira a data de partida">
                            <input type="text" class="form-control" id="tituloDaViagem" placeholder="Insira a data de retorno">
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
                            <label for="vincularComunidade">Vincular à comunidade:</label>
                            <input type="text" class="form-control mb-2" id="vincularComunidade" placeholder="Insira o nome da comunidade">
                        </div>
                        <div class="form-group mt-4">
                            <label for="investimentoPrevisto">Investimento previsto:</label>
                            <input type="text" class="form-control mb-2" id="investimentoPrevisto" placeholder="Insira o investimento previsto">
                        </div>
                        <div class="form-group mt-4">
                            <label for="visibilidadeDoGrupo">Visibilidade do grupo:</label>
                            <select class="form-control" id="visibilidadeDoGrupo">
                                <option disabled selected value="padrao">Selecione o nível de visibilidade do Grupo</option>
                                <option value="publico">Público</option>
                                <option value="amigos">Amigos</option>
                                <option value="amigosDeAmigos">Amigos de amigos</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                        <a href="comunidadesEViagens" class="btn botao_atencao mr-2">Cancelar</a>
                        <a href="comunidadesEViagens" class="btn botao">Salvar</a>
                        </div>
                </form>
            </div>
        </main>
@endsection