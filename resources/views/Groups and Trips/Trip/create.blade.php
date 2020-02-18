@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Criar viagem
@endsection

@section('conteudo')
        <!-- NAV ABA-->
        <div class="bg-light pt-4 pb-4 mb-3">
            <div class="d-flex ml-3 align-items-center">
                <a class="link" href="comunidadesEViagens"><i class="material-icons">arrow_back</i></a>
                <div class="container">
                    <h5>Criar viagem</h5>
                </div>
            </div>
        </div>

        <!-- CARD COM OS DETALHES DA VIAGEM SELECIONADA -->
        <main class="bg-light pt-4 pb-4">
            <div class="row">
                <form action="{{route('trip.store', ['id' => $trip->id])}}" method="POST" class="col-10 offset-1">
                @csrf
                        <img src="{{url('./img/add.png')}}" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                        <div class="form-group mt-4">
                            <label for="tituloDaViagem">Titulo da viagem:</label>
                            <input name="name" type="text" class="form-control" id="tituloDaViagem" placeholder="Insira titulo da viagem" value="">
                        </div>
                        <div class="form-group mt-4">
                            <label for="departure">Embarque dia:</label>
                            <input name="departure" type="date" class="form-control mb-2" placeholder="Insira a data de partida" value="">
                            <label for="departure">Retorno dia:</label>
                            <input name="return_date" type="date" class="form-control" placeholder="Insira a data de retorno" value="">
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
                        <!--
                        <div class="form-group mt-4">
                            <label for="vincularComunidade">Vincular à comunidade:</label>
                            <input type="text" class="form-control mb-2" id="vincularComunidade" placeholder="Insira o nome da comunidade">
                        </div>
                        -->
                        <div class="form-group mt-4">
                            <label for="investimentoPrevisto">Investimento previsto:</label>
                            <input name="foreseen_budget" type="text" class="form-control mb-2" id="investimentoPrevisto" placeholder="Insira o investimento previsto" value="{{$trip->foreseen_budget}}">
                        </div>
                        <div class="form-group mt-4">
                            <label for="visibilidadeDoGrupo">Visivel ao público?</label>
                            <select name="visibility" class="form-control" id="visibilidadeDoGrupo">
                                <option disabled @if($trip->visibility == null) selected @endif value="padrao">Selecione o nível de visibilidade</option>
                                <option @if($trip->visibility == 1) selected @endif value="1">Sim</option>
                                <option @if($trip->visibility == 0) selected @endif value="0">Não</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                        <a href="comunidadesEViagens" class="btn botao_atencao mr-2">Cancelar</a>
                        <button type="submit" href="comunidadesEViagens" class="btn botao">Salvar</button>
                        </div>
                </form>
            </div>
        </main>
@endsection
