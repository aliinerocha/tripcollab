@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Criar novo topico
@endsection

@section('conteudo')
    
    <!-- Formulário -->
    <div class="container ">    
        <div class="d-flex align-items-center mt-4">
            <hr class= "col">
            <h2>Novo Topico</h2></span>
            <hr class="col">
        </div>
    </div> 
    <div class="row">
        <form action="{{route('topic.store')}}" method="POST" enctype="multipart/form-data" class="col-10 offset-1" >
        @csrf 

            <div class="form-group mt-4" >
                <label>Nome Topico</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mt-4">
                <label>Descrição</label>
                <input textarea class="form-control @error('description') is-invalid @enderror"  type="text" name="description" value="{{old('description')}}">
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn botao btn-primary float-right border-0">Criar Topico</button>
            </div>

        </form>
    </div>

      
       <!-- NAV INFERIOR -->
       <div class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">
           <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="fas fa-atlas fa-lg col-2"></a>
           <a href="mensagens.html" class="far fa-comments fa-lg col-2 ativo"></a>
           <a href="aba_perfil.html" class="fas fa-home fa-lg col-2 "></a>
           <a href="aba_comunidade.html" class="fas fa-users fa-lg col-2"></a>
           <a href="#" class="fas fa-search fa-lg col-2"></a>
       </div>         
@endsection
