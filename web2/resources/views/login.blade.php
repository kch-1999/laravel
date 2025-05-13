<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
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
      <h4>Admin Login</h4>
      <h5>Access only admin </h5>

      @if ($errors->has('login'))
        <p style="color:red;">{{ $errors->first('login') }}</p>
      @endif

      <form class="Formul_Admin" action="{{ route('admin.login') }}" method="POST">
        @csrf
        <label><strong>Pseudo</strong></label>
        <input type="text" name="pseudo" required>

        <label><strong>Mot de passe</strong></label>
        <input type="password" name="mot_de_passe" required>

        <div style="text-align: center; margin-top: 20px;">
          <button type="submit">Login</button>
        </div>
      </form>

      <div class="logo_container_Admin">
        <img src="{{ asset('loggo.jpg') }}" alt="Logo" />
      </div>
    </div>
  </main>

  <footer>
    <p>© 2025 Copyright by Khalil Chaabani. All rights reserved.</p>
  </footer>

</body>
</html>
