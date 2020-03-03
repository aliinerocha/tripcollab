@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Busca
@endsection

@section('conteudo')

<div class="bg-light pt-4 pb-4 mb-3">
        <div class="d-flex ml-3 align-items-center">
            <a class="link" href="{{ URL::previous() }}"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Busca</h5>
            </div>
        </div>
</div>

<main class="bg-light py-2">
    <div class="row">
        <div class="col-10 offset-1">

        <div class="d-flex">
            <div class=" input-group ">
                <input type="text" class="form-control border-0" placeholder="Buscar">
                <div class="input-group-append">
                    <span class="input-group-text border-0"> <i class="material-icons">search</i></span>
                </div>
            </div>
        </div>

        <div class="mb-2">
            <div class="btn-group mt-2 filtro" role="group" aria-label="Botões para filtrar visualizações de viagens">
                <button type="button" class="btn btn-secondary border-top-0 border-left-0 border-bottom-0 filtro">Pessoas</button>
                <button type="button" class="btn btn-secondary border-top-0 border-bottom-0 filtro">Grupos</button>
                <button type="button" class="btn btn-secondary border-top-0 border-bottom-0 border-right-0 filtro">Viagens</button>
            </div>
        </div>

        </div>
    </div>
</main>

@endsection
