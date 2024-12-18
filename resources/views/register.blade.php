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

    <title>Delta - Registre-se</title>
</head>

<body class="login-page">



    <div id="home">
        <a href="/home"><i class='bx bx-left-arrow-alt' style="color: white;"></i></a>
    </div>


    <div class="container">
        <div id="text_container">
            <div>
                <h1>Olá!</h1>
                <h1>Bem-vindo!</h1>
            </div>
        </div>
        <div class="container_register">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" autocomplete="off" >
                @csrf
                <h1 >Usuário</h1>
                <div class="form-row">
                    <div class="input-box">
                        <input type="text" id="USUARIO_NOME" placeholder="Nome" name="USUARIO_NOME" value="{{ old('USUARIO_NOME') }}" required autocomplete="off">
                        @error('USUARIO_NOME')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="email" id="USUARIO_EMAIL" placeholder="Email" name="USUARIO_EMAIL" value="{{ old('USUARIO_EMAIL') }}" required autocomplete="off">
                        @error('USUARIO_EMAIL')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="number" id="USUARIO_CPF" name="USUARIO_CPF" placeholder="CPF" value="{{ old('USUARIO_CPF') }}" required autocomplete="off">
                        @error('USUARIO_CPF')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="input-box">
                        <input type="number" id="USUARIO_SENHA" placeholder="Senha" name="USUARIO_SENHA" required autocomplete="off">
                        @error('USUARIO_SENHA')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-box">
                        <input type="number" id="USUARIO_SENHA_confirmation" placeholder="Confirmar senha" name="USUARIO_SENHA_confirmation" required autocomplete="off">
                    </div>
                </div>

                <hr>

                <h1>Endereço</h1>
                <div class="form-row">
                    <div class="input-box">
                        <input type="text" id="ENDERECO_NOME" name="ENDERECO_NOME" maxleght="11" placeholder="Nome da rua" value="{{ old('ENDERECO_NOME') }}" required autocomplete="off">
                        @error('ENDERECO_NOME')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="text" id="ENDERECO_LOGRADOURO" name="ENDERECO_LOGRADOURO" placeholder="Logadouro" value="{{ old('ENDERECO_LOGRADOURO') }}" required autocomplete="off">
                        @error('ENDERECO_LOGRADOURO')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="number" id="ENDERECO_NUMERO" name="ENDERECO_NUMERO" placeholder="Numero" value="{{ old('ENDERECO_NUMERO') }}" required autocomplete="off">
                        @error('ENDERECO_NUMERO')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="form-row">

                    <div class="input-box">
                        <input type="text" id="ENDERECO_COMPLEMENTO" placeholder="Complemento" name="ENDERECO_COMPLEMENTO" value="{{ old('ENDERECO_COMPLEMENTO') }}" autocomplete="off">
                        @error('ENDERECO_COMPLEMENTO')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="number" id="ENDERECO_CEP" name="ENDERECO_CEP" maxleght="8" maxlen placeholder="CEP" value="{{ old('ENDERECO_CEP') }}" required autocomplete="off"> 
                        @error('ENDERECO_CEP')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="form-row ">

                    <div class="input-box">
                        <input type="text" id="ENDERECO_ESTADO" placeholder="Estado" name="ENDERECO_ESTADO" value="{{ old('ENDERECO_ESTADO') }}" required autocomplete="off">
                        @error('ENDERECO_ESTADO')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="text" id="ENDERECO_CIDADE" placeholder="Cidade" name="ENDERECO_CIDADE" value="{{ old('ENDERECO_CIDADE') }}" required autocomplete="off">
                        @error('ENDERECO_CIDADE')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="form-row register_btn">
                    <div class="input-box">
                        <button class="btn" type="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <<!-- ========================================= FOOTER ========================================= -->


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
    </footer>
    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="/assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="/assets/js/home.js"></script>
</body>

</html>