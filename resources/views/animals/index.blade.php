<!DOCTYPE html>
<html>
<head>
    <title>Liste des Animaux</title>
</head>
<body>
    <h1>Liste des Animaux</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Date de décès</th>
                <th>Couleur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->name }}</td>
                    <td>{{ $animal->birthday }}</td>
                    <td>{{ $animal->deathday ?? 'Encore vivant' }}</td>
                    <td>{{ $animal->color }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('animals.create') }}">Ajouter un nouvel animal</a>
</body>
</html>
