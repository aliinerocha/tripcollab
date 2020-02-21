@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Mostrar Fórum
@endsection

@section('conteudo')

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
                        <img class="foto-perfil rounded-circle display-column" src="{{url('./img/perfil.1.jpg')}}" alt="foto de perfil do membro"> 
                        <div class="small">Angelina</div>
                    </div>

                    <div class="d-flex flex-column w-100 ml-2">
                        <h5 class="card-title mb-auto">{{$topic->name}}</h5>
                        <div class="w-100 small d-flex align-items-end flex-column"><span>{{$topic->created_at->format('d-m-Y')}}</span></div>
                    </div>
                </div>

                <div class="mt-2">
                        {{$topic->description}}
                </div>

                <div class="d-flex w-100 mt-3 justify-content-between">
                    <div class="d-flex">
                        <span class="d-flex mr-1"><i class="material-icons">thumb_up</i><span>142</span></span>
                        <span class="d-flex mr-1"><i class="material-icons mr-1">thumb_down</i><span>2</span></span>
                    </div>

                    <span class="d-flex mr-2">
                        
                            <i class="material-icons mr-1">chat</i>
                            <span class="justify-content-center">2 respostas</span>

                    </span>

                    <div>
                        <a href="" class="text-muted link-detalhes">Responder</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- RESPOSTAS -->

    <div class="d-flex mx-2 justify-content-between">
        <span>Respostas</span>
        <span>Classificar</span>
    </div>

    <!-- RESPOSTA 1 -->
    
    <section class="bg-light mt-2 mb-1 pb-1">

        <div class="col-md-8">
            <div class="card-body px-0">
    
                 <div class="">
                    
                        <img class="foto-perfil rounded-circle display-column mr-2" src="{{url('./img/perfil.4.jpg')}}" alt="foto de perfil do membro"> 
                        <b class="mb-0 pb-0">Fernando</b> Oi Angelina, as praias que mais gostei foram as brasileiras
                </div>

                <div class="d-flex w-100 mt-3 justify-content-between small">
                    <div class="d-flex">
                        <span class="d-flex mr-2">
                            <i class="material-icons">
                                thumb_up
                            </i>
                            <span class="align-self-center">
                                186
                            </span>
                        </span>
                        <span class="d-flex">
                            <i class="material-icons mr-1">
                                thumb_down
                            </i>
                            <span class="align-self-center">
                                22
                            </span>
                        </span>
                    </div>

                    <div class="w-100 d-flex ml-3 justify-content-around">
                        <span>12 de abril de 2020</span>

                        <span class="d-flex mr-2">
                        
                            <i class="material-icons mr-1">chat</i>
                            <span class="justify-content-center">12 respostas</span>

                        </span>
                        
                    </div>
                    <div>
                        <a href="" class="text-muted link-detalhes">
                            Responder
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RESPOSTA 2 -->

    <section class="bg-light mt-2 mb-1 pb-1">

            <div class="col-md-8">
                <div class="card-body px-0">
        
                     <div class="">
                        
                            <img class="foto-perfil rounded-circle display-column mr-2" src="{{url('./img/perfil.3.jpg')}}" alt="foto de perfil do membro"> 
                            <b class="mb-0 pb-0">Roberta</b> Polinésia francesa
                    </div>
    
                    <div class="d-flex w-100 mt-3 justify-content-between small">
                        <div class="d-flex">
                            <span class="d-flex mr-2">
                                <i class="material-icons mr-1">
                                    thumb_up
                                </i>
                                <span class="align-self-center">
                                    98
                                </span>
                            </span>
                            <span class="d-flex">
                                <i class="material-icons mr-1">
                                    thumb_down
                                </i>
                                <span class="align-self-center">
                                    12
                                </span>
                            </span>
                        </div>
    
                        <div class="w-100 d-flex ml-3 justify-content-around">
                            <span>25 de abril de 2020</span>
    
                            <span class="d-flex mr-2">
                            
                                <i class="material-icons mr-1">chat</i>
                                <span class="justify-content-center">8 respostas</span>
    
                            </span>
                            
                        </div>
                        <div>
                            <a href="" class="text-muted link-detalhes">
                                Responder
                            </a>
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Formulário de Respostas -->
<section class="form-respostaMsg bg-light mt-2 mb-1 pb-1 pt-2 fixed-bottom">
    <div class="col-sm-12">
        <span class="mx-2">Respostas</span>
        <form action="{{route('topicMessage.store')}}" method="POST">
        @csrf
            <div class="form-row">
                <div class="col-sm-10 pl-2 m-0 d-flex align-items-center">
                    <label class="m-0" for="exampleFormControlTextarea"></label>
                    <input textarea class="form-control mr-2 @error('message') is-invalid @enderror" name="message" type="text" value="{{old('message')}}" id="exampleFormControlTextarea" rows="1">0</textarea>
                        @error('message')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                </div>
                <div class="col-sm-2 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mb-2">Responder</button>
                </div>
        </form>
    </div>
</section>
@endsection