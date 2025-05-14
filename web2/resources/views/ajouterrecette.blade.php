<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajouter Recette</title>
  <style>
    body { background-color: #121212; color: #f1f1f1; font-family: 'Poppins', sans-serif; padding: 20px; }
    .form-container { max-width: 600px; margin: auto; background: #1e1e1e; padding: 30px; border-radius: 8px; }
    input, textarea { width: 100%; padding: 12px; margin: 10px 0; background: #333; border: none; color: #fff; border-radius: 5px; }
    button { padding: 12px; background: #333; border: none; color: #fff; cursor: pointer; border-radius: 5px; }
    button:hover { background: #555; transform: scale(1.05); }
    a { color: #fff; text-decoration: none; display: inline-block; margin-bottom: 20px; }
  </style>
</head>
<body>
  <a href="{{ route('index') }}"> Retour</a>
  <div class="form-container">
    <h2>Ajouter une recette</h2>
    @if(session('success')) <p>{{ session('success') }}</p> @endif
    <form action="{{ route('ajouterRecette') }}" method="POST">
      @csrf
      <input type="text" name="nom" placeholder="Nom de la recette" required>
      <textarea name="ingredients" placeholder="Ingrédients" required></textarea>
      <input type="number" name="calories" placeholder="Calories">
      <input type="number" name="lipides" step="0.01" placeholder="Lipides (g)">
      <input type="number" name="glucides" step="0.01" placeholder="Glucides (g)">
      <button type="submit">Ajouter</button>
    </form>
  </div>
</body>
</html>
