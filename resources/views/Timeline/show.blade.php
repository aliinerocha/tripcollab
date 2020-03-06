@extends('layouts.template', ['pagina' => 'linhaDoTempo'], ['footer' => 'true'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesScrapbook.css')}}">
@endsection

@section('titulo')
    Timeline
@endsection

@section('conteudo')
<!-- BANNER -->
<main class="m-0">
        <img src="../img/worldmap.svg" class="img-fluid banner-img" alt="banner">
</main>

<!-- MENU LINHA DO TEMPO / CLASSIFICAÇÃO -->
<div class="d-flex align-items-center justify-content-center w-100 mb-3 scrapbook-navbar">
    <div class="d-flex w-50 h-100 justify-content-center align-items-center rounded-top active-link">
        <h5 class="title mb-0">Linha do tempo</h5>
    </div>
    <div class="d-flex w-50 h-100 justify-content-center align-items-center unactive-link">
        <h5 class="title mb-0"><a href="/classificacao" id="classificacao"> Classificação </a></h5>
    </div>
</div>
<!-- LINHA DO TEMPO -->

<div class="timeline @if($trips == null) .d-none @endif">
    <div class="entries">
        @if(count($trips) == 0)
            <h6 class="bg-light p-2 m-0">Nenhuma viagem foi realizada</h6>
        @else
            @foreach ($trips as $trip)
            <div class="entry card">
                <h3 class="title">{{$trip->tripName}}</h3>
                <div class="body">
                    <p class="mb-1">Descrição:</p>
                    <p class="mb-3">{{$trip->description}}</p>
                    <p class="hide-in-sm mb-1">Membros: {{$trip->countTripMembers}} @if ($trip->countTripMembers <= 1) membro @else membros @endif </p>
                    @foreach ($trip->tripMembers as $member)
                    <img class="img-fluid foto-perfil hide-in-sm mb-3" src="@if($member->userPhoto == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$member->userPhoto")}} @endif" alt="Foto de {{$trip->userName}}">
                    @endforeach
                    <p class="mb-1">Gasto por membro:</p>
                    <p class="mb-1">R$ {{number_format($trip->foreseen_budget, 0)}}</p>
                    <a href="{{route('trip.show', ['id' => $trip->id])}}" class="stretched-link"></a>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>

@endsection
