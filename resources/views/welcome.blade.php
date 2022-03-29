<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('assets/dist/img/favicon/favicon.png') }}" type="image/x-icon">
  <title>CP CRM | Home</title>
  <link rel="stylesheet" href="{{ asset('assets/dist/css/welcome-page.css') }}" />
</head>

<body>
  <main>
    <div class="big-wrapper light">
      <img src="{{ asset('assets/dist/img/logos/cp_logo.jpg') }}" alt="watermark" class="watermark" />

      <header>
        <div class="container">
          <div class="logo">
            {{-- <img src="{{ asset('assets/dist/img/logos/cp_logo.jpg') }}" alt="Logo" /> --}}
            <h3>CP CRM</h3>
          </div>

          <div class="links">
            <ul>
              @auth
              <li><a href="{{ URL::to('/profile') }}"><i class="far fa-user"></i> Profile</a></li>
              @else
              <li><a href="{{ URL::to('register') }}"><i class="far fa-registered"></i> Register</a></li>
              <li><a href="{{ URL::to('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
              @endauth
            </ul>
          </div>

          <div class="overlay"></div>

          <div class="hamburger-menu">
            <a href="https://beeonline.xyz/about"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
          </div>
        </div>
      </header>

      <div class="showcase-area">
        <div class="container">
          <div class="left">
            <div class="big-title">
              <h2>What Is CP CRM?</h2>
            </div>
            <p class="text">
              CP CRM is the world’s #1 customer relationship management (CRM) platform. We help your marketing, sales,
              commerce, service and IT teams work as one from anywhere — so you can keep your customers happy
              everywhere.
            </p>

            @auth
            <a href="{{ URL::to('profile') }}" class="btn"><i class="fas fa-user"></i> Profile</a>
            @else
            <div class="cta">
              <a href="{{ URL::to('login') }}" class="btn"><i class="fas fa-sign-in-alt"></i> Login</a>
              <a href="{{ URL::to('register') }}" class="btn"><i class="far fa-registered"></i> Resgister</a>
            </div>
            @endauth

          </div>

          <div class="right">
            <img src="{{ asset('assets/dist/img/person.png') }}" alt="Person Image" class="person" />
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- JavaScript Files -->

  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="{{ asset('assets/dist/js/welcome-page.js') }}"></script>
</body>

</html>