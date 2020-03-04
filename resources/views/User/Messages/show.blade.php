@extends('layouts.templateMessage')

@section('css')
<link rel="stylesheet" href="{{url('css/stylesChat.css')}}">
@endsection

@section('titulo')
    Mostrar Mensagem
@endsection

@section('conteudo')
     <!-- NAV SUPERIOR -->
      <!-- <nav class="navbar sticky-top">
            <a class="navbar-brand" href="aba_home.html"><img src="./img/logo branco.png" alt="logo Trip Collab"> TRIP COLLAB</a>
            <div class=" d-flex justify-content-end align-items-center">
                <a class="nav-link d-flex align-items-center" href="#"><i
                        class="material-icons mr-2">account_circle</i><span class="mr-5">SAIR</span></a>
                <a class="btn iconeNav mr-3 p-0" href="aba_menu.html"><i class="material-icons">menu</i></a>
            </div>
    </nav> -->
    <!-- NAV SUPERIOR -->

    <div class="containerDesktop">
        <!-- Formulário -->
        <div class="container ">    
                <div class="d-flex align-items-center mt-4">
                    <hr class= "col-3">
                    <span class="col-6 div-form"> <h2>John Doe</h2></span>
                    <hr class="col-3">
                </div>
            
                <section class="enviarMensagens">
                    <form method="post">
                    @csrf
                        <div class="msg propria">
                            <div>
                                <!-- Foto do Usuário --> 
                                <div class="col-xs-12 p-0">
                                        <img src="./img/foto_usuario.png" class="rounded-circle media-object" style="width:50px; height: 50px">
                                </div>
                                <div class="usuario">EU</div>
                                <div class="hora">February 21, 2019 09:35</div>
                                <div class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident exercitationem id numquam quam quos, ipsam quae magni illum harum vitae quidem, inventore aspernatur enim ad aperiam, quod sit temporibus illo?<span id="dots">...</span></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="msg alheia">
                            <div>
                                <!-- Foto do Usuário --> 
                                <div class="col-xs-12 p-0">
                                        <img src="./img/foto_usuario.png" class="rounded-circle media-object" style="width:50px; height: 50px">
                                </div>
                                <div class="usuario">John Doe</div>
                                <div class="hora">February 21, 2019 09:40</div>
                                <div class="texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque est ex dolorum cumque molestias aut iusto deserunt, nemo exercitationem qui ex.</div>
                            </div>
                        </div>
                
            
                        <div class="form-group align-items-center">
                        <div class="form-group ">
                                
                                <textarea maxlength="30000" class="composeBox-textArea" id="messaging-text"
                                placeholder="Diga alguma coisa legal…" style="overflow: hidden; overflow-wrap: break-word; height: 50px; width: 100%; "></textarea>
                                <button type="submit" class="btn botao btn-primary float-right border-0">Enviar</button>
                            </div>
                    
                        </div>

                    
                    </form>           
                </section>
            </div> 
        <!-- Formulário -->
    </div> 
@endsection