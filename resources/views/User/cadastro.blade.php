<!DOCTYPE html>
<html lang=""pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <!-- Icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Css -->
    <link href="{{ URL::asset('css/cadastro-login.css') }}" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="logo TripCollab"> TRIPCOLLAB</a>
        <a class="btn iconeNav" href="aba_home.html"><i class="icone material-icons md-light">menu</i></a>

    </nav>
    <div class="container ">
        <section class="mt-4 mb-4">
            <h3><img class="ml-3 mr-3" src="./img/Vector.png" alt="viagem">Suas viagens começam aqui! </h3>
        </section>

        <section class="box">

            <button type="button" class=" btn-logar btn btn-block shadow-sm p-2 m-1 mb-2 rounded"><a class="fb-ic mr-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>Cadastre-se com Facebook</button>
            <button type= "button" class="btn-logar btn btn-block shadow-sm p-2 m-1 rounded"><a class="gplus-ic mr-3" role="button"><i class="fab fa-lg fa-google-plus-g"></i></a>Cadastre-se com Google</button>


            <div class="d-flex align-items-center mt-4">
                <hr class= "col-3">
                <span class="col-6 div-form">ou preencha o formulário abaixo</span>
                <hr class="col-3">
            </div>

            <form>
                <div class="form-group">
                    <label for="exampleInputNome1"></label>
                    <input type="text" class="form-control" id="exampleInputNome1" placeholder="Nome">

                    <label for="exampleInputEmail1"></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com email">

                    <label for="exampleInputPassword1"></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Crie uma Senha">

                    <label for="exampleInputPassword1"></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme sua Senha">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Concordo com os <a href="#">termos e condições.</a></label>
                </div>
                <div class="d-flex justify-content-center mb-2">
                <a href="login.html" class="btn-cadastre btn btn-lg p-2 m-2 shadow-sm rounded">CADASTRE-SE</a>
            </div>

                <h5>Já tem cadastro? Faça seu <a href="login.html">login</a> agora</h5>

            </form>
        </section>
    </div>
</body>
</html>



















