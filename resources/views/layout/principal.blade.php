<html>
    <head>
        <link rel="stylesheet" href="/site/bootstrap.css">
        <link rel="stylesheet" href="/site/css/custom.css">
        <title>Controle de estoque</title>
    </head>
<body>
    <div class="container">


        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Laravel store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav">
              <li class="nav-item active"> <a class="nav-link" href="/produtos">Home </a> </li>


              <li class="nav-item dropdown">
                 <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Produtos </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/produto/new"> Novo </a></li>

                  </ul>
              </li>
          </ul>
            </div> <!-- navbar-collapse.// -->
          </nav>
        @yield('conteudo')

        <footer class="footer bg-primary">
            <p>© Livro de Laravel da Casa do Código.</p>
            </footer>

    </div>
    <script src="/site/jquery.js" defer></script>
    <script src="/site/bootstrap.js" defer></script>
</body>
</html>