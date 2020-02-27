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
        <form action="{{route('topic.update', ['group_id' => $topic->group_id ,'id' => $topic->id])}}" method="POST" class="col-10 offset-1" >
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
                        <a href="{{route('topic.show',['group_id' => $topic->group_id ,'id' => $topic->id] )}}" class="btn botao_atencao mr-2">Cancelar</a>
                        <button type="submit" href="{{route('topic.show',['group_id' => $topic->group_id ,'id' => $topic->id] )}}" class="btn botao btn-primary float-right border-0 mr-2">Salvar</button>
                    </div>
                    

                </form>
                <form action="{{route('topic.destroy',['group_id' => $topic->group_id ,'id' => $topic->id])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
    </div>        
@endsection