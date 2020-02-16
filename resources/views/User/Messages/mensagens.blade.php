@extends('layout.template')

@section('titulo')
    Criar nova Comunidade
@endsection

@section('conteudo') 
<!-- Formulário -->

<div class="container ">    
    <section class="box">     
        <div class="d-flex align-items-center mt-4">
            <hr class= "col-3">
            <span class="col-6 div-form"> <h2>Mensagens</h2></span>
            <hr class="col-3">
        </div>
        <div class="  d-flex align-items-center topBar ffbox">
                <div class="row  ffbox-flex mt-5 mb-5">
                    <div class="ml-5 mr-5">
                        <a href="/user/messages/mensagens" class="  ">
                            <h4> Caixa de entrada </h4>  
                            </a>
                    </div>
                    <div class="ml-5">
                        <a href="/user/messages/novoMensagem" class="p-0 m-0" > 
                        <i class="material-icons icon-messaging-new-message" style="color:#CFCFCF; font-size: 40px;">add_box</i>
                    </a>
                    </div>

                    <!-- <a href="novoMensagem.html" class="p-0 m-0" > 
                        <i class="material-icons icon-messaging-new-message" style="color:#CFCFCF; font-size: 40px;">remove_circle</i>
                    </a> -->
                </div>
        </div>             
    </section>
        <div class="container"> 
            <ul role="navigation">
                <li>
                    <div class="media " id="lerMensagem"  onclick="window.location.href = '/user/messages/verMensagem'" role="navigation">
                        <!-- Foto do Usuário --> 
                        <div class="col-xs-12 p-0">
                                <img src="./img/foto_usuario.png" class="rounded-circle media-object" style="width:50px; height: 50px">
                        </div>
                        <!-- Nested media object -->
                        <div class="media-body">
                            <h4  class="media-heading">John Doe </h4>
                            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. <span id="dots">...</span></p>
                            <small><i>Posted on February  21, 2019 09:40</i></small>
                        </div>
                        <form method="post">
                            <input type="hidden" name="id" value="">
                            <button type="submit" class="btn-floating btn-small waves-effect waves-light">
                                <i class="material-icons">close</i>
                            </button>
                        </form>
                    </div>
                </li>
                <hr>
                <li>
                    <div class="media " id="lerMensagem"  onclick="window.location.href = '/user/messages/verMensagem'" role="navigation">
                            <!-- Foto do Usuário --> 
                        <div class="col-xs-12 p-0">
                                <img src="./img/foto_usuario.png" class="rounded-circle media-object" style="width:50px; height: 50px">
                        </div>
                        <!-- Nested media object -->
                        <div class="media-body">
                            <h4  class="media-heading">John Doe </h4>
                            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. <span id="dots">...</span></p>
                            <small><i>Posted on February  21, 2019 09:40</i></small>
                        </div>
                        <form method="post">
                            <input type="hidden" name="id" value="">
                            <button type="submit" class="btn-floating btn-small waves-effect waves-light">
                                <i class="material-icons">close</i>
                            </button>
                        </form>
                    </div>
                </li>
                <hr>
                <li>
                    <div class="media " id="lerMensagem"  onclick="window.location.href = 'verMensagem.html'" role="navigation">
                            <!-- Foto do Usuário --> 
                        <div class="col-xs-12 p-0">
                                <img src="./img/foto_usuario.png" class="rounded-circle media-object" style="width:50px; height: 50px">
                        </div>
                        <!-- Nested media object -->
                        <div class="media-body">
                            <h4  class="media-heading">John Doe </h4>
                            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. <span id="dots">...</span></p>
                            <small><i>Posted on February  21, 2019 09:40</i></small>
                        </div>
                        <form method="post">
                            <input type="hidden" name="id" value="">
                            <button type="submit" class="btn-floating btn-small waves-effect waves-light">
                                <i class="material-icons">close</i>
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
</div> 
@endsection 