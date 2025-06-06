<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignIn</title>
  <style>
    /* Reset général */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #121212;
      color: #f1f1f1;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Header */
    header {
      background-color: #1e1e1e;
      padding: 20px;
      text-align: right;
    }

    nav ul {
      list-style: none;
    }

    .nav-button {
      text-decoration: none;
      background-color: #333;
      color: #f1f1f1;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.3s;
    }

    .nav-button:hover {
      background-color: #555;
      transform: scale(1.1);
    }

    /* Main Section */
    main.Main1 {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
    }

    .Container_SignIn {
      display: flex;
      background-color: #1e1e1e;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(0,0,0,0.7);
      max-width: 1000px;
      width: 100%;
    }

    .Forumaire_signIn {
      flex: 1;
      padding: 40px;
    }

    .Forumaire_signIn h4 {
      font-size: 2rem;
      margin-bottom: 10px;
      color: #ffffff;
    }

    .Forumaire_signIn h5 {
      font-size: 1.2rem;
      margin-bottom: 30px;
      color: #cccccc;
    }

    form#signInForm {
      display: flex;
      flex-direction: column;
    }

    form#signInForm label {
      font-size: 1rem;
      margin-bottom: 5px;
      color: #f1f1f1;
    }

    form#signInForm input {
      padding: 12px;
      margin-bottom: 20px;
      border: none;
      border-radius: 5px;
      background-color: #333;
      color: #fff;
      font-size: 1rem;
      transition: background-color 0.3s;
    }

    form#signInForm input:focus {
      background-color: #444;
      outline: none;
    }

    form#signInForm button {
      padding: 12px;
      background-color: #007bff;
      color: white;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.3s;
    }

    form#signInForm button:hover {
      background-color: #0056b3;
      transform: scale(1.05);
    }

    .logo_container_SignIn {
      flex: 1;
      background-color: #121212;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .logo_container_SignIn img {
      width: 200px;
      margin-bottom: 20px;
    }

    .Slogo_signIn .Code1 {
      color: #ccc;
      font-size: 1rem;
      text-align: center;
    }

    /* Footer */
    footer {
      background-color: #1e1e1e;
      padding: 30px 20px;
      text-align: center;
    }

    .logo-container1 img {
      width: 80px;
      margin-bottom: 10px;
    }

    .logo-container2 {
      margin: 10px 0;
    }

    .logo-container2 a img {
      width: 30px;
      margin: 0 10px;
      transition: transform 0.3s;
    }

    .logo-container2 a img:hover {
      transform: scale(1.2);
    }

    footer p {
      font-size: 0.9rem;
      color: #aaaaaa;
    }
  </style>
</head>

<body>
  <header>
    <div>
      <nav>
        <ul>
          <a href="index.html" class="nav-button">Home</a>
        </ul>
      </nav>
    </div>
  </header>

  <main class="Main1">
    <div class="Container_SignIn">
      <div class="Forumaire_signIn">
        <h4 style="margin-top: -25px;">Welcome Back</h4>
        <h5>Sign in to continue exploring</h5>
        <br><br><br>
        <form id="signInForm" action="{{ url('/signin') }}" method="post">
          @csrf
          <label for="email">Email</label><br><br>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
          <br><br>
        
          <label for="password">Password</label><br><br>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
          <br><br>
        
          <button type="submit">Sign In</button>
        </form>
        
      </div>

      <div class="logo_container_SignIn">
        <img src="loggo.jpg" alt="Logo" style="width: 300px; top: -40px;" />
        <div class="Slogo_signIn">
          <code class="Code1">Login and make today a great one</code>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="logo-container1">
      <img src="logo22.webp" alt="Footer Icon" />
    </div>
    <div class="logo-container2">
      <a href="#"><img src="coment.png" alt="Comment Icon" /></a>
      <a href="#"><img src="linkk.png" alt="Links Icon" /></a>
      <a href="#"><img src="partage.jpg" alt="Share Icon" /></a>
    </div>
    <p>© 2025 Copyright by khalil chaabani All rights reserved</p>
  </footer>
</body>
</html>
