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
                <div class="panel-heading">Sobre</div>

                <div class="panel-body">
                   Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?

                </div>
            </div>
        </div>
    </div>
</div>
@endsection