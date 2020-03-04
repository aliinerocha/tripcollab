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

    <section class="bg-light pt-4 pb-4 mb-3 ">
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
        <a href="{{route('user.groups.index', ['id' => auth()->user()->id])}}" class="btn botao ml-3 p-2 mt-4">
            <span>Ver todas</span>
        </a>

        <div id="comunidade-slider d-md-none" class="carousel slide mt-4" data-ride="carousel">
            <div class="carousel-inner d-md-none">
                <!-- CARD COMUNIDADES 1 -->
                @foreach($confirmedGroups as $key => $group)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}" style="text-align: -webkit-center;"> 
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
            {{-- <a class="carousel-control-prev " href="#comunidade-slider" role="button" data-slide="prev">
                <i class="material-icons"  style=" font-size: 40px; color: black"> keyboard_arrow_left </i>     
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="" role="button" data-slide="next">
                <i class="material-icons"  style=" font-size: 40px; color: black"> keyboard_arrow_right </i>           
                <span class="sr-only">Next</span>
              </a> --}}
        </div>

        <div class="d-none d-md-flex pl-4">
                <!-- CARD COMUNIDADES 1 -->
                @foreach($confirmedGroups as $key => $group)
                    <div class="card border-0 ml-3" style="width: 18rem;">
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
                @endforeach
        </div>
    </section>

    <!-- MINHAS VIAGENS -->

    <section class="bg-light pb-3 pt-3">
        <div class="ml-3 mb-4">
            <h5>Minhas viagens</h5>
        </div>
        <a href="{{route('trip.create')}}" class="d-flex align-items-center justify-content-between btnGroupsAndTrips ml-3 p-2">
            <span>Criar nova viagem</span>
            <i class="material-icons" style=" font-size: 30px">add</i>
        </a>
        <a href="{{route('user.trips.index', ['id' => auth()->user()->id])}}" class="btn botao ml-3 p-2 mt-4" >
            <span>Ver todas</span>
        </a>
    </section>
    {{-- CARD VIAGENS --}}
        @foreach($confirmedTrips as $confirmedTrip)
        <div class="bg-light pb-3 pt-3 mt-2 d-flex">
                <img src="@if($confirmedTrip->photo == 'nophoto') {{url('./img/add.png')}} @else {{asset('storage/' . $confirmedTrip->photo)}} @endif" alt="..." style="max-width: 150px" class="ml-3">
                <div class="ml-3">
                        <h5 class="card-title">{{$confirmedTrip->name}}                        
                             @if(auth()->user()->id == $confirmedTrip->admin) 
                            <p class="badge badge-pill badge-primary card-text text-right">Administrador</p>
                         @endif </h5>
                    <p class="card-text ">{{$confirmedTrip->description}}</p>
                    <p class="card-text text-right" style="text-decoration:underline"><a href="{{route('trip.show', ['id' => $confirmedTrip->id])}}">Ver detalhes</a></p>
                </div>
        </div>
        @endforeach
</div>

@endsection
