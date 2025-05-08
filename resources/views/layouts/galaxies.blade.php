<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/svg+xml" href="/favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400..700&family=Fredoka:wght@300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans:wght@400..700&family=Share+Tech+Mono&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <title>The Cosmic Archive Backoffice </title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{route('galaxies.index')}}">Home</a>
        <a class="nav-link active" aria-current="page" href="{{route('phenomena.index')}}">Phenomena</a>
        
      </div>
    </div>
  </div>
</nav>
    <div class="container my-4">
        <h1>
            @yield("title")
        </h1>

        @yield("content")
    </div>

</body>

</html>