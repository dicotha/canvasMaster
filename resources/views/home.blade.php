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
                <div class="panel-heading">

                    Meus Canvas

                    <a href="{{ url('/novocanvas') }}"><div class="btn btn-xs pull-right btn-success"> Novo Canvas</div></a>


                </div>

                <div class="panel-body">
                   


           <?php  
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "canvasmaster";


                    


                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    if($conn->query("SELECT * FROM `canvas` WHERE `userId` = '1'") === TRUE){
                         echo '
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                
                                    
                                <div class="row">
                                    <div class="container">
                                        <input type="text" id="titulo" name="titulo" placeholder="Titulo" value="$titulo" style="width: 63%; padding: 6px 19px;margin-bottom: 30px;font-size: 35px; font-size: 3.1875rem;; font-weight: 100;color: #627383; border: 0;border-bottom: 1px solid #DEE0E1;outline: 0;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container" style="width: 100%">
                                        <div class="col-md-15">
                                            <div class="canvasColuna" style="height: 430px">
                                                <header style="padding: 7px;">
                                                    <h3 class="board-title red">Parceiros Chave</h3>
                                                </header>
                                                <div class="bodycanvas2"><ul class="post-it" id="post-it-parceiros"></ul></div>

                                            </div>
                                            
                                        </div>
                                        <div class="col-md-15">
                                           <div class="canvasColuna" style="height: 215px; margin-bottom: 3px">
                                                <header style="padding: 7px;">
                                                    <h3 class="board-title" style="border-color: #DC75B0;">Atividades Chave</h3>
                                                </header>
                                                <div class="bodycanvas2"><ul class="post-it" id="post-it-atividades"></ul></div>
                                            </div>
                                             
                                            <div class="canvasColuna" style="height: 214px">
                                                <header style="padding: 7px;">
                                                    <h3 class="board-title" style="border-color: #62B81A;">Recursos Chave</h3>
                                                </header>
                                                <div class="bodycanvas2" ><ul class="post-it" id="post-it-recursos"></ul></div>
                                            </div>
                                             
                                        </div>
                                        <div class="col-md-15">
                                            <div class="canvasColuna" style="height: 430px">
                                                <header style="padding: 7px;">
                                                    <h3 class="board-title" style="    border-color: #FDBB45;">Proposta de Valor</h3>
                                                </header>
                                                <div class="bodycanvas2"><ul class="post-it" id="post-it-proposta"></ul></div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-15">
                                            <div class="canvasColuna" style="height: 215px; margin-bottom: 3px">
                                                <header style="padding: 7px;">
                                                    <h3 class="board-title" style="border-color: #FD7538;">Relação com o Cliente</h3>
                                                </header>
                                                <div class="bodycanvas2"><ul class="post-it" id="post-it-relacao"></ul></div>
                                            </div>
                                            
                                            <div class="canvasColuna" style="height: 214px">
                                                <header style="padding: 7px;">
                                                    <h3 class="board-title" style="border-color: #62B81A;">Canais</h3>
                                                </header>
                                                <div class="bodycanvas2"><ul class="post-it" id="post-it-canais"></ul></div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="col-md-15">
                                            <div class="canvasColuna" style="height: 430px">
                                                <header style="padding: 7px;">
                                                    <h3 class="board-title" style="    border-color: #15C88E;">Segmentos de Mercado</h3>
                                                </header>
                                                <div class="bodycanvas2"><ul class="post-it" id="post-it-segmentos"></ul></div>
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
                                                <div class="bodycanvas2"><ul class="post-it" id="post-it-custos"></ul></div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6" style="padding-left: 3px">
                                            <div class="canvasColuna" style="height: 200px">
                                                <header style="padding: 7px;">
                                                    <h3 class="board-title" style="    border-color: #15C88E;">Fontes de Renda</h3>
                                                </header>
                                                <div class="bodycanvas2"><ul class="post-it" id="post-it-fontes"></ul></div>
                                            </div>
                                            
                                    </div>

                                </div>

 
                                </div>
                            </div>';
                            
                    }
                    else{
                        echo '<div>Erro</div>';
                    }
                    
                    $conn->close(); 
                    
                   


                
             
               ?>














                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
