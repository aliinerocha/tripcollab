@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
Criar Novo Tópico
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
    <form action="{{route('topic.store', ['group_id' => $group->id])}}" method="POST" enctype="multipart/form-data" class="col-10 offset-1" >
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
                <a href="{{ URL::previous() }}" class="btn botao_atencao mr-2">Cancelar</a>
                <button type="submit" class="btn botao btn-primary float-right border-0">Criar Topico</button>
            </div>
        </div>
        
    </form>
</div>        
@endsection
