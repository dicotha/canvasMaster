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
                <div class="panel-heading">Meus Dados</div>
					<div class="panel-body">
		                <div class="container">
						    <div class="row">
						        

						        <div class="row">
						            <div class="col-sm-8">

						               
						                <form enctype="multipart/form-data" action="/perfil" method="POST">
						                		<div class="form-group float-label-control">
							                        <label for="">Nome</label>
							                        <input type="name" name="name" class="form-control" placeholder="{{ Auth::user()->name }}">
							                    </div>
							                    <div class="form-group float-label-control">
							                        <label for="">Email</label>
							                        <input type="email" name="email" class="form-control" placeholder="{{ Auth::user()->email }}">
							                    </div>
						                	<div class="col-md-6">
						                		<div class="form-group float-label-control">
							                        <label for="">Telefone</label>
							                        <input type="text"  name="telefone" class="form-control telefone" placeholder="{{ Auth::user()->telefone }}">
							                    </div>
							                    <div class="form-group float-label-control">
							                        <label for="">CEP</label>
							                        <input type="text" name="cep" class="form-control" placeholder="{{ Auth::user()->cep }}">
							                    </div>
							                    
							                    <div class="form-group float-label-control">
							                        <label for="">Bairro</label>
							                        <input type="text" name="bairro" class="form-control" placeholder="{{ Auth::user()->bairro }}">
							                    </div>
							                    <div class="form-group float-label-control">
							                        <label for="">Estado</label>
							                        <input type="text" name="estado" class="form-control" placeholder="{{ Auth::user()->estado }}">
							                    </div>
							                    
							                    <div class="form-group float-label-control">
								                    <input type="file" name="avatar"/>
						                    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
						                    		<br>
						                    		<input type="submit" class="pull-left btn btn-small btn-primary">
					                    		</div>
					                    		<br>
					                    		<br>
					                    		<div class="form-group float-label-control">
							                        <label for="">Senha</label>
							                        <input type="password" name="password" class="form-control" placeholder="">
							                    </div>
						                    </div>
						                    <div class="col-md-6">
						                    	<div class="form-group float-label-control">
							                        <label for="">CPF</label>
							                        <input type="text" name="cpf" class="form-control" placeholder="{{ Auth::user()->cpf }}">
							                    </div>
							                    <div class="form-group float-label-control">
							                        <label for="">Nº</label>
							                        <input type="text" name="numero" class="form-control" placeholder="{{ Auth::user()->numero }}">
							                    </div>
							                    <div class="form-group float-label-control">
							                        <label for="">Complemento</label>
							                        <input type="text" name="complemento" class="form-control" placeholder="{{ Auth::user()->complemento }}">
							                    </div>
							                    <div class="form-group float-label-control">
							                        <label for="">Cidade</label>
							                        <input type="text" name="cidade" class="form-control" placeholder="{{ Auth::user()->cidade }}">
							                    </div>
							                    





							                    
							                </div>
												
						                    	
						                    
						                </form>

						            </div>
						            
						        </div>
						    </div>
						</div>





<script type="text/javascript">
$('.telefone').inputmask({
  mask: '(00) 0000-0000'
});

</script>

















                </div>
            </div>
        </div>
    </div>
</div>
@endsection