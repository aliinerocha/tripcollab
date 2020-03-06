@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Minhas viagens
@endsection

@section('conteudo')

<main>
    <img src="/img/default_cover.jpg" class="img-fluid banner-img" alt="banner">
</main>

<div class="containerDesktop">

    <div class="pt-4 pb-4 card bg-light menu-voltar mb-2 ">
        <a  href="{{route('user.listGroupsAndTrips')}}" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
            <i class="material-icons mr-3 back stretched-link">arrow_back</i>      
            <h5>Minhas viagens</h5>
        </a>
    </div>

<main class="bg-light pt-4 pb-4" style="height: 100vh">
    <div class="row mx-3 mx-md-0">

        @include('flash::message')

            @if($admin->count() != 0)

            <span class="mb-2">Viagens administradas por você</span>

                <table class="table table-striped mb-5">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Viagem</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($admin as $trip)
                        <tr>
                            <td>

                            <a href="{{route('trip.show', ['id' => $trip->id])}}">
                                    <img
                                    class="foto-perfil rounded-circle"
                                    src="@if($trip->photo == 'nophoto') {{asset('./img/add.png')}} @else {{asset('storage/' . $trip->photo)}} @endif"
                                    alt="{{$trip->name}}">
                                </a>
                            </td>

                            <td>
                                <a href="{{route('trip.show', ['id' => $trip->id])}}">
                                    {{$trip->name}}
                                </a>
                            </td>

                            <td>
                                <div class="d-flex">
                                    <a
                                    href="{{route('trip.edit',['id' => $trip->id])}}"
                                    class="btn botao mr-3">
                                    Editar
                                    </a>
                                    <a
                                    href="{{route('trip.destroy',['id' => $trip->id])}}"
                                    class="btn botao_atencao">
                                    Excluir
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @endif

            @if($trips->count() == 0)

            <span>Você ainda não participa de nenhuma viagem</span>

            @else

            @if($trips->count() - $admin->count() == 1)

                {{$trips->count() - $admin->count()}} viagem listada

            @else

                {{$trips->count() - $admin->count()}} viagens listadas

            @endif

            <table class="table table-striped mt-2" >
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Viagem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($trips as $trip)
                    @if($trip->admin != $user->id)
                    <tr>
                        <td>

                        <a href="{{route('trip.show', ['id' => $trip->id])}}">
                                <img
                                class="foto-perfil rounded-circle"
                                src="@if($trip->photo == 'nophoto') {{asset('./img/add.png')}} @else {{asset('storage/' . $trip->photo)}} @endif"
                                alt="{{$trip->name}}">
                            </a>
                        </td>

                        <td>
                            <a href="{{route('trip.show', ['id' => $trip->id])}}">
                                {{$trip->name}}
                            </a>
                        </td>

                        <td>
                            <div class="d-flex">
                                @if($trip->status == 0)
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Solicitação enviada
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{route('trip.cancelPresence',['tripId' => $trip->id, 'userId' => $user->id])}}">
                                            Cancelar solicitação
                                            </a>
                                        </div>
                                    </div>

                                @elseif($trip->status == 1)

                                    <div class="d-flex">
                                        <a href="{{route('trip.cancelPresence',['tripId' => $trip->id, 'userId' => $user->id])}}" class="btn btn-danger">
                                            Cancelar presença
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </td>

                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>

            @endif

            </div>
</main>
</div>

@endsection
