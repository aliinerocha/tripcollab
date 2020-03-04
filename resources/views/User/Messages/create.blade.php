@extends('layouts.templateMessage')

@section('css')
<link rel="stylesheet" href="{{url('css/stylesChat.css')}}">
@endsection

@section('titulo')
    Criar Nova Mensagem
@endsection

@section('conteudo')
      
<div class="containerDesktop">
    <!-- Formulário -->
    <div class="container ">    
        <div class="d-flex align-items-center mt-4">
            <hr class= "col">
            <h2>Nova Conversa</h2></span>
            <hr class="col">
        </div>
    </div> 

    <div id="convoNew-view" class="messagingView unit size2of3">
                 
        
        <form method="post">
             @csrf
            <div class="form-group row">
                <label for="paraUsuario" class="col-2 col-form-label ml-3">Para:</label>
                <div class="recipients col">
                    <div class="recipientTokenizer-input">
                        <input class="" title="Procurar Membros" type="text">
                    </div>
                </div>
            </div>
            
            <div class="form-group align-items-center">
                <div class="form-group col-sm-10 ">
                    
                    <textarea maxlength="30000" class="composeBox-textArea" id="messaging-text"
                    placeholder="Diga alguma coisa legal…" style="overflow: hidden; overflow-wrap: break-word; height: 50px; width: 100%; "></textarea>
                    <button type="submit" class="btn botao btn-primary float-right border-0">Enviar</button>
                </div>
        
            </div>
        </form>
              

        <!-- Formulário -->
       
       <!-- NAV INFERIOR -->
       <div class="nav-inferior nav fixed-bottom d-flex justify-content-around border-top">
           <a href="./Linha do tempo e classificação/aba_linhadotempo.html" class="fas fa-atlas fa-lg col-2"></a>
           <a href="mensagens.html" class="far fa-comments fa-lg col-2 ativo"></a>
           <a href="aba_perfil.html" class="fas fa-home fa-lg col-2 "></a>
           <a href="aba_comunidade.html" class="fas fa-users fa-lg col-2"></a>
           <a href="#" class="fas fa-search fa-lg col-2"></a>
       </div>         
</div>  
@endsection