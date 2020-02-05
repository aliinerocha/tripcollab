<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonte Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <!-- Meu CSS -->
    <link rel="stylesheet" href="./css/perfil.css">
    <title>Editar Perfil</title>
    <link rel="icon" href="./img/icone_logo.png">
</head>

<body>

    <!-- NAV SUPERIOR -->
    <nav class="navbar sticky-top">
        <a class="navbar-brand" href="aba_home.html"><img src="./img/logo branco.png" alt="logo Trip Collab"> TRIP
            COLLAB</a>
        <div class=" d-flex justify-content-end align-items-center">
            <a class="nav-link d-flex align-items-center" href="#"><i
                    class="material-icons mr-2">account_circle</i><span class="mr-5">SAIR</span></a>
            <a class="btn iconeNav mr-3 p-0" href="aba_menu.html"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <!-- NAV SUPERIOR -->

    <!-- Formulário -->
    <div class="container-fluid p-0">

        <!-- Formulário de Cadastro do Usuário -->
        <section class="usuario bg-light mb-2 px-3 py-4">
            <h5 class="nome ml-3 py-1">Cadastro do Usuário</h5>
            <form>
                <div class="form-row mx-3">
                    <div class="col-sm-6 mb-3">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control is-valid" id="nome"
                            placeholder="Digite o seu nome" value="Nome do Usuário" required>
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" class="form-control is-valid" id="email"
                            placeholder="Digite o seu e-mail" value="usuário@email.com" required>
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>
                </div>
                <div class="form-row mx-3">
                    <div class="col-sm-6 mb-3">
                        <label for="senha">Senha</label>
                        <input name="senha " type="password" class="form-control is-invalid" id="senha"
                            placeholder="Digite a sua senha" required>
                        <div class="invalid-feedback">
                            Digite a sua senha!
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="confirmaSenha">Confirme a sua Senha</label>
                        <input name="confirmaSenha " type="password" class="form-control is-invalid" id="confirmaSenha"
                            placeholder="Digite a sua senha novamente" required>
                        <div class="invalid-feedback">
                            Confirme a sua senha!
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- Formulário de Cadastro do Usuário -->

        <!-- Formulário de Perfil do Usuário -->
        <section class="usuario bg-light mb-2 px-3 py-4">
            <h5 class="nome ml-3 pb-3">Perfil do Usuário</h5>

            <!-- Foto da Capa -->
            <h7 class="capa ml-3">Foto da capa</h7>
            <div class="col-xs-12 capa p-0 mx-3 my-3 border">
                <img class="rounded" src="./img/foto_capa.png">
            </div>
            <div class="form-group col-12 m-3 pb-3">
                <label for="foto">Selecione um arquivo</label>
                <input class="form-control-file is-invalid" name="foto" type="file" id="foto" required>
            </div>
            <!-- Foto da Capa -->

            <!-- Foto do Usuário -->
            <h7 class="foto ml-3">Foto do usuário</h7>
            <div class="col-xs-12 foto p-0 mx-4 my-3">
                <img src="./img/foto_usuario.png" class="rounded-circle border" style="width:100px; height: 100px">
            </div>
            <div class="form-group col-12 m-3 pb-3">
                <label for="foto">Selecione um arquivo</label>
                <input class="form-control-file is-invalid" name="foto" type="file" id="foto" required>
            </div>
            <!-- Foto do Usuário -->

            <!-- Dados do Usuário -->
            <h7 class="foto ml-3 my-3">Dados do usuário</h7>
            <form>
                <div class="form-row mx-3 my-3">
                    <div class="col-md-4 mb-3">
                        <label for="cidade">Cidade</label>
                        <input name="cidade" type="text" class="form-control is-valid" id="cidade"
                            placeholder="Digite a sua cidade" value="São Paulo" required>
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control is-valid" id="estado" placeholder="Digite o seu estado"
                            value="SP" required>
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="pais">País</label>
                        <input type="text" class="form-control is-valid" id="pais" placeholder="Digite o seu país"
                            value="Brasil" required>
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>
                </div>

                <div class="col-12 my-3">
                    <label for="descricao">Descrição do usuário</label>
                    <textarea name="descricao" id="descricao" cols="30" rows="5" class="form-control">Breve descrição do usuário para encontrar e ser encontrado por outros usuários da comunidade. Pode inserir dados como interesses pessoais, idiomas que fala etc.
                    </textarea>
                </div>

                <div class="col-12 my-3">
                    <label for="descricao">Visibilidade do perfil</label>
                    <textarea name="descricao" id="descricao" cols="30" rows="5" class="form-control">Ajustar!!!
                    </textarea>
                </div>
            </form>
            <!-- Dados do Usuário -->
        </section>
        <!-- Formulário de Perfil do Usuário -->

        <!-- Interesses -->
        <section class="usuario bg-light mb-2 px-3 pb-4">
            <h5 class="nome mx-3 pt-4">Interesses</h5>
            <div class="col-xs-12">
                <div class="row interesses text-justify mx-3 py-2">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, ducimus. Quibusdam dignissimos
                    reprehenderit placeat quas modi, ipsa temporibus omnis labore aspernatur, fugit officia delectus
                    iure. Eveniet deleniti odio explicabo ipsum!
                </div>
            </div>
        </section>
        <!-- Interesses -->

        <section class="usuario bg-light mb-2 px-3 py-2">
            <div class="form-group mx-4">
                <div class="form-check my-3">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Concordo com Termos e Condições
                    </label>
                    <div class="invalid-feedback">
                        Por favor, selecione antes de enviar.
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="aba_perfil.html" class="btn btn-secondary mt-2" style="width: 100px">Enviar</a>
                </div>
            </div>
        </section>
    </div>
    <!-- Formulário -->

    <!-- NAV INFERIOR -->
    <div class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">

        <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="fas fa-atlas fa-lg col-2"></a>
        <a href="#" class="far fa-comments fa-lg col-2"></a>
        <a href="aba_perfil.html" class="fas fa-home fa-lg col-2 ativo"></a>
        <a href="aba_comunidade.html" class="fas fa-users fa-lg col-2"></a>
        <a href="#" class="fas fa-search fa-lg col-2"></a>
    </div>

    <!-- NAV INFERIOR 
    <div class="nav-inferior nav fixed-bottom d-flex justify-content-between align-items-center border-top col-12 px-2">
        <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="d-flex flex-column align-items-center py-2">
            <i class="fas fa-atlas fa-2x"></i>
            <span>Scrapbook</span>
        </a>
        <a href="#" class=" d-flex flex-column align-items-center py-2">
            <i class="far fa-comments fa-2x"></i>
            <span>Chat</span>
        </a>
        <a href="./aba_perfil.html" class="  d-flex flex-column align-items-center ativo pt-1 pb-2">
            <i class="fas fa-home fa-2x"></i>
            <span class="selecionado">Home</span>
        </a>
        <a href="./aba_comunidade.html" class="  d-flex flex-column align-items-center py-2">
            <i class="fas fa-users fa-2x"></i>
            <span>Comunidade</span>
        </a>
        <a href="./aba_comunidade.html" class="  d-flex flex-column align-items-center py-2">
            <i class="fas fa-search fa-2x"></i>
            <span>Busca</span>
        </a>
    </div>
    NAV INFERIOR -->

</body>

</html>