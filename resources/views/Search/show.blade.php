@extends('layouts.template', ['pagina' => 'busca'])

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

        @if(request()->is('search/users*'))

            <div class="d-flex"> <!-- Barra de busca de usuários -->
                <form action="{{route('search.users.index')}}" class="send-query w-100 d-flex" method="GET">
                    <div class="input-group">
                        @csrf
                        <input name="search" type="text" class="form-control border-0" placeholder="Buscar">

                        <div class="input-group-append">
                            <a href="#" onclick="document.querySelector('.send-query').submit();">
                                <span class="input-group-text border-0">
                                    <i type="submit" class="material-icons">search</i>
                                </span>
                            </a>
                        </div>

                    </div>
                </form>
            </div>

            @elseif(request()->is('search/groups*'))

                <div class="d-flex"> <!-- Barra de busca de comunidades -->
                    <form action="{{route('search.groups.index')}}" class="send-query w-100 d-flex" method="GET">
                        <div class="input-group">
                            @csrf
                            <input name="search" type="text" class="form-control border-0" placeholder="Buscar">

                            <div class="input-group-append">
                                <a href="#" onclick="document.querySelector('.send-query').submit();">
                                    <span class="input-group-text border-0">
                                        <i type="submit" class="material-icons">search</i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

            @elseif(request()->is('search/trips*'))

                <div class="d-flex"> <!-- Barra de busca de viagens -->
                    <form action="{{route('search.trips.index')}}" class="send-query w-100 d-flex" method="GET">
                        <div class="input-group">
                            @csrf
                            <input name="search" type="text" class="form-control border-0" placeholder="Buscar">

                            <div class="input-group-append">
                                <a href="#" onclick="document.querySelector('.send-query').submit();">
                                    <span class="input-group-text border-0">
                                        <i type="submit" class="material-icons">search</i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
        @endif

        <div class="mb-2">
            <div class="btn-group mt-2 filtro" role="group" aria-label="">
                <a href="{{route('search.users.index')}}" class="btn btn-outline-primary border-top-0 border-left-0 border-bottom-0 filtro @if(request()->is('search/users*')) active @endif">Pessoas</a>
                <a href="{{route('search.groups.index')}}" class="btn btn-outline-primary border-top-0 border-bottom-0 filtro @if(request()->is('search/groups*')) active @endif">Grupos</a>
                <a href="{{route('search.trips.index')}}" class="btn btn-outline-primary border-top-0 border-bottom-0 border-right-0 filtro @if(request()->is('search/trips*')) active @endif">Viagens</a>
            </div>
        </div>

            <div>
                @if(isset($users))

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>

                                    <a href="{{route('user.show', ['id' => $user->id])}}">
                                        <img
                                        class="foto-perfil rounded-circle"
                                        src="@if($user->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif"
                                        alt="{{$user->name}}">
                                    </a>

                                    </td>
                                    <td>
                                        <a href="{{route('user.show', ['id' => $user->id])}}">
                                            {{$user->name}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$users->links()}}

                @endif

                @if(isset($groups))

                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Grupo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($groups as $group)
                                    <tr>
                                        <td>

                                        <a href="{{route('group.show', ['id' => $group->id])}}">
                                            <img
                                            class="foto-perfil rounded-circle"
                                            src="@if($group->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$group->photo")}} @endif"
                                            alt="{{$group->name}}">
                                        </a>

                                        </td>
                                        <td><a href="{{route('group.show', ['id' => $group->id])}}">{{$group->name}}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>

                    {{$groups->links()}}

                @endif

                @if(isset($trips))

                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Viagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trips as $trip)
                                    <tr>
                                        <td>

                                        <a href="{{route('trip.show', ['id' => $trip->id])}}">
                                            <img
                                            class="foto-perfil rounded-circle"
                                            src="@if($trip->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$trip->photo")}} @endif"
                                            alt="{{$trip->name}}">
                                        </a>

                                        </td>
                                        <td><a href="{{route('trip.show', ['id' => $trip->id])}}">{{$trip->name}}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>

                    {{$trips->links()}}

                @endif

            </div>
        </div>
    </div>
</main>

@endsection
