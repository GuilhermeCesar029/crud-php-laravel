@extends('layout.site')

@section('titulo', 'Cadastre-se')

@section('conteudo')
    <div class="container">
        <h3 class="center">Cadastre-se</h3>
        <div class="row">
            <section>
                <form class="" action="{{route('site.cadastro.cadastrar')}}" method="post">
                    {{ csrf_field() }}

                    <div class="input-field">
                        <input type="text" name="name" required>
                        <label>Nome</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="sobrenome" required>
                        <label>Sobrenome</label>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" required>
                        <label>email</label>
                    </div>       
                    <div class="input-field">
                        <input type="password" name="password" required>
                        <label>Senha</label>
                    </div>

                    <button class="btn deep-green">cadastrar-se</button>
                  </form>
              </section>
        </div>
    </div>
@endsection