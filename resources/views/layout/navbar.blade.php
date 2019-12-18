<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('cartasporte.index') }}">Cartas porte <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('rutas.index') }}">Rutas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tarifas.index') }}">Tarifas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('embalajes.index') }}">Embalajes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('sucursales.index') }}">Sucursales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('configuracion.index') }}">Configuracion</a>
      </li>
    </ul>
    <span class="navbar-text">Logout</span>
  </div>
</nav>