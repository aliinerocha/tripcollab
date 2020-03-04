@extends('layouts.template', ['pagina' => 'perfil'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Minhas viagens
@endsection

@section('conteudo')

<div class="bg-light pt-4 pb-4 mb-3">
        <div class="d-flex ml-3 align-items-center">
            <a class="link" href="{{ URL::previous() }}"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Minhas viagens</h5>
            </div>
        </div>
</div>

<main class="bg-light pt-4 pb-4">
    <div class="row">
        <div class="col-10 offset-1">

            @if($admin->count() != 0)

            Viagens administradas por você

                <table class="table table-striped">
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

                            <td class="d-flex">
                                <div class="d-flex">
                                    <a
                                    href="{{route('trip.edit',['id' => $trip->id])}}"
                                    class="btn btn-info">
                                    Editar
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @endif

            @if($trips->count() == 0)

            Você ainda não participa de nenhuma viagem

            @else

            @if($trips->count() - $admin->count() == 1)

                {{$trips->count() - $admin->count()}} viagem listada

            @else

                {{$trips->count() - $admin->count()}} viagens listadas

            @endif

            <table class="table table-striped">
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

                        <td class="d-flex">

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

                        </td>

                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>

            @endif

            </div>
        </div>
    </div>
</main>

@endsection
