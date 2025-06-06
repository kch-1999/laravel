<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Utilisateur</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: #121212;
            color: #f1f1f1;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            background-color: #1f1f1f;
            padding: 10px 20px;
            display: flex;
            justify-content: flex-start;
        }

        .nav-button {
            background-color: #292929;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            border: 1px solid #444;
        }

        h2 {
            margin: 30px 0 20px;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 80%;
            max-width: 400px;
        }

        .button-container a {
            display: block;
            text-align: center;
            padding: 15px;
            background-color: #1e1e1e;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            border: 1px solid #444;
        }

        .button-container a:hover {
            background-color: #333;
            transform: scale(1.05);
        }

        footer {
            margin-top: auto;
            padding: 20px;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>
<body>

    <header>
        <a href="/" class="nav-button">Home</a>
    </header>

    <h2>Espace Utilisateur</h2>

    <div class="button-container">
        <a href="{{route (suprimer-compte) }}">Supprimer le Compte</a>
        <a href="{{route (choisir-recette) }}">Choisir une Recette</a>
        <a href="{{route (suivi-nutritionelle) }}">Voir Suivi Nutritionnel</a>
    </div>

    <footer>
        © 2025 | Khalil Chaabani. Tous droits réservés.
    </footer>

</body>
</html>
