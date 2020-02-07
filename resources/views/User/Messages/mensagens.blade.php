<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensagens</title>
    <link rel="icon" href="./img/icone_logo.png">
    <link rel="alternate" hreflang="x-default" href="https://secure.meetup.com/messages/">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fontaweasome -->
        <script src="https://kit.fontawesome.com/e369e6f381.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- meu css -->
    <link rel="stylesheet" href="./css/mensagens.css">
   
</head>
<body>
     <!-- NAV SUPERIOR -->
     <nav class="navbar sticky-top">
            <a class="navbar-brand" href="aba_home.html"><img src="./img/logo branco.png" alt="logo Trip Collab"> TRIP COLLAB</a>
            <div class=" d-flex justify-content-end align-items-center">
                <a class="nav-link d-flex align-items-center" href="#"><i
                        class="material-icons mr-2">account_circle</i><span class="mr-5">SAIR</span></a>
                <a class="btn iconeNav mr-3 p-0" href="aba_menu.html"><i class="material-icons">menu</i></a>
            </div>
    </nav>
    <!-- NAV SUPERIOR -->
    
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
    
     <!-- Formulário -->
    
    <!-- NAV INFERIOR -->
    <div class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">
        <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="fas fa-atlas fa-lg col-2"></a>
        <a href="mensagens.html" class="far fa-comments fa-lg col-2 ativo"></a>
        <a href="aba_perfil.html" class="fas fa-home fa-lg col-2 "></a>
        <a href="aba_comunidade.html" class="fas fa-users fa-lg col-2"></a>
        <a href="#" class="fas fa-search fa-lg col-2"></a>
    </div>
</body>
</html>