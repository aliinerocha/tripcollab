@extends('layouts.template')

@section('titulo')
    TripCollab
@endsection

@section('conteudo')

    <div class="container">
        <section class="mt-4 mb-4">
            <img class="ml-3 mr-3" src="./img/viajando.png" alt="pessoa com mala">
            <h3 class="text-center">Bem-vindo Novamente</h3>

            <form form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div class="col-md-4 mb-3">
                        <label for="email"></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="password"></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Senha">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted text-right"> <a href="{{ route('password.request') }}">Esqueceu sua senha? </a> </small>
                    </div>
                </div>
                <div class="align-self-center">
                    <button type="submit" class="btn-cadastre btn-lg p-2 m-2 shadow rounded w-100">{{ __('Login') }}</button>
                    <h5>Ainda não tem cadastro?<a href="{{route('register')}}">Cadastre-se</a> </h5>
                </div>
            </form>
        </section>
@endsection
