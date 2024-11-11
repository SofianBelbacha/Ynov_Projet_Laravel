<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Animal</title>
</head>
<body>
    <h1>Ajouter un Animal</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('animals.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="birthday">Date de naissance :</label>
            <input type="date" name="birthday" id="birthday" required>
        </div>

        <div>
            <label for="deathday">Date de décès (optionnel) :</label>
            <input type="date" name="deathday" id="deathday">
        </div>

        <div>
            <label for="color">Couleur :</label>
            <input type="text" name="color" id="color" required>
        </div>

        <button type="submit">Ajouter l'animal</button>
    </form>
</body>
</html>
