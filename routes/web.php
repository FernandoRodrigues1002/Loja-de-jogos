<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\opcoesController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\carrinhoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\PedidoController;


//TELA DE LOGIN
Route::get('/', function () {
    return redirect(route('produto.index'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //CARRINHO
    Route::post('/adicionar-ao-carrinho', [CarrinhoController::class, 'adicionar'])->name('adicionar-ao-carrinho');
    Route::get('/cart', [carrinhoController::class, 'carrinho'])->name('cart');
    Route::post('/atualizar-quantidade', [CarrinhoController::class, 'atualizarQuantidade'])->name('update-cart');

    


});

require __DIR__.'/auth.php';

//PRODUTOS
Route::get('/home', [opcoesController::class,'index'])->name('produto.index');
Route::get('/produto/{produto}',[opcoesController::class,'show'])->name('produto.show');
Route::get('produtos', [opcoesController::class, 'showAll'])->name('produto.showAll');
Route::get('/recomendados', [opcoesController::class, 'recomendados'])->name('produto.recomendados');
Route::get('/recente', [opcoesController::class, 'adicionadosRecente'])->name('produto.adicionadosRecente');

//Route::get('/produto/edit/{produto}', [opcoesController::class, 'edit'])->name('produto.edit');
//Route::post('/produto/edit/{produto}', [opcoesController::class, 'edit'])->name('produto.update');


/* CATEGORIAS
Route::get('/categoria', [CategoriaController::class, 'indexCat'])->name('categoria.index');
Route::get('/categoria/edit/{categoria}', [CategoriaController::class, 'editCat'])->name('categoria.edit');
Route::post('/categoria/edit/{categoria}', [CategoriaController::class, 'updateCat'])->name('categoria.update');
Route::get('/categoria/create', [CategoriaController::class, 'createCat'])->name('categoria.create');
Route::post('/categoria/create', [CategoriaController::class, 'insertCat'])->name('categoria.insert');
*/

// SEARCH
Route::get('/pesquisas', [PesquisaController::class, 'index'])->name('pesquisas.index');

//CADASTRO
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

//PEDIDO
Route::post('/finalizar-compra', [PedidoController::class, 'finalizarCompra'])->name('finalizar_compra');
Route::get('/confirmacao', [PedidoController::class, 'confirmacao'])->name('pagina_de_confirmacao');