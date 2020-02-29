@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Tópicos da Comunidade {{$group->name}}
@endsection

@section('conteudo')

   <!-- NAV ABA-->
   <div class="bg-light pt-4 pb-4 mb-3">
        <div class="d-flex ml-3 align-items-center">
            <a class="link" href="{{route('group.show', ['id' => $group->id])}}"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Voltar para Comunidade</h5>
            </div>
        </div>
    </div>
    
    <!-- BANNER -->
    <main class="mb-3">
            <img src="{{url('./img/ilhas_card.jpg')}}" class="img-fluid banner-img" alt="banner">
            </div>
    </main>

    <!-- FÓRUM -->

    <!-- FÓRUM -->

    <section class="bg-light pt-2 pb-2">
        <div class="container mb-4">
            <h5>Tópicos da Comunidade: {{$group->name}}</h5>
        </div>
        <div class="input-group mx-1">
            <input type="text" class="form-control border-0" placeholder="Buscar">
            <div class="input-group-append">
                <span class="input-group-text border-0">
                    <i class="material-icons">search</i>
                </span>
            </div>
        </div>
        <div class="mx-1 my-2">
            <a href="{{route('topic.create', ['group_id' => $group->id])}}" class="botao btn btn-primary border-0">Novo tópico</a>

        </div>
    </section>

    <!-- TÓPICOS -->
    @foreach ($topics as $topic)
    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-md-8">
            <div class="card-body px-0">
                <div class="d-flex">
                    <div class="d-flex flex-column p-0 align-items-center justify-content-end">
                        <img class="foto-perfil rounded-circle display-column" src="@if($topic->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif" alt="foto de perfil do membro">
                        <div class="small">{{$topic->userName}}</div>
                    </div>
                    
                    <div class="d-flex flex-column w-100 ml-2">
                        <h5 class="card-title mb-auto">{{$topic->topicName}}</h5>
                        <div class="w-100 small d-flex align-items-end flex-column"><span>{{date('d/m/Y', strtotime($topic->created_at))}}</span></div>
                    </div>
                </div>

                <div class="mt-2">
                    {{$topic->description}}
                </div>
                
                <div class="d-flex w-100 mt-3 justify-content-between">
                    <div class="d-flex small">
                        <span class="d-flex mr-2 align-items-center">
                            <i class="material-icons">
                                thumb_up
                            </i>
                            <span class="align-items-center">
                                142
                            </span>
                        </span>
                        <span class="d-flex align-items-center">
                            <i class="material-icons mr-1">
                                thumb_down
                            </i>
                            <span class="align-items-center">
                                2
                            </span>
                        </span>
                    </div>
                    <div>
                        <a href="{{route('topic.show',['group_id' => $group->id ,'id' => $topic->id])}}" class="text-muted link-detalhes stretched-link">
                            Responder
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@endsection