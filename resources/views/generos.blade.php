<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ComicsGhost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">ComicsGhost</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="#">Gêneros</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Itens em Destaque</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Todos os Itens</a></li>
        </ul>
        <a class="btn btn-outline-dark" href="#">Entrar</a>
      </div>
    </div>
  </nav>

  <section class="hero-section container text-center text-md-start my-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1>Descubra histórias que combinam com seu estilo!</h1>
        <p>Aqui, você encontra HQs organizadas por gêneros: ação, drama, suspense... e muitos outros!</p>
        <a class="btn btn-dark mt-3" href="#">Listar gêneros</a>
      </div>
      <div class="col-md-6 text-center">
        <img src="/images/hero.jpg" class="img-fluid" alt="Imagem de destaque">
      </div>
    </div>
  </section>

  <div class="container">
    @foreach ($generos as $genero)
      <div class="genre-section my-5">
        <h3>{{ $genero->nome }}</h3>
        <p class="genre-description">{{ $genero->descricao }}</p>
        <div class="d-flex flex-wrap gap-3">
          @foreach ($genero->hqs as $hq)
            <div class="card card-custom" style="width: 200px;">
              <img src="{{ asset('storage/' . $hq->imagem) }}" class="card-img-top" alt="{{ $hq->titulo }}">
              <div class="card-body">
                <h6 class="card-title">{{ $hq->titulo }}</h6>
                <p class="card-text text-muted">{{ $hq->subtitulo }}</p>
                <a href="{{ route('hq.show', $hq->id) }}" class="btn btn-danger btn-sm">Veja mais</a>
              </div>
            </div>
          @endforeach

          <!-- Placeholder opcional -->
          <div class="yellow-placeholder d-flex justify-content-center align-items-center" style="width: 200px; background-color: #fff9c4; border: 1px dashed #ccc;">
            <div class="text-center">
              <p>Lorem Ipsum #0</p>
              <p class="text-muted">Lorem ipsum</p>
              <a href="#" class="btn btn-danger btn-sm">Veja mais</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <footer class="text-center mt-5 py-3 bg-light">
    <p>&copy; Time unides² 2025</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
