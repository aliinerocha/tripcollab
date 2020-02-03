<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Grupo de Viagem</title>
    <link rel="icon" href="./img/icone_logo.png">
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
    <link rel="stylesheet" href="./css/styles.css">
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
    
        <!-- NAV ABA-->
        <div class="bg-light pt-4 pb-4 mb-3">
            <div class="d-flex ml-3 align-items-center">
                <a class="link" href="aba_comunidade.html"><i class="material-icons">arrow_back</i></a>
                <div class="container">
                    <h5>Criar novo Grupo de Viagem</h5>
                </div>
            </div>
        </div>
    
        <!-- CARD COM OS DETALHES DO GRUPO DE VIAGEM SELECIONADO -->
        <main class="bg-light pt-4 pb-4">
            <div class="row">
                <form method="POST" class="col-10 offset-1">
                        <img src="./img/add.png" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                        <div class="form-group mt-4">
                            <label for="tituloDaViagem">Titulo da viagem:</label>
                            <input type="text" class="form-control" id="tituloDaViagem" placeholder="Insira titulo da viagem">
                        </div>
                        <div class="form-group mt-4">
                            <label for="dataDaViagem">Data:</label>
                            <input type="text" class="form-control mb-2" id="tituloDaViagem" placeholder="Insira a data de partida">
                            <input type="text" class="form-control" id="tituloDaViagem" placeholder="Insira a data de retorno">
                        </div>
                        <div class="form-group mt-4">
                            <label for="palavrasChave">Palavras-chave:</label>
                            <select mutiple class="form-control" id="palavrasChave">
                                <option disabled selected>Selecione as palavras-chave deste grupo</option>
                                <option>Palavra 1</option>
                                <option>Palavra 2</option>
                                <option>Palavra 3</option>
                                <option>Palavra 4</option>
                                <option>Palavra 5</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="vincularComunidade">Vincular à comunidade:</label>
                            <input type="text" class="form-control mb-2" id="vincularComunidade" placeholder="Insira o nome da comunidade">
                        </div>
                        <div class="form-group mt-4">
                            <label for="investimentoPrevisto">Investimento previsto:</label>
                            <input type="text" class="form-control mb-2" id="investimentoPrevisto" placeholder="Insira o investimento previsto">
                        </div>
                        <div class="form-group mt-4">
                            <label for="visibilidadeDoGrupo">Visibilidade do grupo:</label>
                            <select class="form-control" id="visibilidadeDoGrupo">
                                <option disabled selected value="padrao">Selecione o nível de visibilidade do Grupo</option>
                                <option value="publico">Público</option>
                                <option value="amigos">Amigos</option>
                                <option value="amigosDeAmigos">Amigos de amigos</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                        <a href="aba_comunidade.html" class="btn botao_atencao mr-2">Cancelar</a>
                        <a href="aba_comunidade.html" class="btn botao">Salvar</a>
                        </div>
                </form>
            </div>
        </main>
    
        <!-- NAV INFERIOR -->
        <div class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">
            <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="fas fa-atlas fa-lg col-2"></a>
            <a href="#" class="far fa-comments fa-lg col-2"></a>
            <a href="aba_perfil.html" class="fas fa-home fa-lg col-2"></a>
            <a href="aba_comunidade.html" class="fas fa-users fa-lg col-2 ativo"></a>
            <a href="#" class="fas fa-search fa-lg col-2"></a>
        </div>

</body>
<html>
    
</html>