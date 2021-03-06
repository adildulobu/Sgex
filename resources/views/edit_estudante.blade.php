<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudante</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/home_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/add_estud_style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <!-- NavBar-Menu-->
<nav class="navbar navbar-expand-lg navbar-dark" id="menus">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
      <li class="nav-item active">
        <a class="nav-link" href="/home" id="links">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/estudante" id="links">Estudante</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/curso" id="links">Curso</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/professor" id="links">Professor</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Formulario  -->

    <a href ="/estudante" class="btn btn-lg"><i class="fas fa-arrow-circle-left fa-2x"  id="bt_back"></i></a>


  <h2 class="desc">Edite o Estudante</h6>

<div class="container">
 @foreach($estudantes as $estudante)
                  <form method="post" action="{{ route('estudante.update',$estudante->id) }}">
                  @method('PATCH')
                  @csrf
                    <div class="form-group">
                        <label for="inputNome">Nome Completo</label>
                      <input type="text" class="form-control" id="InputNome" value={{ $estudante->nome_completo}}>
                    </div>
                    <div class="form-group">
                    <label for="inputDataNascimento">Data Nascimento</label>
                      <input type="date" class="form-control" id="inputDataNascimento" value={{ $estudante->data_de_nascimento}}>
                    </div>
                    <div class="form-group">
                    <label for="inputContacto">Contacto</label>
                      <input type="text" class="form-control" id="inputContacto" value={{ $estudante->contacto}}>
                    </div>
                    <div class="form-group">
                    <label for="inputCurso">Curso</label><br>
                    <input type="text" class="form-control" id="inputContacto" value={{ $estudante->curso->nome}}>
                    </div>
                    <div class="form-group">
                    <label for="inputLocalizacao">Localização</label>
                      <input type="text" class="form-control" id="inputLocalizacao" value={{ $estudante->localizacao}}>
                    </div>
                    <div class="form-row">
                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-lg btn-primary">Actualizar</button>
                </div>
                <div class="form-group col-md-6">
                <button type="clean" class="btn btn-lg btn-danger">Limpar</button>
                </div>
              </div>  
                  </form>
       @endforeach
     </div>





    <!-- Rodape -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-bottom" id="menus">
          <h6 id="header1">&copy; Team Fire | 2020 </h6>

</nav>
      
      </body>
      </html>
</body>
</html>