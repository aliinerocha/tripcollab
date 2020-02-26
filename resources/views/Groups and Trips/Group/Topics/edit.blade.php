@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Editar Tópico
@endsection

@section('conteudo')
    
    <!-- Formulário -->
    <div class="container ">    
        <div class="d-flex align-items-center mt-4">
            <hr class= "col">
            <h2>Editar Tópico</h2></span>
            <hr class="col">
        </div>
    </div> 
    <div class="row">
        <form action="{{route('topic.update', ['id' => $topic->id])}}" method="POST" class="col-10 offset-1" >
        @csrf 
        @method("PUT")
            <div class="form-group mt-4" >
                <label>Nome do Tópico</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$topic->name}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mt-4">
                <label>Descrição</label>
                <input textarea class="form-control @error('description') is-invalid @enderror"  type="text" name="description" value="{{$topic->description}}">
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="row d-flex justify-content-end m-0">
                    <div class="form-group d-flex justify-content-end">
                        <a href="comunidadesEViagens" class="btn botao_atencao mr-2">Cancelar</a>
                        <button type="submit" href="comunidadesEViagens" class="btn botao btn-primary float-right border-0 mr-2">Salvar</button>
                    </div>
                    

                </form>
                <form action="{{route('topic.destroy',['id' => $topic->id])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
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