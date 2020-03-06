@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Tópico: {{$topic->name}}
@endsection

@section('conteudo')
<main>
    <img src="@if($group->photo == 'nophoto') {{url('/img/default_cover.jpg')}} @else{{asset($group->photo)}}@endif" class="img-fluid banner-img" alt="banner">
</main>
<div class="containerDesktop">
    <div class="pt-4 pb-4 card menu-voltar bg-light">
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
    <section class="bg-light mt-2 mb-2 pb-1">

        <div class="col-md-12">
            <div class="card-body px-0">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title mb-2">{{$topic->name}}</h5>
                        @if($user->id == $topic->user_id)
                        <a href="">
                            <i class="far fa-edit fa-lg" style="color:  #7C7C7C"></i>
                        </a>
                        @endif
                    </div>
                        <img class="foto-perfil rounded-circle mt-2" src="@if($topic->user->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif" alt="foto de perfil do membro {{$topic->user->name}}"> 
                        <div class="mt-2">Criado por: {{$topic->user->name}}</div>
                        <div class="mt-2">Descrição: {{$topic->description}}</div>
                        <div class="mt-2">Em:  {{date('d/m/Y', strtotime($topic->created_at))}}</div>

                </div>
                <div class="d-flex w-100 mt-3 justify-content-between">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class=" mr-3">
                            <a href="{{route('topic.like',['id' => $topic->id])}}">
                                <i class="material-icons">thumb_up</i>
                                <span>{{$topic->likeTopics()->where('like_topic',1)->count()}}</span>
                            </a>
                        </span>
                        <span class="mr-1">
                            <a href="{{route('topic.dislike',['id' => $topic->id])}}">
                                <i class="material-icons mr-1">thumb_down</i>
                                <span>{{$topic->likeTopics()->where('like_topic',0)->count()}}</span>
                            </a>
                        </span>
                    </div>
                        <span class="d-flex mr-2">
                            <i class="material-icons mr-1">chat</i>
                            <span class="justify-content-center">{{$topic->topicMessages()->count()}} @if ($topic->topicMessages()->count()<=1) resposta @else respostas @endif</span>        
                        </span>
                    </div>
                </div>

    </section>

                    {{-- @if($user->id == $topic->user_id)
                        <div class="mx-1 my-2">
                            <a href="{{route('topic.edit',['id' => $topic->id] )}}" class="botao btn btn-primary border-0">Editar</a>
                        </div>
                    @endif --}}

                
    <!-- Formulário de Respostas -->
    <section class="bg-light mt-3 mb-3 pb-5 pt-3">
        <div class="col-12 pb-4">
            <span>@if (isset($topicMessageForm)) Edite @else Envie @endif sua Resposta</span>
            @if (isset($topicMessageForm))
                <form action="{{route('topicMessage.update',['id' => $topicMessageForm->id])}}" method="POST" enctype="multipart/form-data" clss="">
                @csrf
                @method("PUT")
            @else
                <form action="{{route('topicMessage.store',['topic_id' => $topic->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
            @endif
                        <label class="" for="exampleFormControlTextarea"></label>
                        <textarea class="form-control mr-2 @error('message') is-invalid @enderror" rows="2" name="message" type="text" id="exampleFormControlTextarea" required>@if (isset($topicMessageForm->message)) {{$topicMessageForm->message}} @else {{old('message')}} @endif</textarea>
                            @error('message')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        <button type="submit" class="btn botao float-right mt-3">@if (isset($topicMessageForm)) Enviar @else Responder @endif</button>
            </form>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="hidden" name="topic_id" value="{{$topic->id}}">
            <input type="hidden" name="group_id" value="{{$topic->group_id}}">
        </div>
    </section>
    <!-- RESPOSTAS -->
{{-- 
    <div class="d-flex mx-2 justify-content-between">
        <span>Respostas</span>
        <span>Classificar</span>
    </div> --}}
    
    @foreach ($topicMessages as $topicMessage)
    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-12 mt-md-5">
            <div class="card-body card-body-respostas px-0 p-md-4">
                 <div>
                        <img class="foto-perfil rounded-circle display-column mr-2" src="@if($topic->user->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif"  alt="foto de perfil do membro {{$topicMessage->user->name}}"> 
                        <b class="mb-0 pb-0">{{$topicMessage->user->name}}</b> 
                        <small class="float-right">{{date('d/m/Y', strtotime($topicMessage->created_at))}}</small>  
                </div>
                <div class="mt-2">{{$topicMessage->message}}</div>
                <div class="d-flex w-100 mt-3 justify-content-between small">
                    <div class="d-flex">
                        <span class="mr-3">
                            <a href="{{route('topicMessage.like',['id' => $topicMessage->id])}}">
                                <i class="material-icons">thumb_up</i>
                                <span>{{$topicMessage->likeTopicMessages()->where('like_topic_message',1)->count()}}</span>
                            </a>
                        </span>
                        <span class="">
                            <a href="{{route('topicMessage.dislike',['id' => $topicMessage->id])}}">
                                <i class="material-icons mr-1">thumb_down</i>
                                <span>{{$topicMessage->likeTopicMessages()->where('like_topic_message',0)->count()}}</span>
                            </a>
                        </span>
                    </div>

                    <div class="d-flex">
                    @if($user->id == $topicMessage->user_id)
                        <a href="{{route('topicMessage.edit',['id' => $topicMessage->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <form action="{{route('topicMessage.destroy',['topic_id' => $topic->id ,'id' => $topicMessage->id])}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger ml-1"><i class="fas fa-trash-alt"></i></button>
                        </form>            
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach 
</div>
@endsection