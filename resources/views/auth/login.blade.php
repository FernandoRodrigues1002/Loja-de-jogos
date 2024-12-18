<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--=============== ICONES ===============-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!--=============== BOOTSTRAP ===============-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="/assets/scss/main.css">

  <title>Delta - Login</title>
</head>

<body class="login-page">

  <!--teste comit-->


  <div id="home">
    <a href="/home"><i class='bx bx-left-arrow-alt' style="color: white;"></i></a>
  </div>
  

  <div class="container">
    <div id="text_container">
      <div>
        <h1>Olá!</h1>
        <h1>Bem-vindo de volta!</h1>
      </div>
    </div>

    <div id="login_container">
      <div id="login">
        <form method="POST" action="{{ route('login') }}" autocomplete="off">
          @csrf
          <h1>Login</h1>
          <div class="input-box">
            <i class='bx bxs-user-circle' style="color: rgb(209, 209, 209);"></i>
            <input id="email" placeholder="Login" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
          </div>

          <div class="input-box">
            <input placeholder="Senha" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
            <i class='bx bxs-lock-alt' style="color: rgb(209, 209, 209);"></i>
          </div>

          <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: white; margin-top: 10px; margin-bottom:10px" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: white; margin-top: 10px; margin-bottom:10px" />

          <div class="lembrar-conta">
            <label for="remember_me">
              <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">Lembre de mim</label>
            @if (Route::has('password.request'))
            <a style="color: #fe6448; text-decoration: none;" href="{{ route('password.request') }}">
              {{ __('Esqueci a senha?') }}
            </a>
            @endif
          </div>

          <button class="btn" type="submit">Login</button>
          <div class="register-link">
            <p style="color: rgb(209, 209, 209);">Não tem uma conta?</p>
            <a href="{{ route('register') }}" style="color: #fe6448; text-decoration: none;">
              <p>Resgistrar-se</p>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>





  <!-- ========================================= FOOTER ========================================= -->


  <footer>
    <div id="footer_content">
      <span style="margin-left: 150px;">
        <img src="../assets/img/43cf02eb-120a-417e-84c5-174bd52b128c-removebg-preview_1 (1).png" alt="">
      </span>

      <ul class="footer-list">
        <li>
          <h3>Sobre Nós</h3>
        </li>

        <li><a href="#" class="footer-link">Fale Conosco</a></li>
        <li><a href="#" class="footer-link">Sobre o Delta</a></li>
      </ul>

      <ul class="footer-list">
        <li>
          <h3>Suporte</h3>
        </li>

        <li><a href="#" class="footer-link">Ajuda</a></li>
        <li><a href="#" class="footer-link">Perguntas Frequentes</a></li>
        <li><a href="#" class="footer-link">Política de Devolução</a></li>
      </ul>


      <ul class="footer-list">
        <li>
          <h3>Nossas Redes</h3>
        </li>

        <li id="redes">
          <a href="#" class="footer-link" id="instagram"><i class='bx bxl-instagram-alt'></i></a>
          <a href="#" class="footer-link" id="facebook"><i class='bx bxl-discord'></i></a>
          <a href="#" class="footer-link" id="whatsapp"><i class='bx bxl-whatsapp'></i></a>
        </li>
      </ul>

      <div id="footer_copyright">
        <div>
          &#169
          2023 all rights reserved
        </div>
      </div>
    </div>
  </footer>

  <!--=============== BOOTSTRAP JS ===============-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!--=============== SWIPER JS ===============-->
  <script src="/assets/js/swiper-bundle.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="/assets/js/home.js"></script>
</body>

</html>