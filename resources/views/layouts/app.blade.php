<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Bancaire</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 960px; margin: 20px auto; padding: 0 16px; }
        nav a { margin-right: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 12px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        form.inline { display: inline; }
        .actions a, .actions button { margin-right: 8px; }
        .errors { color: #b00020; }
        .field { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Gestion Bancaire</h1>
    <nav>
        <a href="/agences">Agences</a>
        <a href="/clients">Clients</a>
        <a href="/virements">Virements</a>
    </nav>

    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr>
    @yield('content')
</body>
</html>
