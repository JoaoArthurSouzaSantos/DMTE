<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --verde-musgo: #556b2f; /* verde musgo */
            --branco: #ffffff;
        }

        body {
            background-color: var(--branco);
            color: var(--verde-musgo);
        }

        .navbar, .footer {
            background-color: var(--verde-musgo);
            color: var(--branco);
        }

        .navbar a, .footer p {
            color: var(--branco) !important;
        }

        .btn-outline-success {
            color: var(--verde-musgo);
            border-color: var(--verde-musgo);
        }

        .btn-outline-success:hover {
            background-color: var(--verde-musgo);
            color: var(--branco);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="container my-5">
        <div class="text-center">
            <h1>Bem-vindo à Biblioteca</h1>
            <p>Explore nosso acervo diversificado de livros e recursos.</p>
            <a href="#" class="btn btn-outline-success">Ver Catálogo</a>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="footer text-center py-3">
        <p class="mb-0">© 2024 Biblioteca</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
