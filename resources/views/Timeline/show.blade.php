@extends('layouts.template', ['pagina' => 'linhaDoTempo'], ['footer' => 'true'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesScrapbook.css')}}">
@endsection

@section('titulo')
    Timeline
@endsection

@section('conteudo')
<!-- BANNER -->
<main class="mb-2">
        <img src="../img/worldmap.svg" class="img-fluid banner-img" alt="banner">
        <h3 class="titulo ml-3">
    </div>
</main>

<!-- MENU LINHA DO TEMPO / CLASSIFICAÇÃO -->
<div class="d-flex align-items-center justify-content-center w-100 mb-3 scrapbook-navbar">
    <div class="d-flex w-50 h-100 justify-content-center align-items-center rounded-top active-link">
        <h5 class="title mb-0">Linha do tempo</h5>
    </div>
    <div class="d-flex w-50 h-100 justify-content-center align-items-center unactive-link">
        <a href="/classificacao"> Classificação </a>
    </div>
</div>
<!-- LINHA DO TEMPO -->

<div class="timeline @if($trips == null) .d-none @endif">
    <div class="entries">
        <h6 class="bg-light p-2 m-0">Nenhuma viagem foi realizada</h6>
        @foreach ($trips as $trip)
        <div class="entry">
            <h3 class="title">{{$trip->tripName}}</h3>
            <div class="body">
                <p>Descrição:</p>
                <p>{{$trip->description}}</p>
                <p>Membros:</p>
                @foreach ($trip->tripMembers as $member)
                <img class="img-fluid" src="@if($member->userPhoto == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$member->userPhoto")}} @endif" alt="Foto de {{$trip->userName}}">
                @endforeach
                <p>Gasto total:</p>
                <p>{{number_format($trip->foreseen_budget, 0)}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
