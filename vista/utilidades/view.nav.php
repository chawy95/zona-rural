<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-white" href="#">Mujer Rural</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="http://localhost/zona-rural/asociacion/buscar">INICIO</a>
      </li>
      <li class="nav-item dropdown"> 
        <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#modal-cosulta">
         Consultar
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="modal" id="modal-cosulta"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Consultar Asociacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="NIT">NIT</label>
          <input type="text" class="form-control" id="NIT"  placeholder="Enter NIT">
      </div>
      <div class="form-group">
          <label for="nombre-aso">Nombre Asociacion</label>
          <input type="text" class="form-control" id="nombre-aso"  placeholder="Enter NIT">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Enviar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>