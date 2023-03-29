<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ideatech - Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</head>

<header class="bg-success">
    <div class="px-3 py-3">
        <h2 class="text-light">Ideatech - Projeto de Games</h2>
    </div>
    <div class="px-3 pb-2">
        <a class="text-decoration-none text-light" href="/games">Home</a> |
        <a class="text-decoration-none text-light" href="/games">Jogos</a> |
        <a class="text-decoration-none text-light" href="/consoles">Consoles</a>
    </div>
</header>

<body>
    <br>
    <section class="container">
        @yield('content')
    </section>
</body>
<footer class="bg-success static-bottom p-3">
    <div class="col-md-12 text-center mt-4">
        <p>Avaliação realizado por Enzo Gama dos Santos.</p>
        <a class="text-decoration-none text-light" href="https://github.com/EnzoGamaDS/desafio-ideatech" target="_blank">Repositório do projeto.</a> <br>
        <a class="text-decoration-none text-light" href="https://www.linkedin.com/in/enzo-gama-15b203212/">Perfil no linkedin.</a>
    </div>
</footer>

</html>