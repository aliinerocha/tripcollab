@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Comunidade {{$group->name}}
@endsection

@section('conteudo')
<!-- NAV ABA-->

<!-- BANNER -->
<main>
    <img src="@if($group->photo == 'nophoto') {{url('/img/default_cover.jpg')}} @else{{asset($group->photo)}}@endif" class="img-fluid banner-img" alt="banner">
</main>
<div class="containerDesktop">

        <!-- NAV ABA-->
    <div class="pt-4 pb-4 card menu-voltar">
            <a  href="{{route('user.listGroupsAndTrips')}}" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
                <i class="material-icons mr-3 back stretched-link">arrow_back</i>
                <h5>Minhas Comunidades</h5>
            </a>
    </div>
    <!-- NOME E MEMBROS -->

        <section class="bg-light pb-4 mb-3 pt-4">

        @include('flash::message')

            <div class="ml-4 ml-md-0  mb-4 d-flex justify-content-between align-items-center mr-3">
                <h1>{{$group->name}}</h1>
                @if($user->id == $group->admin)
                <a href="{{route('group.edit', ['id' => $group->id])}}">
                    <i class="far fa-edit fa-lg" style="color:  #7C7C7C"></i>
                </a>
            @endif
            </div>

            <div class="d-flex flex-column">
                @if(($group->visibility == 0 && $userStatus && $userStatus->status == 0) || ($group->visibility == 0 && !$userStatus))

                <span class="ml-3 ml-md-0 mr-3">Esta comunidade não é aberta ao público</span>

                <div class="ml-3 mt-3 ml-md-0">
                @if(!$userStatus && $group->visibility == 0)

                        <a href="{{route('group.confirmPresence',['groupId' => $group->id, 'userId' => $user->id])}}" class="btn botao">
                            Solicitar participação
                        </a>

                        @elseif($userStatus && $userStatus->status == 0)

                        <a href="{{route('group.cancelPresence',['groupId' => $group->id, 'userId' => $user->id])}}" type="button" class="btn botao_atencao">
                            Cancelar solicitação
                        </a>
                </div>
            </div>

                {{-- <div class="dropdown-menu ">
                    <a href="{{route('group.cancelPresence',['groupId' => $group->id, 'userId' => $user->id])}}">
                    Cancelar solicitação
                    </a>
                </div> --}}
        @endif

    @else

            <div class="ml-4 ml-md-0 mr-4 mb-4">
                <h5>Descrição da comunidade:</h5>
                <div>
                    {{$group->description}}
                </div>
            </div>

            <div class="ml-4 ml-md-0 mr-4 mb-4 pt-4">
                <h5>Administrador:</h5>
                <p class="mb-4">
                    <a href="{{route('user.show', ['id' => $admin->id])}}">
                        <img
                        class="foto-perfil rounded-circle"
                        src="@if($admin->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$admin->photo")}} @endif"
                        alt="{{$admin->name}}">
                    </a>
                    <a href="{{route('user.show', ['id' => $admin->id])}}">{{$admin->name}}</a>
                </p>
            </div>

            <div class="ml-4 ml-md-0 mr-4 mb-4 py-4">
                <h5>Interesses da Comunidade:</h5>
                <div class=" interesses text-justify">
                    @if($group->interest->count() == 0 )
                        A comunidade {{$group->name}} ainda não informou nenhum interesse.
                    @endif
                </div>

                <div class="interesses text-justify">
                    @foreach($group->interest as $interest)
                        <button type="button" class="btn btn_interesses mt-1 mr-1">{{$interest->name}}</button>
                    @endforeach
                </div>
            </div>

            <div class="ml-4 ml-md-0 mr-3 py-4">
                <h5>Membros:</h5>
                <div class="d-flex align-items-center mb-3">
                <h6 > {{$confirmed}} @if ($confirmed<=1) membro @else membros @endif </h6>
                <u><a href="{{route('group.membersIndex',['id' => $group->id])}}" class=" ml-3 ">Ver todos</a></u>
                </div>
                @foreach($group->user as $member)
                    <a href="{{route('user.show', ['id' => $member->id])}}">
                        <img
                        class="foto-perfil rounded-circle"
                        src="@if($member->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif"
                        alt="{{$member->name}}">
                    </a>
                @endforeach

                @if(!$userStatus && $group->visibility == 1)
                        <div class="d-flex mt-3">
                            <a href="{{route('group.confirmPresence',['groupId' => $group->id, 'userId' => $user->id])}}" class="btn botao">
                            Participar
                            </a>
                        </div>
                @elseif($userStatus && $userStatus->status == 1 && $user->id != $group->admin)
                        <div class="d-flex mt-3">
                            <a href="{{route('group.cancelPresence',['groupId' => $group->id, 'userId' => $user->id])}}" class="btn btn-danger">
                            Cancelar participação
                            </a>
                        </div>
                @endif
            </div>

            <!-- VIAGENS REALIZADAS -->

            <div class="ml-4 ml-md-0 mb-4 py-4">
                <h5>Viagens realizadas:</h5>
            </div>

            <div id="comunidade-slider" class="carousel slide container" data-ride="carousel">
                <div class="carousel-inner">

                    <!-- CARD VIAGEM -->
                    @foreach($group->trips as $key => $trip)
                    <div class="carousel-item m-0 {{$key == 0 ? 'active' : '' }}">
                        <div class="card border-0" style="width: 18rem;">
                            <div class="card-header border-0 text-center">
                                <span>{{$trip->name}}</span>
                            </div>
                            <img src="@if($trip->photo == 'nophoto') {{url('./img/default_cover.jpg')}} @else{{asset($trip->photo)}}@endif" class="card-img-top rounded-0"
                                style="max-height: 160px; object-fit: cover;" alt="Cancún">
                            <div class="card-body d-flex justify-content-between  border-0">
                                <div class="texto d-flex justify-content-start align-items-center ">
                                    <h6 class="mr-2 mb-0">{{\Carbon\Carbon::parse($trip->return_date)->formatLocalized('%h de %Y')}}</h6>
                                </div>
                                <div class="botao">
                                    <a href="{{route('trip.show', ['id' => $trip->id])}}" class="botao btn btn-primary float-right border-0 stretched-link">Histórico</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- FÓRUM -->
        <section class="bg-light pt-2 pb-2">
            <div class="ml-4 ml-md-0 mb-2">
                <h5 class="mb-3 mt-3">Fórum</h5>
                <div>
                    <div>
                        <h5 class="pt-4">Criar Novo Topico</h5>
                            <form action="{{route('topic.store', ['group_id' => $group->id])}}" method="POST" enctype="multipart/form-data" class="my-md-0 mr-4">
                                @csrf

                                <div class="form-group mt-4" >
                                    <label>Nome do Tópico</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}" placeholder="Insira o nome do Tópico" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label>Descrição</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"  type="text" name="description" value="{{old('description')}}" rows="3" placeholder="Insira a descrição do Tópico" required></textarea>
                                    @error('description')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                <input type="hidden" name="group_id" value="{{$group->id}}">
                                <div class="row d-flex justify-content-end m-0">
                                    <div class="form-group d-flex justify-content-end">
                                        <button type="submit" class="btn botao btn-primary float-right border-0">Criar Topico</button>
                                    </div>
                                </div>
                            </form>

                                            {{-- <a href="{{route('topic.create', ['group_id' => $group->id])}}" class="botao btn btn-primary border-0">Novo tópico</a> --}}
                    </div>
                </div>
            </div>
        </section>

        <!-- TÓPICOS -->
        @foreach ( $topics as $topic)
        <section class="bg-light mt-2 mb-1 pb-4 ">
                <div class="card-body mb-4 card bg-light border-0">
                    <div class="d-flex">
                        <div class="d-flex flex-column p-0 align-items-center justify-content-end">
                            <img class="foto-perfil rounded-circle display-column" src="@if($topic->user->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif" alt="foto de perfil do membro">
                            <div class="small">{{$topic->user->name}}</div>
                    </div>

                        <div class="d-flex flex-column w-100 ml-2">
                            <h5 class="card-title mb-auto">{{$topic->name}}</h5>
                            <div class="w-100 small d-flex align-items-end flex-column"><span>{{date('d/m/Y', strtotime($topic->created_at))}}</span></div>
                        </div>
                    </div>

                    <div class="mt-2">
                        {{$topic->description}}
                    </div>

                    <div class="d-flex w-100 mt-3 justify-content-between">

                        <div class="d-flex small">
                            <span class="d-flex mr-3 align-items-center">
                                <i class="material-icons">thumb_up</i>
                                <span>{{$topic->likeTopics()->where('like_topic',1)->count()}}</span>
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="material-icons mr-1">thumb_down</i>
                                <span>{{$topic->likeTopics()->where('like_topic',0)->count()}}</span>
                            </span>
                        </div>
                        <span class="d-flex mr-2">
                            <i class="material-icons mr-1">chat</i>
                            <span class="justify-content-center">{{$topic->topicMessages()->count()}} @if ($topic->topicMessages()->count()<=1) resposta @else respostas @endif</span>
                        </span>
                        <div>
                            <a href="{{route('topic.show',['id' => $topic->id])}}" class="text-muted link-detalhes stretched-link">
                                Responder
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            @if ($group->topic()->count()>3)
            <a href="{{route('topic.index', ['group_id' => $group->id])}}" class="botao btn btn-primary float-right mt-3 mr-3 mr-md-0">Ver todos</a>
            @endif
        @endif
        </section>
</div>
@endsection

