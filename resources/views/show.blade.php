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
    <title>Delta - Produto</title>
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
                        <li class="nav-item">
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




    <section id="mainSection" class="sectionContainer">
        <div class="sectionContainer__main">
            <div class="row mt-5 justify-content-center mb-5">
                <div class="row col-md-6 justify-content-center">
                    <img src="{{$produto->Fotos[0]->IMAGEM_URL}}" id="product_img" alt="">
                </div>
                <div class="row col-md-6">
                    <h1 class="sectionContainer__h1 display-4">{{$produto->PRODUTO_NOME}}</h1>
                    <div>
                        <ul class="sectionContainer__list">
                            <li class="sectionContainer__item">
                                <p>MULTIPLAYER / SOLO</p>
                            </li>
                            <li class="sectionContainer__item">
                                <p>Mídia Digital</p>
                            </li>
                            <li class="sectionContainer__item">
                                <p>{{$produto->Categoria->CATEGORIA_NOME}}</p>
                            </li>
                            <li class="sectionContainer__item">
                                <p>Disponiveis: {{$produto->Estoque->PRODUTO_QTD}}</p>
                            </li>
                            <li class="sectionContainer__item">
                                <p style="line-height: 1.5;">{{$produto->PRODUTO_DESC}}</p>
                            </li>
                            <li class="sectionContainer__item">
                                <p style="font-weight: 600;">
                                    @if ($produto->PRODUTO_PRECO == 0.00)
                                        Gratuito
                                    @else
                                        R$ {{ $produto->PRODUTO_PRECO }}
                                    @endif
                                </p>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <a href="#" class="card__button" id="comprar-button" data-produto-id="{{ $produto->PRODUTO_ID }}">Comprar</a>
                        <img src="imagens/coracao.png" class="iconeCoracao" alt="">
                    </div>


                </div>
            </div>
        </div>
    </section>


    <!-- ========================================================== MAIN SECTION END ========================================================== -->




    <!-- ========================================================== CARROUSEL SECTION ========================================================== -->

    @php
    $produtosRelacionadosCount = $produtosRelacionados->count();
    @endphp

    @if ($produtosRelacionadosCount === 0)

    <p class="card__title" style="margin-top:200px;">Nenhum jogo relacionado encontrado.</p>

    @elseif ($produtosRelacionadosCount <= 4) <div class="card__container swiper">
        <div class="card__title">
            <h2>Relacionados</h2>
        </div>
        <div class="relacionados card__content card__content__1" id="">
            @foreach ($produtosRelacionados as $item)
            <article class="card__article card__show">
                <div class="card__image">
                    @if ($item->Fotos->count() > 0)
                    <img src="{{$item->Fotos[0]->IMAGEM_URL}}" alt="image" class="card__img">
                    @endif
                </div>

                <div class="card__data">
                    <h3 class="card__name">{{$item->PRODUTO_NOME}}</h3>
                    <p class="card__description"> Por apenas: </p>
                    <p class="card__description card__preco">R$ {{$item->PRODUTO_PRECO}}</p>
                    <a href="{{ route('produto.show', $item->PRODUTO_ID) }}" class="card__button">Veja mais</a>
                </div>
            </article>
            @endforeach
        </div>
        </div>
        @else
        <section id="carrouselSection" class="container" style="margin-bottom: 100px;">
            <div class="card__container swiper">
                <div class="card__title">
                    <h2>Relacionados</h2>
                </div>
                <div class="card__content card__content__1">
                    <div class="swiper-wrapper">
                        @foreach ($produtosRelacionados as $item)
                        <article class="card__article swiper-slide">
                            <div class="card__image">
                                @if ($item->Fotos->count() > 0)
                                <img src="{{$item->Fotos[0]->IMAGEM_URL}}" alt="image" class="card__img">
                                @endif
                            </div>

                            <div class="card__data">
                                <h3 class="card__name">{{$item->PRODUTO_NOME}}</h3>
                                <p class="card__description"> Por apenas: </p>
                                <p class="card__description card__preco">
                                    @if ($item->PRODUTO_PRECO == 0.00)
                                        Gratuito
                                    @else
                                        R$ {{ $item->PRODUTO_PRECO }}
                                    @endif
                                </p>
                                <a href="{{ route('produto.show', $item->PRODUTO_ID) }}" class="card__button">Veja mais</a>
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
            </div>
        </section>
        @endif





        <!-- ========================================================== CARROUSEL SECTION END ========================================================== -->





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
        <!--========== CARRINHIO =========-->
        <script>
            document.getElementById('comprar-button').addEventListener('click', function(event) {
                event.preventDefault();

                // Verificar se o usuário está autenticado
                const usuarioId = "{{ Auth::id() }}"; // Obtém o ID do usuário autenticado

                if (!usuarioId) {
                    // Se o usuário não estiver autenticado, redirecionar para a página de login
                    window.location.href = "{{ route('login') }}";
                    return;
                }

                const produtoId = this.getAttribute('data-produto-id');

                fetch('/adicionar-ao-carrinho', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            produto_id: produtoId,
                            usuario_id: usuarioId,
                            item_qtd: 1
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Erro na requisição: ' + response.status + ' ' + response.statusText);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            alert('Produto adicionado ao carrinho com sucesso!');
                        } else {
                            throw new Error('Erro no servidor: ' + data.error);
                        }
                    })
                    .catch(error => {
                        console.error('Erro:', error);
                        alert(error.message);
                    });
            });
        </script>






</body>

</html>