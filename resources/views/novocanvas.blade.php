@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="row">
            <center>
                <div > <img src="{{ Auth::user()->avatar }}" class="img-rounded">   </div>
                <div class="nome">{{ Auth::user()->name }}</div>
            </center>
            </div>
            <div class="row" style="margin-top: 100px;">
            
                <div class="menulateral"><a href="{{ url('/duvidas') }}">Dúvidas</a></div>
                <div class="menulateral"><a href="{{ url('/oquee') }}">O que é Canvas</a></div>
                <div class="menulateral" style="padding-bottom: 20px"><a href="{{ url('/sobre') }}">Sobre</a></div>
            
            </div>
            
        </div>

        <div class="col-md-10">
            <div class="panel panel-default">
            
                
            <div class="row">
                <div class="container">
                    <input type="text" id="titulo" name="titulo" placeholder="Titulo" style="width: 82%; padding: 6px 19px;margin-bottom: 30px;font-size: 35px; font-size: 3.1875rem;; font-weight: 100;color: #627383; border: 0;border-bottom: 1px solid #DEE0E1;outline: 0;">
                </div>
            </div>
            <div class="row">
                <div class="container" style="width: 100%">
                    <div class="col-md-15">
                        <div class="canvasColuna" style="height: 430px">
                            <header style="padding: 7px;">
                                <h3 class="board-title red">Parceiros Chave</h3>
                            </header>
                            <div class="bodycanvas"><ul class="post-it" id="post-it-parceiros"></ul></div>

                        </div>
                        <div>
                            <a href="#"  data-toggle="modal" data-target="#parceiros">
                                <div style="height: 30px; width: 100%; background-color: #efefef;padding-top: 5px;font-weight: bold;color: #000;"> 
                                    <center>+ adicionar</center>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-15">
                       <div class="canvasColuna" style="height: 199px; margin-bottom: 3px">
                            <header style="padding: 7px;">
                                <h3 class="board-title" style="border-color: #DC75B0;">Atividades Chave</h3>
                            </header>
                            <div class="bodycanvas"><ul class="post-it" id="post-it-atividades"></ul></div>
                        </div>
                         <div>
                            <a href="#"  data-toggle="modal" data-target="#atividades">
                                <div style="height: 30px; width: 100%; background-color: #efefef;padding-top: 5px;font-weight: bold;color: #000;"> 
                                    <center>+ adicionar</center>
                                </div>
                            </a>
                        </div>
                        <div class="canvasColuna" style="height: 199px">
                            <header style="padding: 7px;">
                                <h3 class="board-title" style="border-color: #62B81A;">Recursos Chave</h3>
                            </header>
                            <div class="bodycanvas" ><ul class="post-it" id="post-it-recursos"></ul></div>
                        </div>
                         <div>
                            <a href="#"  data-toggle="modal" data-target="#recursos">
                                <div style="height: 30px; width: 100%; background-color: #efefef;padding-top: 5px;font-weight: bold;color: #000;"> 
                                    <center>+ adicionar</center>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-15">
                        <div class="canvasColuna" style="height: 430px">
                            <header style="padding: 7px;">
                                <h3 class="board-title" style="    border-color: #FDBB45;">Proposta de Valor</h3>
                            </header>
                            <div class="bodycanvas"><ul class="post-it" id="post-it-proposta"></ul></div>
                        </div>
                        <div>
                            <a href="#"  data-toggle="modal" data-target="#proposta">
                                <div style="height: 30px; width: 100%; background-color: #efefef;padding-top: 5px;font-weight: bold;color: #000;"> 
                                    <center>+ adicionar</center>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-15">
                        <div class="canvasColuna" style="height: 199px; margin-bottom: 3px">
                            <header style="padding: 7px;">
                                <h3 class="board-title" style="border-color: #FD7538;">Relação com o Cliente</h3>
                            </header>
                            <div class="bodycanvas"><ul class="post-it" id="post-it-relacao"></ul></div>
                        </div>
                        <div>
                            <a href="#"  data-toggle="modal" data-target="#relacao">
                                <div style="height: 30px; width: 100%; background-color: #efefef;padding-top: 5px;font-weight: bold;color: #000;"> 
                                    <center>+ adicionar</center>
                                </div>
                            </a>
                        </div>
                        <div class="canvasColuna" style="height: 199px">
                            <header style="padding: 7px;">
                                <h3 class="board-title" style="border-color: #62B81A;">Canais</h3>
                            </header>
                            <div class="bodycanvas"><ul class="post-it" id="post-it-canais"></ul></div>
                        </div>
                        <div>
                            <a href="#"  data-toggle="modal" data-target="#canais">
                                <div style="height: 30px; width: 100%; background-color: #efefef;padding-top: 5px;font-weight: bold;color: #000;"> 
                                    <center>+ adicionar</center>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="col-md-15">
                        <div class="canvasColuna" style="height: 430px">
                            <header style="padding: 7px;">
                                <h3 class="board-title" style="    border-color: #15C88E;">Segmentos de Mercado</h3>
                            </header>
                            <div class="bodycanvas"><ul class="post-it" id="post-it-segmentos"></ul></div>
                        </div>
                        <div>
                           <a href="#"  data-toggle="modal" data-target="#segmentos">
                                <div style="height: 30px; width: 100%; background-color: #efefef;padding-top: 5px;font-weight: bold;color: #000;"> 
                                    <center>+ adicionar</center>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row" style="margin-top: 6px">
                <div class="col-md-6" style="padding-right: 3px">
                    <div class="canvasColuna" style="height: 200px">
                            <header style="padding: 7px;">
                                <h3 class="board-title" style="    border-color: #15C88E;">Estrutura de Custos</h3>
                            </header>
                            <div class="bodycanvas"><ul class="post-it" id="post-it-custos"></ul></div>
                    </div>
                    <div>
                            <a href="#"  data-toggle="modal" data-target="#custos">
                                <div style="height: 30px; width: 100%; background-color: #efefef;padding-top: 5px;font-weight: bold;color: #000;"> 
                                    <center>+ adicionar</center>
                                </div>
                            </a>
                        </div>
                </div>
                <div class="col-md-6" style="padding-left: 3px">
                        <div class="canvasColuna" style="height: 200px">
                            <header style="padding: 7px;">
                                <h3 class="board-title" style="    border-color: #15C88E;">Fontes de Renda</h3>
                            </header>
                            <div class="bodycanvas"><ul class="post-it" id="post-it-fontes"></ul></div>
                        </div>
                        <div>
                            <a href="#"  data-toggle="modal" data-target="#fontes">
                                <div style="height: 30px; width: 100%; background-color: #efefef;padding-top: 5px;font-weight: bold;color: #000;"> 
                                    <center>+ adicionar</center>
                                </div>
                            </a>
                        </div>
                </div>

            </div>



            <form id="formExemplo" action="" method="post">
                <textarea style="display: none" id="txtparceiros" name="txtparceiros"></textarea>
                <textarea style="display: none" id="txtatividades" name="txtatividades"></textarea>
                <textarea style="display: none" id="txtrecursos" name="txtrecursos"></textarea>
                <textarea style="display: none" id="txtproposta" name="txtproposta"></textarea>
                <textarea style="display: none" id="txtrelacao" name="txtrelacao"></textarea>
                <textarea style="display: none" id="txtcanais" name="txtcanais"></textarea>
                <textarea style="display: none" id="txtsegmentos" name="txtsegmentos"></textarea>
                <textarea style="display: none" id="txtcustos" name="txtcustos"></textarea>
                <textarea style="display: none" id="txtfontes" name="txtfontes"></textarea>

                <div class="row" style="margin-top: 6px">
                    <div class="btn btn-success pull-right" style="margin-right: 30px;margin-bottom: 10px">Salvar</div>
                </div>
            </form>
            

                   



            
            </div>
        </div>
    </div>
