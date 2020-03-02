@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Comunidades e Viagens
@endsection

@section('conteudo')
    <!-- BANNER -->
    <main class="mb-3">
            <img src="img/groupsAndTripsBannerDesktop.jpg" class="img-fluid banner-img" alt="banner">
            <h3 class="titulo ml-3">Para onde você <br> quer ir hoje?</h3>
    </main>

    <!-- COMUNIDADES -->

    <section class="bg-light pt-4 pb-4 mb-3">
        <div class="ml-3 mb-4">
            <h5>Minhas comunidades</h5>
        </div>
        {{-- <div class="d-flex">
            <div class=" input-group mb-4 mr-3 col-10">
                <input type="text" class="form-control border-0" placeholder="Buscar">
                <div class="input-group-append">
                    <span class="input-group-text border-0"> <i class="material-icons">search</i></span>
            </div>
        </div> --}}
        <a href="{{route('group.create')}}" class="d-flex align-items-center justify-content-around btnGroupsAndTrips ml-3 p-2">
            <span>Criar nova comunidade</span>
            <i class="material-icons" style=" font-size: 30px">add</i>
        </a>

        <div id="comunidade-slider" class="carousel slide container" data-ride="carousel">
                <div class="carousel-inner">
                <!-- CARD COMUNIDADES 1 -->
                @foreach($confirmedGroups as $key => $group)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="card-header border-0 text-center">
                            <span>{{$group->name}}</span>
                        </div>
                        <img src="@if($group->photo == 'nophoto') {{url('./img/default_cover.jpg')}} @else{{asset($group->photo)}}@endif" class="card-img-top rounded-0" style="max-height: 160px; object-fit: cover;" alt="Foto do Grupo">
                        <div class="card-body d-flex justify-content-between">
                            <div class="texto d-flex justify-content-start align-items-center ">
                                <h5 class="mr-2 mb-0">{{$group->members}}</h5>
                                <small>@if ($group->members<=1) membro @else membros @endif</small>
                            </div>
                            <div class="botao">
                                <a href="{{route('group.show', ['id' => $group->id])}}" class="botao btn btn-primary float-right border-0 stretched-link">Visitar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- MINHAS VIAGENS -->

    <section class="bg-light pt-4 pb-2">
        <div class="ml-3 mb-4">
            <h5>Minhas viagens</h5>
        </div>
        {{-- <div class="d-flex">
            <div class=" input-group mb-4 mr-3 col-10">
                <input type="text" class="form-control border-0" placeholder="Buscar">
                <div class="input-group-append">
                    <span class="input-group-text border-0"> <i class="material-icons">search</i></span>
                </div>
            </div> --}}
            <a href="{{route('trip.create')}}" class="d-flex align-items-center justify-content-between btnGroupsAndTrips ml-3 p-2">
                <span>Criar nova viagem</span>
                <i class="material-icons" style=" font-size: 30px">add</i>
            </a>
        <div class="ml-3 mt-4 pb-2">
            <h6>Visualizar: </h6>
            <div class="btn-group mt-2 filtro" role="group" aria-label="Botões para filtrar visualizações de viagens">
                <button type="button" class="btn btn-secondary border-top-0 border-left-0 border-bottom-0 filtro">Todas</button>
                <button type="button" class="btn btn-secondary border-top-0 border-bottom-0 filtro">Confirmadas</button>
                <button type="button" class="btn btn-secondary border-top-0 border-bottom-0 border-right-0 filtro">Quero ir</button>
            </div>
    </section>

    @foreach($confirmedTrips as $confirmedTrip)

        <section class="bg-light mt-2 mb-1 pb-4 row">

            <div class="col-3">
                <img src="@if($confirmedTrip->photo == 'nophoto') {{url('./img/add.png')}} @else {{asset('storage/' . $confirmedTrip->photo)}} @endif" class="card-img float-left mr-4 mt-3" alt="{{$confirmedTrip->name}}">
            </div>

            <div class="col-9">
                <div class="card-body ml-2">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{$confirmedTrip->name}}</h5>
                    </div>
                    <!--
                    <div class="card-text d-flex justify-content-start">
                        <p class="mr-2">Destino:</p>
                        <p>Ilha Bela</p>
                    </div>

                    <div class="card-text d-flex justify-content-start mb-3 align-items-center">
                        <span class="mr-3 mb-0 p-0">Quem vai:</span>
                        <div>
                            <img class="foto-perfil rounded-circle" src="./img/perfil.1.jpg" alt="foto de perfil do membro">
                            <img class="foto-perfil rounded-circle" src="./img/perfil.2.jpg" alt="foto de perfil do membro">
                            <img class="foto-perfil rounded-circle" src="./img/perfil.3.jpg" alt="foto de perfil do membro">
                        </div>
                    </div>
                    -->
                <a href="{{route('trip.show', ['id' => $confirmedTrip->id])}}" class="stretched-link text-muted float-right link-detalhes">ver mais detalhes</a>
                </div>
            </div>
        </section>

    @endforeach

@endsection
