<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <style>
    /* ton CSS reste identique ici */
  </style>
</head>
<body>

  <header>
    <nav>
      <a href="{{ url('/') }}" class="nav-button">Home</a>
    </nav>
  </header>

  <main>
    <div class="Container_Admin">
      <h4>Admin Dashboard</h4>
      <h5>Choisissez l'option à gérer</h5>
      <div class="button-container">
        <a href="#"><button type="button">Ajouter une recette</button></a>
        <a href="#"><button type="button">Supprimer une recette</button></a>
        <a href="#"><button type="button">Modifier le profil utilisateur</button></a>
      </div>
    </div>
  </main>

  <footer>
    <p>© 2025 Copyright by Khalil Chaabani. All rights reserved.</p>
  </footer>

</body>
</html>
