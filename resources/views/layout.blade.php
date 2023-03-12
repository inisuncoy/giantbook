<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-warning">
        <ul class="navbar-nav mx-auto">
            <h1>GIANTBOOKSUPPLIER</h1>
        </ul>

    </nav>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/category" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/adult">Horror</a></li>
                            <li><a class="dropdown-item" href="/comedy">Komedi</a></li>
                            <li><a class="dropdown-item" href="/romance">Fiksi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/publisher">Pencetak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Kontak</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    @yield('konten')


    <nav class="navbar navbar-expand-lg bg-warning mt-5">
        <ul class="navbar-nav mx-auto">
        
        </ul>

    </nav>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
