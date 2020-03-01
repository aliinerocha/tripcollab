@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Tópico: {{$topic->name}}
@endsection

@section('conteudo')

    <!-- NAV ABA-->
    <div class="bg-light pt-4 pb-4 mb-3 card">
        <div class="d-flex ml-3 align-items-center">
            <a class="stretched-link" href="{{route('group.show', ['id' => $topic->group_id])}}"><i class="material-icons">arrow_back</i></a>
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

    <!-- TÓPICO -->
    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-md-8">
            <div class="card-body px-0">

                <div class="d-flex">
                    <div class="d-flex flex-column p-0 align-items-center justify-content-end">
                        <img class="foto-perfil rounded-circle display-column" src="@if($topic->user->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif" alt="foto de perfil do membro {{$topic->user->name}}"> 
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
                    <div class="d-flex">
                        <span class="d-flex mr-1">
                            <a href="{{route('topic.like',['id' => $topic->id])}}">
                                <i class="material-icons">thumb_up</i>
                            </a>
                            <span>{{$topic->likeTopics()->where('like_topic',1)->count()}}</span>
                        </span>
                        <span class="d-flex mr-1">
                            <a href="{{route('topic.dislike',['id' => $topic->id])}}">
                                <i class="material-icons mr-1">thumb_down</i>
                            </a>
                            <span>{{$topic->likeTopics()->where('like_topic',0)->count()}}</span>
                        </span>
                    </div>
                    
                    <span class="d-flex mr-2">
                        
                        <i class="material-icons mr-1">chat</i>
                        <span class="justify-content-center">{{$topic->topicMessages()->count()}} @if ($topic->topicMessages()->count()<=1) resposta @else respostas @endif</span>
                        
                    </span>
                    
                    <div>
                        <a href="" class="text-muted link-detalhes">Responder</a>
                    </div>
                </div>
                
                @if($user->id == $topic->user_id)
                    <div class="mx-1 my-2">
                        <a href="{{route('topic.edit',['id' => $topic->id] )}}" class="botao btn btn-primary border-0">Editar</a>
                    </div>
                @endif
                
            </div>
        </div>
    </section>

    <!-- RESPOSTAS -->

    <div class="d-flex mx-2 justify-content-between">
        <span>Respostas</span>
        <span>Classificar</span>
    </div>
    
    @foreach ($topicMessages as $topicMessage)
    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-md-8">
            <div class="card-body px-0">
                 <div class="">
                    
                        <img class="foto-perfil rounded-circle display-column mr-2" src="@if($topicMessage->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif" alt="foto de perfil do membro {{$topicMessage->user->name}}"> 
                        <b class="mb-0 pb-0">{{$topicMessage->user->name}}</b> {{$topicMessage->message}}
                </div>

                <div class="d-flex w-100 mt-3 justify-content-between small">
                    <div class="d-flex">
                        <span class="d-flex mr-2">
                            <a href="{{route('topicMessage.like',['id' => $topicMessage->id])}}">
                                <i class="material-icons">thumb_up</i>
                            </a>
                            <span>{{$topicMessage->likeTopicMessages()->where('like_topic_message',1)->count()}}</span>
                        </span>
                        <span class="d-flex">
                            <a href="{{route('topicMessage.dislike',['id' => $topicMessage->id])}}">
                                <i class="material-icons mr-1">thumb_down</i>
                            </a>
                            <span>{{$topicMessage->likeTopicMessages()->where('like_topic_message',0)->count()}}</span>
                        </span>
                    </div>

                    <div class="w-100 d-flex ml-3 justify-content-around">
                        <span>{{\Carbon\Carbon::parse($topicMessage->created_at)->formatLocalized('%d de %B de %Y')}}</span>

                        <!-- <span class="d-flex mr-2">
                        
                            <i class="material-icons mr-1">chat</i>
                            <span class="justify-content-center">12 respostas</span>

                        </span> -->
                        
                    </div>
                    <!-- <div>
                        <a href="" class="text-muted link-detalhes">
                            Responder
                        </a>

                    </div> -->
                    @if($user->id == $topicMessage->user_id)
                        <form action="{{route('topicMessage.destroy',['topic_id' => $topic->id ,'id' => $topicMessage->id])}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>            
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <!-- Formulário de Respostas -->
    <section class="form-respostaMsg bg-light mt-2 mb-1 pb-1 pt-2 fixed-bottom">
        <div class="col-sm-12">
            <span class="mx-2">Envie sua Resposta</span>
            <form action="{{route('topicMessage.store',['topic_id' => $topic->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-row">
                    <div class="col-sm-10 pl-2 m-0 d-flex align-items-center">
                        <label class="m-0" for="exampleFormControlTextarea"></label>
                        <input textarea class="form-control mr-2 @error('message') is-invalid @enderror" name="message" type="text" value="{{old('message')}}" id="exampleFormControlTextarea" rows="1" required></textarea>
                            @error('message')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                    <div class="col-sm-2 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mb-2 mt-2">Responder</button>
                    </div>
            </form>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="hidden" name="topic_id" value="{{$topic->id}}">
            <input type="hidden" name="group_id" value="{{$topic->group_id}}">
        </div>
    </section>
@endsection