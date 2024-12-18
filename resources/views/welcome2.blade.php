<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOOTSTRAP ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">

    <!--=============== ICONES ===============-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/assets/scss/main.css">
    <title>Delta - Home</title>
</head>

<body>

    <!--header-->

    <!-- ========================================= PRINCIPAL NAVBAR ========================================= -->
    <header class="header">

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #392ca4;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a href="/home"><img src="../assets/img/43cf02eb-120a-417e-84c5-174bd52b128c-removebg-preview_1 (1).png" class="navbar-brand"></a>
                    <form class="d-flex" role="search" action="{{ route('pesquisas.index') }}" method="GET">
                        <input class="form-control me-2" type="search" name="query" placeholder="Buscar..." aria-label="Search">
                        <button class="btn text-white" type="submit">
                            <span class="material-symbols-outlined">search</span>
                        </button>
                    </form>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home"><span class="material-symbols-outlined">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/cart"><span class="material-symbols-outlined">shopping_cart</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <ul class="dropdown-menu">
                                <li><a class="nav-link active dropdown-item" href="/login" aria-disabled="true"><span class="material-symbols-outlined">person</span></a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button type="submit" class="btn text-white">
                                            <span class="material-symbols-outlined">input</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                            <a class="nav-link active" href="/login" aria-disabled="true"><span class="material-symbols-outlined">person</span></a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="btn text-white">
                                    <span class="material-symbols-outlined">input</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <!-- ========================================= DROPDOWN NAVBAR ========================================= -->



        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #241b6c;">
            <div class="container-fluid">
                <div id="nav2" class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mb-2 mb-lg-0">

                        <li class="nav-item dropdown itens_2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                BATTLE ROYAL
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/pesquisas?query=BATTLE+ROYAL">Jogos Battle Royale</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown itens_2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                LUTA
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/pesquisas?query=LUTA">Jogos de Luta</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown itens_2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                AÇÃO
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/pesquisas?query=AÇÃO">Jogos de ação</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown itens_2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                AVENTURA
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/pesquisas?query=AVENTURA">Jogos de Aventura</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown itens_2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SOULS LIKE
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/pesquisas?query=SOULS+LIKE">Jogos Souls Like</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown itens_2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CORRIDA
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/pesquisas?query=CORRIDA">Jogos de Corrida</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <hr class="dropdown-divider">

    <!-- ========================================= NAVBAR END ========================================= -->



    <!-- ========================================= CARROUSEL GAME IMAGE ========================================= -->

    <div>
        <div id="carouselExampleAutoplaying"" class=" carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/gta.png" style="height: 500px;" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/tlou2.png" style="height: 500px;" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/detroit.png" style="height: 500px;" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/fifa.png" style="height: 500px;" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- ========================================= CARROUSEL CARDS ========================================= -->


    <!-- ========================================= CARROUSEL SECTION 1 ========================================= -->
    <section class="container">
        <div class="card__container swiper">
            <div class="card__title">
                <h2>TODOS OS JOGOS</h2>
            </div>
            <div class="card__content card__content__1">
                <div class="swiper-wrapper">
                    @foreach ($produto as $item)
                    <article class="card__article swiper-slide">
                        <div class="card__image">
                            @if ($item->Fotos->count() > 0)
                            <a href="{{ route('produto.show', $item->PRODUTO_ID) }}"><img src="{{$item->Fotos[0]->IMAGEM_URL}}" alt="image" class="card__img"></a>
                            @endif
                        </div>

                        <div class="card__data">
                            <a href="{{ route('produto.show', $item->PRODUTO_ID) }}">
                                <h3 class="card__name">{{$item->PRODUTO_NOME}}</h3>
                            </a>
                            <p class="card__description"> Por apenas: </p>
                            <p class="card__description card__preco">
                                @if ($item->PRODUTO_PRECO == 0.00)
                                Gratuito
                                @else
                                R$ {{ $item->PRODUTO_PRECO }}
                                @endif
                            </p>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next swiper-button-next-1">
                <span class="material-symbols-outlined"> arrow_forward_ios </span>
            </div>

            <div class="swiper-button-prev swiper-button-prev-1">
                <span class="material-symbols-outlined"> arrow_back_ios </span>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination swiper-pagination-1"></div>

            <div class="dsdf d-flex justify-content-center" style="margin-top: 40px;">
                <a href=/produtos class="card__button">Veja mais</a>
            </div>
        </div>
    </section>




    <!-- ========================================= CARROUSEL SECTION 2 ========================================= -->


    <section class="container">
        <div class="card__container swiper">
            <div class="card__title">
                <h2>RECOMENDADOS</h2>
            </div>
            <div class="card__content card__content__2">
                <div class="swiper-wrapper">
                    @foreach ($produto->take(10) as $item)
                    <article class="card__article swiper-slide">
                        <div class="card__image">
                            @if ($item->Fotos->count() > 0)
                            <a href="{{ route('produto.show', $item->PRODUTO_ID) }}"><img src="{{$item->Fotos[0]->IMAGEM_URL}}" alt="image" class="card__img"></a>
                            @endif
                        </div>

                        <div class="card__data">
                            <a href="{{ route('produto.show', $item->PRODUTO_ID) }}">
                                <h3 class="card__name">{{$item->PRODUTO_NOME}}</h3>
                            </a>
                            <p class="card__description"> Por apenas: </p>
                            <p class="card__description card__preco">
                                @if ($item->PRODUTO_PRECO == 0.00)
                                Gratuito
                                @else
                                R$ {{ $item->PRODUTO_PRECO }}
                                @endif
                            </p>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>




            <!-- Navigation buttons -->
            <div class="swiper-button-next swiper-button-next-2">
                <span class="material-symbols-outlined"> arrow_forward_ios </span>
            </div>

            <div class="swiper-button-prev swiper-button-prev-2">
                <span class="material-symbols-outlined"> arrow_back_ios </span>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination swiper-pagination-2"></div>

            <div class="dsdf d-flex justify-content-center" style="margin-top: 40px;">
                <a href="{{ route ('produto.recomendados') }}" class="card__button">Veja mais</a>
            </div>
        </div>
    </section>


    <!-- ========================================= CARROUSEL SECTION 3 ========================================= -->


    <section class="container">
        <div class="card__container swiper">
            <div class="card__title">
                <h2>ADICIONADOS RECENTEMENTE</h2>
            </div>
            <div class="card__content card__content__3">
                <div class="swiper-wrapper">
                    @foreach ($produtosRecente ->take(10) as $item)
                    <article class="card__article swiper-slide">
                        <div class="card__image">
                            @if ($item->Fotos->count() > 0)
                            <a href="{{ route('produto.show', $item->PRODUTO_ID) }}"><img src="{{$item->Fotos[0]->IMAGEM_URL}}" alt="image" class="card__img"></a>
                            @endif
                        </div>

                        <div class="card__data">
                            <a href="{{ route('produto.show', $item->PRODUTO_ID) }}">
                                <h3 class="card__name">{{$item->PRODUTO_NOME}}</h3>
                            </a>
                            <p class="card__description"> Por apenas: </p>
                            <p class="card__description card__preco">
                                @if ($item->PRODUTO_PRECO == 0.00)
                                Gratuito
                                @else
                                R$ {{ $item->PRODUTO_PRECO }}
                                @endif
                            </p>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next swiper-button-next-3">
                <span class="material-symbols-outlined"> arrow_forward_ios </span>
            </div>

            <div class="swiper-button-prev swiper-button-prev-3">
                <span class="material-symbols-outlined"> arrow_back_ios </span>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination swiper-pagination-3"></div>

            <div class="dsdf d-flex justify-content-center" style="margin-top: 40px;">
                <a href="{{ route ('produto.adicionadosRecente') }}" class="card__button">Veja mais</a>
            </div>
        </div>
    </section>

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

    <!-- ========================================= FOOTER END ========================================= -->


    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="/assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="/assets/js/home.js"></script>
</body>

</html>