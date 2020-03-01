@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Comunidade {{$group->name}}
@endsection

@section('conteudo')
    <!-- BANNER -->
    <main class="mb-3">
        <img src="@if($group->photo == 'nophoto') {{url('./img/default_cover.jpg')}} @else{{asset($group->photo)}}@endif" class="img-fluid banner-img" alt="banner">
    </main>

    <!-- NOME E MEMBROS -->

    <section class="bg-light pb-4 mb-3">
        <div class="container mb-4">
            <h1>{{$group->name}}</h1>
        </div>

        <div class="container mb-4">
            @foreach($group->user as $member)
                <a href="{{route('user.show', ['id' => $member->id])}}">
                    <img
                    class="foto-perfil rounded-circle"
                    src="@if($member->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif"
                    alt="{{$member->name}}">
                </a>
            @endforeach           
            @if(!$confirmed)
                    <div class="d-flex mt-3">
                        <a href="{{route('group.confirmPresence',['groupId' => $group->id, 'userId' => $user->id])}}" class="btn btn-info">
                        Participar
                        </a>
                    </div>
            @else
                    <div class="d-flex mt-3">
                        <a href="{{route('group.cancelPresence',['groupId' => $group->id, 'userId' => $user->id])}}" class="btn btn-danger">
                        Cancelar participação
                        </a>
                    </div>
            @endif
            <h6 class="ml-2 mt-4"> {{$confirmed}} @if ($confirmed<=1) membro @else membros @endif </h6>
        </div>

    <!-- NOME E MEMBROS -->

        <div class="container mb-4">
            <h5>Quem somos?</h5>

            <div>
                {{$group->description}}
            </div>
        </div>
        <div class="container mb-4">
            <h5 class="nome mx-3 pt-4">Interesses da Comunidade</h5>
            <div class="col-xs-12">
                <div class="row interesses text-justify mx-3 py-2">
                    @if($group->interest->count() == 0 )
                        A comunidade {{$group->name}} ainda não informou nenhum interesse.
                    @endif
                </div>
            </div>
            <div class="col-xs-12">
                <div class="row interesses text-justify mx-3 py-2">
                    @foreach($group->interest as $interest)
                        <button type="button" class="btn btn-outline-primary mt-1 mr-1">{{$interest->name}}</button>
                    @endforeach
                </div>
            </div>
        </div>

        @if($user->id == $group->admin)
        <div class="mx-1 mt-2 mb-4">
            <a href="{{route('group.edit',['id' => $group->id] )}}" class="botao btn btn-primary border-0">Editar</a>
        </div>
        @endif

        <!-- VIAGENS REALIZADAS -->

        <div class="container mb-4">
            <h5>Viagens realizadas</h5>
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
        <div class="container mb-4">
            <h5>Fórum</h5>
        </div>
        
    <!-- BUSCA DOS TÓPICOS -->
        <div>
            <div>
                <!-- <form action="{{route('topic.search', ['groupId' => $group->id])}}" method="POST">
                <div class="input-group mx-1">
                    {{ csrf_field() }}
                        <input type="text" class="form-control border-0" placeholder="Buscar" name="search" required>
                            <div class="input-group-append">
                                <button class="submit border-0" >
                                    <span class="input-group-text border-0">
                                        <i class="material-icons">search</i>
                                    </span>
                                </button>
                            </div>
                </div>
                </form> -->
                <div class="mx-1 my-3">
                    <a href="{{route('topic.create', ['group_id' => $group->id])}}" class="botao btn btn-primary border-0">Novo tópico</a>
                    <a href="{{route('topic.index', ['group_id' => $group->id])}}" class="botao btn btn-primary border-0">Ver +</a>
                </div>
            </div>
        </div>
<!-- 
        @if(!empty(session()->get('topicCount')))
        <div class="container mb-2">
            <h5>Os resultados da sua busca são</h5>    
        </div>
        <section class="bg-light mt-2 mb-1 pb-1">
            <div class="col-md-8">
                <div class="card-body px-0">
                    <div class="d-flex">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição do Tópico</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(session()->get('topicSearchs') as $key) 
                            <tr>
                                <td>{{$key->name}}</td>
                                <td>{{$key->description}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </section>
        @else 
            Nenhum resultado encontrado. Por favor, tente novamente.
        @endif-->
    </section> 

    <!-- TÓPICOS -->
    @foreach ($topics as $topic)
    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-md-8">
            <div class="card-body px-0">
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
                        <span class="d-flex mr-2 align-items-center">
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
        </div>
    </section>
    @endforeach
@endsection
