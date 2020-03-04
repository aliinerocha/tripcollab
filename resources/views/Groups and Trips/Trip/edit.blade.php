@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Editar viagem
@endsection

@section('conteudo')

    <div class="containerDesktop">
        <!-- NAV ABA-->
        <div class="bg-light pt-4 pb-4 mb-3">
            <div class="d-flex ml-3 align-items-center">
                <a class="link" href="comunidadesEViagens"><i class="material-icons">arrow_back</i></a>
                <div class="container">
                    <h5>Editar viagem</h5>
                </div>
            </div>
        </div>

        <!-- CARD COM OS DETALHES DA VIAGEM SELECIONADA -->
        <main class="bg-light pt-4 pb-4">
            <div class="row">
                <form action="{{route('trip.update', ['id' => $trip->id])}}" method="POST" class="col-10 offset-1" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    @include('flash::message')
                        <img src="@if($trip->photo == 'nophoto') {{url('./img/add.png')}} @else {{asset('storage/' . $trip->photo)}} @endif" class="d-block img-fluid" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                        <div class="form-group mt-4">
                            <label for="tituloDaViagem">Título da viagem:</label>
                            <input name="name" type="text" class="form-control" id="tituloDaViagem" placeholder="Insira titulo da viagem" value="{{$trip->name}}">
                        </div>
                        <div class="form-group mt-4">
                            <label for="departure">Embarque dia:</label>
                            <input name="departure" type="date" class="form-control mb-2" placeholder="Insira a data de partida" value="{{$trip->departure}}">
                            <label for="departure">Retorno dia:</label>
                            <input name="return_date" type="date" class="form-control" placeholder="Insira a data de retorno" value="{{$trip->return_date}}">
                        </div>

                        <div class="form-group mt-4">
                            <label for="">Descrição da viagem:</label>
                            <textarea name="description" type="text" class="form-control" id="" placeholder="Insira descrição da viagem">{{$trip->description}}</textarea>
                        </div>

                        <label for="">Foto ilustrativa</label>
                        <input type="file" class="form-control-file" name="photo">

                        <div class="form-group mt-4">
                            <label for="palavrasChave">Interesses:</label>
                            @foreach ($interests as $interest)
                            <div class="form-check @error('interests') is-invalid @enderror"  id="palavrasChave">
                                    <input class="form-check-input" name="interests[]" type="checkbox" value="{{$interest->id}}" id="{{$interest->id}}" @if($selectedInterests->contains('interest_id', $interest->id)) checked @endif >
                                    <label class="form-check-label" for="{{$interest->id}}">
                                        {{$interest->name}}
                                    </label>
                                @error('interests')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            @endforeach
                        </div>

                        <div class="form-group mt-4">
                            <label for="vincularComunidade">Vincular à comunidade:</label>
                            <select name="group_id" type="text" class="form-control mb-2" id="vincularComunidade" placeholder="Insira o nome da comunidade">
                            @foreach($groups as $group)
                                <option value="{{$group->id}}" @if($trip->group_id == $group->id ) selected @endif>{{$group->name}}</option>
                            @endforeach
                            </select>
                        </div>

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
                        <div class="row d-flex justify-content-end m-0">
                            <div class="d-flex justify-content-end">
                                <a href="comunidadesEViagens" class="btn botao_atencao mr-2">Cancelar</a>
                                <button type="submit" href="comunidadesEViagens" class="btn botao">Salvar</button>
                        </div>
                </form>

                <!-- </div> -->
            </div>
        </main>
            <div class="mt-3 py-4 bg-light">
                <form action="{{route('trip.destroy',['id' => $trip->id])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="d-flex align-items-center justify-content-between justify-content-md-end pt-3 col-10 offset-1">
                        <span class="pr-3">Excluir viagem</span>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>

                </form>
            </div>
@endsection
