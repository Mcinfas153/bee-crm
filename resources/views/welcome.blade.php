<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('assets/dist/img/favicon/favicon.png') }}" type="image/x-icon">
  <title>Bee CRM | Home</title>
  <link rel="stylesheet" href="{{ asset('assets/dist/css/welcome-page.css') }}" />
</head>

<body>
  <main>
    <div class="big-wrapper light">
      <img src="{{ asset('assets/dist/img/logos/full-logo.png') }}" alt="watermark" class="shape" />

      <header>
        <div class="container">
          <div class="logo">
            <img src="{{ asset('assets/dist/img/logos/full-logo.png') }}" alt="Logo" />
            <h3>Bee CRM</h3>
          </div>

          <div class="links">
            <ul>
              @auth
              <li><a href="{{ URL::to('/profile') }}"><i class="far fa-registered"></i> Profile</a></li>
              @else
              <li><a href="{{ URL::to('register') }}"><i class="far fa-registered"></i> Register</a></li>
              <li><a href="{{ URL::to('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
              @endauth
            </ul>
          </div>

          <div class="overlay"></div>

          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </header>

      <div class="showcase-area">
        <div class="container">
          <div class="left">
            <div class="big-title">
              <h1>Your Life's Work, Powered</h1>
              <h1>By Our Life's Work</h1>
            </div>
            <p class="text">
              Unique and powerful suite of software to run your entire business, brought to you by a company with the
              long term vision to transform the way you work.
            </p>

            @auth
            <a href="{{ URL::to('profile') }}" class="btn"><i class="fas fa-user"></i> Profile</a>
            @else
            <div class="cta">
              <a href="{{ URL::to('login') }}" class="btn"><i class="fas fa-sign-in-alt"></i> Login</a>
            </div>
            @endauth

          </div>

          <div class="right">
            <img src="{{ asset('assets/dist/img/person.png') }}" alt="Person Image" class="person" />
          </div>
        </div>
      </div>

      <div class="bottom-area">
        <div class="container">
          <button class="toggle-btn">
            <i class="far fa-moon"></i>
            <i class="far fa-sun"></i>
          </button>
        </div>
      </div>
    </div>
  </main>

  <!-- JavaScript Files -->

  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="{{ asset('assets/dist/js/welcome-page.js') }}"></script>
</body>

</html>