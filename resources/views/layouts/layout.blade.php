<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Mon Application Laravel</h1>
        <nav>
            <ul>
                <li><a href="{{ route('articles.index') }}">Articles</a></li>
                <li><a href="{{ route('articles.create') }}">Créer un article</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Mon Application</p>
    </footer>
</body>
</html>
