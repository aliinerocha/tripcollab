@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Minhas comunidades
@endsection

@section('conteudo')

<div class="bg-light pt-4 pb-4 mb-3 card">
        <div class="d-flex ml-3 align-items-center">
            <a class="stretched-link" href="{{ route('user.listGroupsAndTrips') }}"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Minhas comunidades</h5>
            </div>
        </div>
</div>

<main class="bg-light pt-4 pb-4">
    <div class="row">
        <div class="col-10 offset-1">

            @if($admin->count() != 0)

            Comunidades administradas por você:

                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Comunidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($admin as $group)
                        <tr>
                            <td>

                            <a href="{{route('group.show', ['id' => $group->id])}}">
                                    <img
                                    class="foto-perfil rounded-circle"
                                    src="@if($group->photo == 'nophoto') {{asset('./img/add.png')}} @else {{asset('storage/' . $group->photo)}} @endif"
                                    alt="{{$group->name}}">
                                </a>
                            </td>

                            <td>
                                <a href="{{route('group.show', ['id' => $group->id])}}">
                                    {{$group->name}}
                                </a>
                            </td>

                            <td class="d-flex">
                                <div class="d-flex">
                                    <a
                                    href="{{route('group.edit',['id' => $group->id])}}"
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

            @if($groups->count() == 0)

            Você ainda não participa de nenhuma comunidade

            @else

                @if($groups->count() - $admin->count() !== 0)
                    @if($groups->count() - $admin->count() == 1)

                        {{$groups->count() - $admin->count()}} comunidade listada:

                    @else

                        {{$groups->count() - $admin->count()}} comunidades listadas:

                    @endif

                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Comunidade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
                            @if($group->admin != $user->id)
                            <tr>
                                <td>

                                <a href="{{route('group.show', ['id' => $group->id])}}">
                                        <img
                                        class="foto-perfil rounded-circle"
                                        src="@if($group->photo == 'nophoto') {{asset('./img/add.png')}} @else {{asset('storage/' . $group->photo)}} @endif"
                                        alt="{{$group->name}}">
                                    </a>
                                </td>

                                <td>
                                    <a href="{{route('group.show', ['id' => $group->id])}}">
                                        {{$group->name}}
                                    </a>
                                </td>

                                <td class="d-flex">

                                @if($group->status == 0)
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Solicitação enviada
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{route('group.cancelPresence',['groupId' => $group->id, 'userId' => $user->id])}}">
                                            Cancelar solicitação
                                            </a>
                                        </div>
                                    </div>

                                @elseif($group->status == 1)

                                    <div class="d-flex">
                                        <a href="{{route('group.cancelPresence',['groupId' => $group->id, 'userId' => $user->id])}}" class="btn btn-danger">
                                            Cancelar participação
                                        </a>
                                    </div>

                                @endif

                                </td>

                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                @else 
                    Você não participa de outras comunidades
                @endif    
            @endif

            </div>
        </div>
    </div>
</main>

@endsection
