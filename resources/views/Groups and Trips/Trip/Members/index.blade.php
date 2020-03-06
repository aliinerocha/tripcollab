@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Participantes da viagem
@endsection

@section('conteudo')

<main>
    {{-- <img src="@if($trip->photo == 'nophoto') {{url('/img/default_cover.jpg')}} @else{{asset($trip->photo)}}@endif" class="img-fluid banner-img" alt="banner"> --}}
    <img src="/img/default_cover.jpg" class="img-fluid banner-img" alt="banner">
</main>

<div class="containerDesktop">

    <div class="pt-4 pb-4 card bg-light menu-voltar mb-2 ">
        <a  href="{{route('trip.show',['id' => $trip->id])}}" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
            <i class="material-icons mr-3 back stretched-link">arrow_back</i>
            <h5>Membros da viagem</h5>
        </a>
    </div>


<main class="bg-light pt-4 pb-4" style="height: 100vh">
    <h5 class="mb-4 mx-3 mx-md-0">{{$trip->name}}</h5>
    <div class="row mx-3 mx-md-0">
            @if($tripMembersRequests->count() != 0 && $user->id == $trip->admin)

            <span>Solicitações para participar da viagem</span>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tripMembersRequests as $member)
                        <tr>
                            <td>
                                <a href="{{route('user.show', ['id' => $member->id])}}">
                                        <img
                                        class="foto-perfil rounded-circle"
                                        src="@if($member->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$member->photo")}} @endif"
                                        alt="{{$member->name}}">
                                </a>
                            </td>

                            <td>
                                <a href="{{route('user.show', ['id' => $member->id])}}">
                                    {{$member->name}}
                                </a>
                            </td>
                                <td>
                                <!--    <div class="dropdown justify-content-center d-flex"> -->
                                        <button class="btn btn-info dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Solicitou participar da viagem
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{route('trip.acceptPresence', ['tripId' => $trip->id, 'userId' => $member->id])}}">
                                                Aceitar
                                            </a>
                                            <a class="dropdown-item" href="{{route('trip.cancelPresence', ['tripId' => $trip->id, 'userId' => $member->id])}}">
                                                Rejeitar
                                            </a>
                                        </div>
                                <!--    </div> -->
                                </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @endif

            @if($tripMembers->count() == 0)

           <span> Ainda não há membros para essa viagem</span>

            @else

            <span>Existem {{$tripMembers->count()}} membros confirmados nessa viagem</span>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        @if($user->id == $trip->admin)
                        <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                @foreach($tripMembers as $member)

                        <tr>
                            <td>

                                <a href="{{route('user.show', ['id' => $member->id])}}">
                                    <img
                                    class="foto-perfil rounded-circle"
                                    src="@if($member->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$member->photo")}} @endif"
                                    alt="{{$member->name}}">
                                </a>

                            </td>

                            <td>
                                <a href="{{route('user.show', ['id' => $member->id])}}">
                                    {{$member->name}}
                                </a>
                            </td>

                            <td>
                                @if($member->id != $trip->admin && auth()->user()->id == $trip->admin)
                                    <div class="d-flex">
                                        <a
                                        href="{{route('trip.cancelPresence',['tripId' => $trip->id, 'userId' => $member->id])}}"
                                        class="btn btn-danger">
                                        Excluir
                                        </a>
                                    </div>
                                @elseif($member->id == $trip->admin)
                                    <span class="badge badge-primary p-2 badge-item">Administrador</span>
                                @endif
                            </td>

                        </tr>

                @endforeach
                </tbody>
            </table>

            @endif
        </div>
    </div>
</main>

@endsection