</div>

<!-- Modal parceiros -->
  <div class="modal fade" id="parceiros" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Parceiros</h4>
        </div>
        <div class="modal-body">
          <textarea id="valorparceiros" class="caixatxtCanvas" autofocus></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" id="parceirosadd" class="btn btn-default" data-dismiss="modal">salvar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal parceiros -->
<!-- Modal atividades -->
  <div class="modal fade" id="atividades" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Atividades</h4>
        </div>
        <div class="modal-body">
          <textarea id="valoratividades" class="caixatxtCanvas" autofocus></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" id="atividadesadd" class="btn btn-default" data-dismiss="modal">salvar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal  atividades -->
<!-- Modal recursos -->
  <div class="modal fade" id="recursos" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Recursos</h4>
        </div>
        <div class="modal-body">
          <textarea id="valorrecursos" class="caixatxtCanvas" autofocus></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" id="recursosadd" class="btn btn-default" data-dismiss="modal">salvar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal recursos -->
<!-- Modal proposta -->
  <div class="modal fade" id="proposta" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Proposta</h4>
        </div>
        <div class="modal-body">
          <textarea id="valorproposta" class="caixatxtCanvas" autofocus></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" id="propostaadd" class="btn btn-default" data-dismiss="modal">salvar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal proposta -->
