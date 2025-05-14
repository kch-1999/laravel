<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #121212;
        color: #fff;
        margin: 0;
        padding: 0;
    }
    header {
        background-color: #1f1f1f;
        padding: 10px 20px;
    }
    .nav-button {
        background-color: #292929;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 6px;
        border: 1px solid #444;
    }
    .Formul_SignUp {
        margin: 50px auto;
        max-width: 400px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 20px;
        border-radius: 8px;
        background-color: #1e1e1e;
        border: 1px solid #444;
    }
    input {
        padding: 10px;
        border-radius: 4px;
        border: none;
    }
    button {
        padding: 10px;
        border-radius: 6px;
        background-color: #444;
        color: white;
        border: none;
        cursor: pointer;
    }
    .logo_container_SignUp {
        text-align: center;
        margin-top: 30px;
    }
    .Code1 {
        display: block;
        margin-top: 10px;
        font-style: italic;
    }
    footer {
        margin-top: 50px;
        text-align: center;
        font-size: 14px;
        color: #aaa;
    }
  </style>
</head>
<body>

  <header>
    <a href="/" class="nav-button">Home</a>
  </header>

  <main>
    <form class="Formul_SignUp" action="{{ route('utulisateur') }}" method="POST">
        @csrf

        <label for="pseudo"><strong>Pseudo</strong></label>
        <input type="text" id="pseudo" name="pseudo" required>

        <label for="email"><strong>Email</strong></label>
        <input type="email" id="email" name="email" required>

        <label for="password"><strong>Password</strong></label>
        <input type="password" id="password" name="password" required>

        <button type="submit">S'inscrire</button>
    </form>

    <div class="logo_container_SignUp">
      <img src="{{ asset('loggo.jpg') }}" alt="Logo" width="120">
      <code class="Code1">Great Things Never Come from Comfort Zone</code>
    </div>
  </main>

  <footer>
    <img src="{{ asset('logo22.webp') }}" alt="Footer Logo" width="80px"><br>
    <a href="#">Comment</a> | <a href="#">Links</a> | <a href="#">Share</a><br>
    © 2025 | Khalil Chaabani. Tous droits réservés.
  </footer>

</body>
</html>
