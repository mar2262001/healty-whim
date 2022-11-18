<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <a class="navbar-brand" href="index.php"><img height="30" width="150"  src="images/logo.jpg"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?menu=offers">Ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?menu=administrator">Administrador</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?menu=about">Acerca de</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?menu=contact">Contacto</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class='dropdown-item' href='index.php?menu=homepage&category=all'>Todos</a>
          <?php
            foreach($categories as $valor){
              echo "<a class='dropdown-item' href='index.php?menu=homepage&category=$valor'>$valor</a>";
            }
          ?>  
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Iniciar Sesion</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="button">Buscar</button>
    </form>
  </div>
</nav>
