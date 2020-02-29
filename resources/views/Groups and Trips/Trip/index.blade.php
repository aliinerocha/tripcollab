@extends('layouts.template', ['pagina' => 'perfil'])

@section('titulo')
    Participantes da viagem
@endsection

@section('conteudo')

<div class="bg-light pt-4 pb-4 mb-3">
        <div class="d-flex ml-3 align-items-center">
            <a class="link" href="/comunidade"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Minhas viagens</h5>
            </div>
        </div>
</div>

<main class="bg-light pt-4 pb-4">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="d-flex mt-2 justify-content-center">
                <div class="col-11 p-0">
                    <img src="@if($trip->photo == 'nophoto') {{url('./img/add.png')}} @else {{asset('storage/' . $trip->photo)}} @endif" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto; @if($trip->photo != 'nophoto') border-radius: 25px @endif" alt="...">
                </div>
            </div>
            <div>
                <div class="col-11 p-0">
                    <h5 class="my-4 text-center">{{$trip->name}}</h5>
                </div>
            </div>
            <div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>

                        <a href="#">
                            <img
                            class="foto-perfil rounded-circle"
                            src=""
                            alt="">
                        </a>

                        </td>
                        <td>

                        </td>


                        <td class="d-flex">

                        </td>

                    </tr>
                </tbody>
            </table>

            </div>
        </div>
    </div>
</main>

@endsection
