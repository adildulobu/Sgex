<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Curso</title>
=======
    <title>Novo curso</title>
>>>>>>> 74243588b95669cb88b49e8007355a3db574e8ca
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<<<<<<< HEAD
    <!--<link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/show_professor_style.css">-->
    <link href="{{ asset('css/home_style.css') }}"  rel="stylesheet">
    <link href="{{asset('css/show_professor_style.css')}}" rel="stylesheet">
    <link href="{{asset('css/show_curso.css')}}" rel="stylesheet">
=======
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/show_professor_style.css">
>>>>>>> 74243588b95669cb88b49e8007355a3db574e8ca
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
<<<<<<< HEAD
      <a class="nav-link" href="/curso " id="links">Curso</a>
=======
      <a class="nav-link" href="/curso" id="links">Curso</a>
>>>>>>> 74243588b95669cb88b49e8007355a3db574e8ca
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/professor" id="links">Professor</a>
      </li>
    </ul>
  </div>
</nav>
<<<<<<< HEAD
<a href ="/curso" class="btn btn-lg">
    <i class="fas fa-arrow-circle-left fa-2x"  id="bt_back"></i>
  </a>


<h2 class="desc">Dados do Curso</h6>
<!-- Formulario  -->

<div class="container">
       @foreach($cursos as $curs)
       <form>     
         <div class="form-group">
             <label for="inputNome" class="label-group">Nome:</label>
           {{ $curs->nome}}
         </div>
         <div class="form-group">
         <label for="inputDataNascimento" class="label-group">Duração:</label>
           {{ $curs->duracao}}
         </div>
         <div class="form-group">
         <label for="inputContacto" class="label-group">Número de Disciplinas:</label>
           {{ $curs->numero_de_disciplinas}}
         </div>
         <div class="form-group">
         <label for="inputLocalizacao" class="label-group">Preço:</label>
           {{ $curs->preco}}
         </div>
         <div class="form-row">
    <a class="btn btn-lg btn-primary" onClick="window.print()"><i class="fas fa-print"></i>Imprimir</a>
    </div> <br>  
        
       </form>
       @endforeach
     </div>



 
=======

<a href ="/curso" class="btn btn-lg">
    <i class="fas fa-arrow-circle-left fa-2x"  id="bt_back"></i>
  </a>
<!-- Formulario  -->
<h2 class="desc">Ver dados do Curso</h6>

<div class="container">
@foreach($cursos as $curso)
       <form>

       <div class="form-group">
             <label for="inputNome">ID:</label>
           <b>{{$curso->id}}</b>
         </div>
         <div class="form-group">
             <label for="inputNome">Nome:</label>
           <b>{{$curso->nome}}</b>
         </div>
         <div class="form-group">
         <label for="inputDataNascimento">Duração:</label>
          <b>{{$curso->duracao}}</b>
         </div>
         <div class="form-group">
         <label for="inputNrDisc">Número de Disciplinas:</label>
          <b>{{$curso->numero_de_disciplinas}}</b>
         </div>
         <div class="form-group">
         <label for="inputPreco">Preço:</label>
           <b>{{$curso->preco}}</b>
         </div>
     
    <div class="form-group">
    <button type="submit" class="btn btn-lg btn-primary">Imprmir</button>
    </div>
       
       </form>
       @endforeach
</div>
>>>>>>> 74243588b95669cb88b49e8007355a3db574e8ca





    <!-- Rodape -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-bottom" id="menus">
          <h6 id="header1">&copy; Team Fire | 2020 </h6>

</nav>
      
      </body>
      </html>
</body>
</html>