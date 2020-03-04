@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Criar viagem
@endsection

@section('conteudo')

    <div class="containerDesktop">
    
        <!-- NAV ABA-->
        <div class="bg-light pt-4 pb-4 mb-3">
            <div class="d-flex ml-3 align-items-center">
                <a class="link" href="{{ URL::previous() }}"><i class="material-icons">arrow_back</i></a>
                <div class="container">
                    <h5>Criar viagem</h5>
                </div>
            </div>
        </div>

        <!-- CARD COM OS DETALHES DA VIAGEM SELECIONADA -->
        <main class="bg-light pt-4 pb-4">
            <div class="row">
                <form action="{{route('trip.store')}}" method="POST" class="col-10 offset-1" enctype="multipart/form-data">
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
                            <label for="">Descrição da viagem:</label>
                            <textarea name="description" type="text" class="form-control" id="" placeholder="Insira descrição da viagem"></textarea>
                        </div>

                        <label for="">Foto ilustrativa</label>
                        <input type="file" class="form-control-file" name="photo">

                        <!--
                        <div class="form-group mt-4">
                            <label for="vincularComunidade">Vincular à comunidade:</label>
                            <input type="text" class="form-control mb-2" id="vincularComunidade" placeholder="Insira o nome da comunidade">
                        </div>
                        -->
                        <div class="form-group mt-4">
                            <label for="investimentoPrevisto">Investimento previsto:</label>
                            <input name="foreseen_budget" type="text" class="form-control mb-2" id="investimentoPrevisto" placeholder="Insira o investimento previsto" value="">
                        </div>
                        <div class="form-group mt-4">
                            <label for="visibilidadeDoGrupo">Visivel ao público?</label>
                            <select name="visibility" class="form-control" id="visibilidadeDoGrupo">
                                <option disabled value="padrao">Selecione o nível de visibilidade</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <input type="hidden" name="admin" value="{{auth()->user()->id}}">

                        <div class="d-flex justify-content-end mt-4">

                            <a href="{{route('user.listGroupsAndTrips')}}" class="btn botao_atencao mr-2">Cancelar</a>
                            <button type="submit" href="comunidadesEViagens" class="btn botao">Salvar</button>
                        </div>
                </form>
            </div>
        </main>
    
    </div> 
@endsection
