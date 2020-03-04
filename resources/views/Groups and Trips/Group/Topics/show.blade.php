@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Tópico: {{$topic->name}}
@endsection

@section('conteudo')
<div class="containerDesktop">
    <div class="pt-4 pb-4 card menu-voltar">
        <a  href="" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
            <i class="material-icons mr-3 back stretched-link">arrow_back</i>      
            <h5>Nome do grupo</h5>
        </a>
    </div>

    <!-- BANNER -->
    {{-- <main class="mb-3">
        <img src="{{url('./img/default_cover.jpg')}}" class="img-fluid banner-img" alt="banner">
    </main> --}}

    <!-- FÓRUM -->

    <!-- TÓPICO -->
    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-md-8">
            <div class="card-body px-0">

                <div class="">
                    <div class="">
                        <h5 class="card-title mb-auto">{{$topic->name}}</h5>
                        <img class="foto-perfil rounded-circle mt-2" src="@if($topic->user->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif" alt="foto de perfil do membro {{$topic->user->name}}"> 
                        <div class="mt-2">Criado por: {{$topic->user->name}}</div>
                        <div class="mt-2">Descrição: {{$topic->description}}</div>
                        <div class="mt-2">Em:  {{date('d/m/Y', strtotime($topic->created_at))}}</div>
                    </div>

                </div>
    
                <div class="d-flex w-100 mt-3 justify-content-between">
                    <div class="d-flex">
                        <span class=" mr-3">
                            <a href="{{route('topic.like',['id' => $topic->id])}}">
                                <i class="material-icons">thumb_up</i>
                            </a>
                            <span>{{$topic->likeTopics()->where('like_topic',1)->count()}}</span>
                        </span>
                        <span class="mr-1">
                            <a href="{{route('topic.dislike',['id' => $topic->id])}}">
                                <i class="material-icons mr-1">thumb_down</i>
                            </a>
                            <span>{{$topic->likeTopics()->where('like_topic',0)->count()}}</span>
                        </span>
                    </div>
                    
                    {{-- <span class="d-flex mr-2">
                        
                        <i class="material-icons mr-1">chat</i>
                        <span class="justify-content-center">{{$topic->topicMessages()->count()}} @if ($topic->topicMessages()->count()<=1) resposta @else respostas @endif</span>
                        
                    </span> --}}
                    
                    {{-- <div>
                        <a href="" class="text-muted link-detalhes">Responder</a>
                    </div> --}}
                </div> 
                
                {{-- @if($user->id == $topic->user_id)
                    <div class="mx-1 my-2">
                        <a href="{{route('topic.edit',['id' => $topic->id] )}}" class="botao btn btn-primary border-0">Editar</a>
                    </div>
                @endif --}}
                
            </div>
        </div>
    </section>

    <!-- RESPOSTAS -->

    {{-- <div class="d-flex mx-2 justify-content-between">
        <span>Respostas</span>
        <span>Classificar</span>
    </div> --}}
    
    @foreach ($topicMessages as $topicMessage)
    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-12">
            <div class="card-body px-0">
                 <div class="">
                    
                        <img class="foto-perfil rounded-circle display-column mr-2" src="@if($topic->user->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif"  alt="foto de perfil do membro {{$topicMessage->user->name}}"> 
                        <b class="mb-0 pb-0">{{$topicMessage->user->name}}</b> 
                </div>
                <div class="mt-2">{{$topicMessage->message}}</div>
                <div class="d-flex w-100 mt-3 justify-content-between small">
                    <div class="d-flex">
                        <span class="mr-3">
                            <a href="{{route('topicMessage.like',['id' => $topicMessage->id])}}">
                                <i class="material-icons">thumb_up</i>
                            </a>
                            <span>{{$topicMessage->likeTopicMessages()->where('like_topic_message',1)->count()}}</span>
                        </span>
                        <span class="">
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
    <section class="bg-light mt-2 mb-3 pb-3 pt-2">
            <span class="ml-3 ml-md-0">Envie sua Resposta</span>
            <form action="{{route('topicMessage.store',['topic_id' => $topic->id])}}" method="POST" enctype="multipart/form-data" class="mt-2">
            @csrf
                <div class="form-row col-12">
                        <label class="m-0" for="exampleFormControlTextarea"></label>
                        <input textarea class="form-control @error('message') is-invalid @enderror" name="message" type="text" value="{{old('message')}}" id="exampleFormControlTextarea" rows="1" required></textarea>
                            @error('message')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        <button type="submit" class="btn btn-primary mt-4">Responder</button>
                </div>
            </form>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="hidden" name="topic_id" value="{{$topic->id}}">
            <input type="hidden" name="group_id" value="{{$topic->group_id}}">
    </section>
</div>
@endsection