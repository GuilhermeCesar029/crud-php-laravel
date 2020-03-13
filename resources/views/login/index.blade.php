@extends('layout.site')

@section('titulo', 'Entrar no sistema')

@section('subtitulo', 'Login')

@section('conteudo')
    <div class="container">
        <h3 class="center">Entrar</h3>
    <div class="row">
    <form class="" action="{{route('site.login.entrar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
            <input type="text" name="email" required>
            <label> <i class="material-icons">email</i> E-mail</label>
        </div>       
        <div class="input-field">
            <input type="password" name="senha" required>
            <label> <i class="material-icons">lock</i> Senha</label>
        </div>

        <button class="btn deep-orange">
            <i class="material-icons right">send</i>
            Entrar
        </button>

        <a class="btn deep-green" href="{{route('site.cadastro')}}">
            Cadastre-se Agora
            <i class="material-icons right">person_add</i>
        </a>
      </form>
    </div>
    </div>

    
@endsection    

