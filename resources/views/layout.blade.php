<!DOCTYPE html>
<html>
<head>
    <title>Mi Aplicación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href= "{{ asset('css/styles.css') }}" > -->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dealer</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/vehicles">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="/vehicles/create">Create</a>
                    </li>
                
                </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p class="text-center">Pie de Página de la Aplicación</p>
    </footer>
</body>
</html>
