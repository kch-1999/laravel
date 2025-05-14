<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    /* CSS Sombre */
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

    header {
      background-color: #1e1e1e;
      padding: 20px;
      text-align: right;
    }

    .nav3 nav ul {
      list-style: none;
      display: flex;
      gap: 10px;
      justify-content: flex-end;
    }

    .nav-button {
      text-decoration: none;
      background-color: #333;
      color: #f1f1f1;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .nav-button:hover {
      background-color: #555;
    }

    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .video-container {
      position: relative;
      width: 100%;
      height: 90vh;
      overflow: hidden;
    }

    video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .overlay-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .overlay-text h5 {
      font-size: 2rem;
      margin-bottom: 10px;
      color: #ffffff;
    }

    .overlay-text p {
      font-size: 1.2rem;
      margin-bottom: 20px;
      color: #cccccc;
    }

    .join-button {
      display: inline-block;
      text-decoration: none;
      background-color: #007bff;
      color: white;
      padding: 12px 25px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .join-button:hover {
      background-color: #0056b3;
    }

    .logo-container {
      position: absolute;
      top: 20px;
      left: 20px;
    }

    .logo-container img {
      width: 100px;
    }

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
    <div class="nav3">
      <nav>
        <ul>
          <li><a href="{{ route('signup') }}" class="nav-button"><strong>Sign Up</strong></a></li>
          <li><a href="{{ route('admin') }}" class="nav-button"><strong>Admin</strong></a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="video-container">
      <video autoplay muted loop>
        <source src="{{ asset('assets/vid.mp4') }}" type="video/mp4">
      </video>
      <div class="overlay-text">
        <h5>Discover perfection.</h5>
        <p>Click here to join us</p>
        <a href="{{ route('signup') }}" class="join-button">Sign Up</a>
      </div>
      <div class="logo-container">
        <img src="{{ asset('assets/loggo.jpg') }}" alt="Logo" />
      </div>
    </div>
  </main>

  <footer>
    <div class="logo-container1">
      <img src="{{ asset('assets/logo22.webp') }}" alt="Footer Icon" />
    </div>
    <div class="logo-container2">
      <a href="#"><img src="{{ asset('assets/coment.png') }}" alt="Comment Icon" /></a>
      <a href="#"><img src="{{ asset('assets/linkk.png') }}" alt="Links Icon" /></a>
      <a href="#"><img src="{{ asset('assets/partage.jpg') }}" alt="Share Icon" /></a>
    </div>
    <p>© 2025 Copyright by khalil chaabani. All rights reserved.</p>
  </footer>

</body>
</html>
