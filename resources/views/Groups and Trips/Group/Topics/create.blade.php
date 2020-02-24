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
    <input type="hidden" name="group_id" value="{{$group->id}}">
    <form action="{{route('topic.store', ['id' => $group->id])}}" method="POST" enctype="multipart/form-data" class="col-10 offset-1" >
        @csrf 

            <div class="form-group mt-4" >
                <label>Nome do Topico</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mt-4">
                <label>Descrição</label>
                <textarea class="form-control @error('description') is-invalid @enderror"  type="text" name="description" value="{{old('description')}}" rows="3"></textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <div class="form-group mt-4">
                <button type="submit" class="btn botao btn-primary float-right border-0">Criar Topico</button>
            </div>

        </form>
    </div>        
@endsection
