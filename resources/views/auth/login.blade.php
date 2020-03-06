@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{url('css/cadastro-login.css')}}">
@endsection

@section('titulo')
    TripCollab
@endsection

@section('conteudo')
    <div class="containerDesktop">

        <div class="container col-8">
            <section class="mt-4 mb-4">
            
                <img class="rounded mx-auto d-block" src="./img/viajando.png" alt="pessoa com mala"></br>
                <h3 class="text-center">Bem-vindo Novamente</h3>

                <form form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                    
                        <label for="email"></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror            
                        <label for="password"></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Senha">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted text-right"> <a href="{{ route('password.request') }}">Esqueceu sua senha? </a> </small>                    
                    </div>                

                    <div class="d-flex justify-content-center mb-2">
                        <button type="submit" class="btn-cadastre btn btn-block shadow p-2 m-2 rounded">{{ __('Login') }}</button>
                    </div>

                    <h5 class="mt-3 text-secondary">Ainda não tem cadastro? <a href="{{route('register')}}">Cadastre-se</a></h5>

                </form>
            </section>
        </div>
    </div>
@endsection
