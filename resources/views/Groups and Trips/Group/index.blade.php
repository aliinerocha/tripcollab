@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Membros da Comunidade
@endsection

@section('conteudo')

<div class="bg-light pt-4 pb-4 mb-3">
        <div class="d-flex ml-3 align-items-center">
            <a class="link" href="{{ URL::previous() }}"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Minhas comunidades</h5>
            </div>
        </div>
</div>

<main class="bg-light pt-4 pb-4">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="d-flex mt-2 justify-content-center">
                <div class="col-11 p-0">
                    <img src="@if($group->photo == 'nophoto') {{url('./img/add.png')}} @else {{asset('storage/' . $group->photo)}} @endif" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto; @if($group->photo != 'nophoto') border-radius: 25px @endif" alt="...">
                </div>
            </div>
            <div>
                <div class="col-11 p-0">
                    <h5 class="my-4 text-center">{{$group->name}}</h5>
                </div>
            </div>
            <div>

            @if(!($groupMembersRequests->count()) == 0 && $user->id == $group->admin)

            Solicitações para participar da comunidade

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($groupMembersRequests as $member)
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

                            <td class="d-flex dropdown">
                                <button class="btn btn-sm btn-info flex-grow-1 dropdown-toggle"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                Solicitou participar da comunidade
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{route('group.acceptPresence', ['groupId' => $group->id, 'userId' => $member->id])}}">
                                        Aceitar
                                    </a>
                                    <a class="dropdown-item" href="{{route('group.cancelPresence', ['groupId' => $group->id, 'userId' => $member->id])}}">
                                        Rejeitar
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @endif

            @if($groupMembers->count() == 0)

            Ainda não há membros para essa comunidade.

            @else

            @if($groupMembers->count() == 1) Existe @else Existem @endif {{$groupMembers->count()}} @if($groupMembers->count() <= 1) membro confirmado @else membros confirmados @endif nessa comunidade.

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        @if($user->id == $group->admin)
                        <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                @foreach($groupMembers as $member)
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

                        @if($user->id == $group->admin)
                        <td class="d-flex">
                            <div class="d-flex mt-3">
                                <a
                                href="{{route('group.cancelPresence',['groupId' => $group->id, 'userId' => $member->id])}}"
                                class="btn btn-danger">
                                Cancelar a participação deste usuário
                                </a>
                            </div>
                        </td>
                        @endif

                    </tr>
                @endforeach
                </tbody>
            </table>

            @endif

            </div>
        </div>
    </div>
</main>

@endsection
