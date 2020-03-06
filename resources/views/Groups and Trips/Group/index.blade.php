@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Minhas comunidades
@endsection

@section('conteudo')
<main>
    <img src="@if($user->photo == 'nophoto') {{asset('./img/default_cover.jpg')}}  @else {{asset("storage/usersBackgroundPhotos/$user->background_photo")}} @endif" class="img-fluid banner-img" alt="banner">
</main>

<div class="containerDesktop">
<div class="pt-4 pb-4 mb-2 card bg-light menu-voltar">
    <a  href="{{route('user.listGroupsAndTrips')}}" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
        <i class="material-icons mr-3 back stretched-link">arrow_back</i>      
        <h5>Minhas Comunidades</h5>
    </a>
</div>

<section class="bg-light pt-4 pb-4">

        <div class="col-12 m-md-0">

            @include('flash::message')

            @if($admin->count() != 0)

            Comunidades administradas por você:

                <table class="table table-striped mt-3">
                    <thead>
                        <tr >
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
                                    <a href="{{route('group.edit',['id' => $group->id])}}" class="btn botao mr-3">Editar</a>
                                    <a href="{{route('group.destroy', ['id' => $group->id])}}" class="btn botao_atencao">Excluir</a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </section>

<section class="bg-light pt-4 pb-4 mt-2">
         <div class="col-12 m-md-0">
            @if($groups->count() == 0)

            <span>Você ainda não participa de nenhuma comunidade</span>

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

                                <td >

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

                                        <a href="{{route('group.cancelPresence',['groupId' => $group->id, 'userId' => $user->id])}}" class="btn botao_atencao" style="width: max-content">
                                            Cancelar participação
                                        </a>    

                                @endif

                                </td>

                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                @else 
                   <span> Você ainda não participa de outras comunidades</span>
                @endif    
            @endif
        </div>
    </section>
</div>

@endsection
