@extends('layouts.app')
@section('title', 'Carrinho de compras')

@section('content')

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
  <title>Delta - Carrinho</title>
</head>

<!--header-->

<!-- ========================================= PRINCIPAL NAVBAR ========================================= -->
<header >
  <nav class="navbar navbar-expand-lg navbar-dark principal-navbar" style="background-color: #392ca4;">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a href="/home"><img src="../assets/img/43cf02eb-120a-417e-84c5-174bd52b128c-removebg-preview_1 (1).png" class="navbar-brand"></a>
      </div>
    </div>
  </nav>

</header>


<!-- ========================================= NAVBAR END ========================================= -->


<section class="h-100 h-custom" style="padding-top:250px;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-start h-100 ">
      <h2 style="font-size: 35px; margin-bottom:50px;">Seu Carrinho</h2>
      <div class="col-lg-8">
        <div class="table-responsive itens_table" style="border-radius: 16px;">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preços</th>

              </tr>
            </thead>
            <p style="display: none;">{{ $total = 0 }}</p>
            @foreach($carrinho as $item)
            <p style="display: none;">{{ $total += $item->produto->PRODUTO_PRECO * $item->ITEM_QTD  }}</p>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="{{$item->produto->Fotos[0]->IMAGEM_URL}}" class="img-fluid rounded-3" style="width: 120px;" alt="jogo">
                    <div class="flex-column ms-4">
                      <p class="mb-2">{{$item->produto->PRODUTO_NOME}}</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="updateQuantity({{ $item->PRODUTO_ID }}, {{ $item->ITEM_QTD }} - 1)">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="quantity-{{$item->PRODUTO_ID}}" min="0" name="quantity" value="{{$item->ITEM_QTD}}" type="number" class="form-control form-control-sm" style="width: 50px;" onchange="updateQuantity({{ $item->PRODUTO_ID }}, this.value)" />

                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="updateQuantity({{$item->PRODUTO_ID}}, {{$item->ITEM_QTD}} + 1)">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;">R$ {{$item->produto->PRODUTO_PRECO}}</p>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card compra-card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
          <div class="card-body compra-card-body p-4">
            <div class="row">
              <div class="col-lg-12">
                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-2">Subtotal</p>
                  <p id="subtotal" class="mb-2">R$ {{ $total }}</p>
                </div>

                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-0">Imposto</p>
                  <p class="mb-0">R$ 20.00</p>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                  <p class="mb-2">Total: </p>
                  <p id="total" class="mb-2">R$ {{ $total + 20.00 }}</p>
                </div>

                <form action="{{ route('finalizar_compra') }}" method="POST">
                  @csrf
                  <button type="submit" class="card__button">Finalizar compra</button>
                </form>

                <a href="/home" class="card__button" style="margin-top: 30px;">Continuar comprando</a>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  function updateQuantity(productId, quantity) {
    if (quantity < 0) {
      alert('A quantidade não pode ser negativa.');
      return;
    }

    $.ajax({
      url: '{{ route('update-cart') }}',
      method: 'POST',
      data: {
        _token: '{{ csrf_token() }}',
        produto_id: productId,
        quantity: quantity
      },
      success: function(response) {
        if (response.success) {
          // Atualizar o input com a nova quantidade
          $('#quantity-' + productId).val(quantity);
          // Atualizar os valores de subtotal e total
          $('#subtotal').text('R$ ' + response.subtotal.toFixed(2));
          $('#total').text('R$ ' + (response.subtotal + 20.00).toFixed(2));
        } else {
          alert('Erro ao atualizar a quantidade');
        }
      },
      error: function() {
        alert('Erro ao enviar a requisição');
      }
    });
  }
</script>


@endsection

@section('footer')
<!-- ========================================= FOOTER ========================================= -->

<footer>
  <div id="footer_content" class="footer_content_cart">
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
@endsection