@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Membros da Comunidade
@endsection

@section('conteudo')

<div class="containerDesktop">
    <!-- NAV ABA-->
    <div class="pt-4 pb-4 card menu-voltar">
        <a  href="{{route('group.show',['id' => $group->id])}}" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
            <i class="material-icons mr-3 back stretched-link">arrow_back</i>      
            <h5>{{$group->name}}</h5>
        </a>
    </div>

<main class="bg-light pt-4 pb-4 mx-3 mx-md-0">
    <div class="row">
        <div class="col-12">
            {{-- <div class="d-flex mt-2 justify-content-center">
                <div class="col-11 p-0">
                    <img src="@if($group->photo == 'nophoto') {{url('./img/add.png')}} @else {{asset('storage/' . $group->photo)}} @endif" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto; @if($group->photo != 'nophoto') border-radius: 25px @endif" alt="...">
                </div>
            </div>
            <div>
                <div class="col-11 p-0">
                    <h5 class="my-4 text-center">{{$group->name}}</h5>
                </div>
            </div> --}}

        <div>

            @if(!($groupMembersRequests->count()) == 0 && $user->id == $group->admin)

            Solicitações para participar da comunidade

                <table class="table table-striped  mt-3">
                    <thead>
                        <tr>
                            <th >Foto</th>
                            <th >Nome</th>
                            <th >Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($groupMembersRequests as $member)
                        <tr>
                            <td>

                            <a href="{{route('user.show', ['id' => $member->id])}}">
                                <img class="foto-perfil rounded-circle"src="@if($member->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$member->photo")}} @endif"alt="{{$member->name}}"></a>
                            </td>

                            <td>
                                <a href="{{route('user.show', ['id' => $member->id])}}">{{$member->name}}</a>
                            </td>

                            <td class="d-flex dropdown td_acao">
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

            @if($groupMembers->count() == 1) Existe @else Existem @endif {{$groupMembers->count()}} @if($groupMembers->count() <= 1) membro @else membros @endif nessa comunidade.

            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th >Foto</th>
                        <th >Nome</th>
                        @if($user->id == $group->admin)
                        <th >Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                @foreach($groupMembers as $member)
                    <tr>
                        <td>

                        <a href="{{route('user.show', ['id' => $member->id])}}">
                                <img class="foto-perfil rounded-circle" src="@if($member->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$member->photo")}} @endif" alt="{{$member->name}}"></a>
                        </td>

                        <td >
                            <a href="{{route('user.show', ['id' => $member->id])}}">{{$member->name}}</a>
                        </td>
                        @if($user->id == $group->admin)
                            <td class="td_acao">
                                @if($member->id !== $group->admin)
                                    <a href="{{route('group.cancelPresence',['groupId' => $group->id, 'userId' => $member->id])}}"class="btn btn-danger">Excluir membro</a>
                                @else
                                    <p class="badge badge-pill badge-primary card-text text-right">Administrador</p>
                                @endif
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
</div>
@endsection
