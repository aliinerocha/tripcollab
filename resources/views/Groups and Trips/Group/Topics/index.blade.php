@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Tópicos da Comunidade {{$group->name}}
@endsection

@section('conteudo')

<!-- BANNER -->
<main>
    <img src="" class="img-fluid banner-img" alt="banner">
</main>
<main>
    <img src="{{url('./img/default_cover.jpg')}}" class="img-fluid banner-img" alt="banner">
</main>

<div class="containerDesktop">
        <!-- NAV ABA-->
        <div class="pt-4 pb-4 card menu-voltar bg-light">
            <a  href="{{route('group.show',['id' => $group->id])}}" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
                <i class="material-icons mr-3 back stretched-link">arrow_back</i>      
                <h5>{{$group->name}}</h5>
            </a>
        </div>

    <!-- FÓRUM -->

{{-- <section class="bg-light pt-2 pb-2 mx-3 mx-md-0">
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
        </div>
        <div class="input-group mx-1">
            <input type="text" class="form-control border-0" placeholder="Buscar">
            <div class="input-group-append">
                <span class="input-group-text border-0">
                    <i class="material-icons">search</i>
                </span>
            </div>
</section> --}}
         {{-- <div class="mx-1 my-2">
            <a href="{{route('topic.create',['group_id' => $group->id])}}" class="botao btn btn-primary border-0">Novo tópico</a>
        </div> --}}
<section class="bg-light pt-3 pb-3 p-md-0 mb-4">
        <div class="input-group ml-3 mr-3 m-md-0">
            <input type="text" class="form-control border-0" placeholder="Buscar">
            <span class="input-group-text border-0 mr-3 m-md-0"><i class="material-icons">search</i></span>
        </div>
</section>

</section>
        @foreach ($topics as $topic)
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
        </section>
    </div>
@endsection
