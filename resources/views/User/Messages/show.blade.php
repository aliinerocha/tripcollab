<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Mensagem</title>
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
            <div class="d-flex align-items-center mt-4">
                <hr class= "col-3">
                <span class="col-6 div-form"> <h2>John Doe</h2></span>
                <hr class="col-3">
            </div>
        
            <section class="enviarMensagens">
                <form method="post">
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