<!-- Modal relacao -->
  <div class="modal fade" id="relacao" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Relacao</h4>
        </div>
        <div class="modal-body">
          <textarea id="valorrelacao" class="caixatxtCanvas" autofocus></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" id="relacaoadd" class="btn btn-default" data-dismiss="modal">salvar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal relacao -->
<!-- Modal canais -->
  <div class="modal fade" id="canais" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">canais</h4>
        </div>
        <div class="modal-body">
          <textarea id="valorcanais" class="caixatxtCanvas" autofocus></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" id="canaisadd" class="btn btn-default" data-dismiss="modal">salvar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal canais -->
<!-- Modal segmentos -->
  <div class="modal fade" id="segmentos" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">segmentos</h4>
        </div>
        <div class="modal-body">
          <textarea id="valorsegmentos" class="caixatxtCanvas" autofocus></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" id="segmentosadd" class="btn btn-default" data-dismiss="modal">salvar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal segmentos -->
<!-- Modal custos -->
  <div class="modal fade" id="custos" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">custos</h4>
        </div>
        <div class="modal-body">
          <textarea id="valorcustos" class="caixatxtCanvas" autofocus></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" id="custosadd" class="btn btn-default" data-dismiss="modal">salvar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal custos -->
<!-- Modal custos -->
  <div class="modal fade" id="fontes" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">fontes</h4>
        </div>
        <div class="modal-body">
          <textarea id="valorfontes" class="caixatxtCanvas" autofocus></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" id="fontesadd" class="btn btn-default" data-dismiss="modal">salvar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal custos -->















