<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Supprimer Recette</title>
  <style>
    body { background: #121212; color: #f1f1f1; font-family: 'Poppins', sans-serif; padding: 20px; }
    .container { max-width: 600px; margin: auto; background: #1e1e1e; padding: 30px; border-radius: 8px; }
    select, button { width: 100%; padding: 12px; margin-top: 15px; background: #333; border: none; color: white; border-radius: 5px; }
    button:hover { background: #555; transform: scale(1.05); }
    a { color: #fff; text-decoration: none; margin-bottom: 20px; display: inline-block; }
  </style>
</head>
<body>
  <a href="{{ route('home') }}">← Retour</a>
  <div class="container">
    <h2>Supprimer une recette</h2>
    @if(session('success')) <p>{{ session('success') }}</p> @endif
    <form action="{{ route('supprimerRecette') }}" method="POST">
      @csrf
      <select name="id_recette" required>
        @foreach($recettes as $recette)
          <option value="{{ $recette->id_recette }}">{{ $recette->nom }}</option>
        @endforeach
      </select>
      <button type="submit">Supprimer</button>
    </form>
  </div>
</body>
</html>
