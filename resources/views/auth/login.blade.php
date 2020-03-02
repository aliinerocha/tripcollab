@extends('layouts.template')

@section('titulo')
    TripCollab
@endsection

@section('conteudo')

    <div class="container">
        <section class="mt-4 mb-4">
            
            <h3 class="text-center">
                <img class="rounded" src="./img/viajando.png" width="40" heigth="40" alt="pessoa com mala">
                Bem-vindo Novamente
            </h3>

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

                <div class="align-self-center">
                    <button type="submit" class="btn-cadastre btn btn-light shadow-sm rounded w-100">{{ __('Login') }}</button>
                    <h6>Ainda não tem cadastro?<a href="{{route('register')}}"> Cadastre-se</a></h6>
                </div>
            </form>
        </section>
@endsection