<script type="text/javascript">
    $("#parceirosadd").click(function(){
        var conteudo = $('#valorparceiros').val();
        $("#post-it-parceiros").prepend("<li id='cont'><p>"+ conteudo +"<a href='#' class='remover glyphicon glyphicon-trash' style='float: right;'></a></p></li>");

    });
   

    $("#atividadesadd").click(function(){
        var conteudo = $('#valoratividades').val();
        $("#post-it-atividades").prepend("<li id='cont'><p>"+ conteudo +"<a href='#' class='remover glyphicon glyphicon-trash' style='float: right;'></a></p></li>");
    });

    $("#recursosadd").click(function(){
        var conteudo = $('#valorrecursos').val();
        $("#post-it-recursos").prepend("<li id='cont'><p>"+ conteudo +"<a href='#' class='remover glyphicon glyphicon-trash' style='float: right;'></a></p></li>");
    });

    $("#propostaadd").click(function(){
        var conteudo = $('#valorproposta').val();
        $("#post-it-proposta").prepend("<li id='cont'><p>"+ conteudo +"<a href='#' class='remover glyphicon glyphicon-trash' style='float: right;'></a></p></li>");
    });

    $("#relacaoadd").click(function(){
        var conteudo = $('#valorrelacao').val();
        $("#post-it-relacao").prepend("<li id='cont'><p>"+ conteudo +"<a href='#' class='remover glyphicon glyphicon-trash' style='float: right;'></a></p></li>");
    });

    $("#canaisadd").click(function(){
        var conteudo = $('#valorcanais').val();
        $("#post-it-canais").prepend("<li><p>"+ conteudo +"<a href='#' class='remover glyphicon glyphicon-trash' style='float: right;'></a></p></li>");
    });

    $("#segmentosadd").click(function(){
        var conteudo = $('#valorsegmentos').val();
        $("#post-it-segmentos").prepend("<li><p>"+ conteudo +"<a href='#' class='remover glyphicon glyphicon-trash' style='float: right;'></a></p></li>");
    });

    $("#custosadd").click(function(){
        var conteudo = $('#valorcustos').val();
        $("#post-it-custos").prepend("<li><p>"+ conteudo +"<a href='#' class='remover glyphicon glyphicon-trash' style='float: right;'></a></p></li>");
    });

    $("#fontesadd").click(function(){
        var conteudo = $('#valorfontes').val();
        $("#post-it-fontes").prepend("<li><p>"+ conteudo +"<a href='#' class='remover glyphicon glyphicon-trash' style='float: right;'></a></p></li>");
    });


$(".btn-success").click(function(){
    var parceiro = $("#post-it-parceiros").html();
    $("#txtparceiros #cont").remove();
    $("#txtparceiros").prepend(parceiro);

    var atividade = $("#post-it-").html();
    $("#txtatividades #cont").remove();
    $("#txtatividades").prepend(atividade);

    var recursos = $("#post-it-recursos").html();
    $("#txtrecursos #cont").remove();
    $("#txtrecursos").prepend(recursos);

    var proposta = $("#post-it-proposta").html();
    $("#txtproposta #cont").remove();
    $("#txtproposta").prepend(proposta);

    var relacao = $("#post-it-relacao").html();
    $("#txtrelacao #cont").remove();
    $("#txtrelacao").prepend(relacao);

    var canais = $("#post-it-canais").html();
    $("#txtcanais #cont").remove();
    $("#txtcanais").prepend(canais);

    var segmentos = $("#post-it-segmentos").html();
    $("#txtsegmentos #cont").remove();
    $("#txtsegmentos").prepend(segmentos);

    var custos = $("#post-it-custos").html();
    $("#txtcustos #cont").remove();
    $("#txtcustos").prepend(custos);

    var fontes = $("#post-it-fontes").html();
    $("#txtfontes #cont").remove();
    $("#txtfontes").prepend(fontes);

    
            //var dados = jQuery('#enviaFormulario').serialize();
            var formData = {
            'titulo'                : $('#titulo').val(),
            'parceiro'              : $('#txtparceiros').html(),
            'atividade'           : $('#txtatividades').html(),
            'recursos'              : $('#txtrecursos').html(),
            'proposta'             : $('#txtproposta').html(),
            'relacao'            : $('#txtrelacao').html(),
            'canais'            : $('#txtcanais').html(),
            'segmentos'            : $('#txtsegmentos').html(),
            'custos'            : $('#txtcustos').html(),
            'fontes'            : $('#txtfontes').html(),
            'userid'            : {{ Auth::user()->id }}
        };
            $.ajax({
                type: 'POST',
                url: "{{ url('/canvas/salvacanvas.php') }}",
                data: formData,
                success: function(data){
                   alert(data);
                   
                },
                
            });
            
            
       
    
   

});






</script>

@endsection
