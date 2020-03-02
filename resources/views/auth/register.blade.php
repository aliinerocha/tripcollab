@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{url('css/cdastro-login.css')}}">
@section('titulo')
    TripCollab
@endsection

@section('conteudo')
    <div class="containerDesktop">
    <div class="container">
        <section class="mt-4 mb-4">
            <h3 class="text-center"><img class="ml-3 mr-3" src="./img/Vector.png" alt="viagem">Suas viagens começam aqui! </h3>
        </section>

        <section class="box">

            <button type="button" class="btn-logar btn btn-block shadow-sm p-2 m-1 mb-2 rounded"><a class="fb-ic mr-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>Cadastre-se com Facebook</button>
            <button type= "button" class="btn-logar btn btn-block shadow-sm p-2 m-1 rounded"><a class="gplus-ic mr-3" role="button"><i class="fab fa-lg fa-google-plus-g"></i></a>Cadastre-se com Google</button>
            
            <!--<div class="d-flex align-items-center mt-4">
                <hr class= "col-3">
                <span class="col-6 text-center p-0 div-form">ou preencha o formulário abaixo</span>
                <hr class="col-2 m-0">
            </div>-->

            <h6 class="text-center mt-4 mb-2" style="color: #1D6AB0">ou preencha o formulário abaixo</h6>

            <form method="POST" action="{{ route('register') }}">
                @csrf 
                <div class="form-group">
                    <label for="name"><!--{{ __('Name') }}--></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nome">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong><!--{{ $message }}--></strong>
                        </span>
                    @enderror

                    <label for="email"><!--{{ __('E-Mail Address') }}--></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Entre com email" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password"><!--{{ __('Password') }}--></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Crie uma Senha" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password-confirm"><!--{{ __('Confirm Password') }}--></label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirme sua Senha" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Concordo com os <a href="#">termos e condições.</a></label>
                </div>
                <div class="d-flex justify-content-center mb-2">
                <button type="submit" class="btn-cadastre btn btn-light shadow-sm rounded w-100">{{ __('Register') }}</button>
            </div>

                <h6>Já tem cadastro? Faça seu <a href="{{route('login')}}">login</a> agora</h6>

            </form>
        </section>
    </div>
    </div>
@endsection
