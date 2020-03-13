@extends('layout.site')

@section('titulo', 'Cadastre-se')

@section('subtitulo', 'Cadastro')

@section('conteudo')
    <div class="container">
        <h3 class="center">Cadastre-se</h3>
        <div class="row">
            <section>
                <form class="" action="{{route('site.cadastro.cadastrar')}}" method="post">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s6">                      
                            <input type="text" name="name" required>
                            <label><i class="material-icons">person</i> Nome</label>                        
                        </div>

                        <div class="input-field col s6">
                            <input type="text" name="sobrenome" required>
                            <label><i class="material-icons">person</i> Sobrenome</label>
                        </div>
                    </div>                  

                    <div class="row">    
                        <div class="input-field col s6">
                            <input type="text" name="cpf" required>
                            <label><i class="material-icons">fingerprint</i> CPF</label>
                        </div> 

                        <div class="input-field col s6">
                            <input type="text" name="date" required>
                            <label><i class="material-icons">date_range</i> Data de Nascimento</label>
                        </div>
                    </div>                    
                    
                    <div class="input-field  ">
                        <input type="number" name="phone" required>
                        <label><i class="material-icons">local_phone</i> Telefone</label>
                    </div>                    
                    
                    <div class="input-field ">
                        <input type="email" name="email" required>
                        <label><i class="material-icons">email</i> email</label>
                    </div>                    
                           
                    <div class="input-field ">
                        <input type="password" name="password" required>
                        <label> <i class="material-icons">lock</i> Senha</label>
                    </div>

                    <button class="btn deep-green">
                        <i class="material-icons right">person_add</i> 
                        cadastrar-se 
                    </button>
                    
                    <a  class="btn deep-orange" href="{{route('site.login')}}">
                        <i class="material-icons right">send</i> Entrar
                    </a>
                  </form>
              </section>
        </div>
    </div>
@endsection