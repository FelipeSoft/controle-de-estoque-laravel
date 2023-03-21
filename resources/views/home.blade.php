{{-- <x-header>
    <x-slot name="page">
        Início
    </x-slot>
</x-header>
<x-aside>

</x-aside>
<x-footer>

</x-footer> --}}

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Início</title>
    <link rel="stylesheet" href="http://localhost/controle-de-estoque-laravel/public/assets/css/style.css">
    <script src="https://use.fontawesome.com/a443ad607e.js"></script>
</head>
<body>
    <header>
        <nav class="top-nav">
            <div class="max-width">
                <div class="nav-f">
                    <ul>
                        <li class="active"><a href="">Dashboard</a></li>
                        <li><a href="">Transações</a></li>
                        <li><a href="">Cadastro</a></li>
                        <li><a href="">Configurações</a></li>
                    </ul>
                </div>
                <div class="nav-s">
                    <div class="search">
                        <form action="" method="post">
                            <button><i class="fa fa-search"></i></button>
                            <input type="search" name="" id="" placeholder="Pesquisar...">
                        </form>
                    </div>
                    <div class="profile">
                        <img src="http://localhost/controle-de-estoque-laravel/public/assets/img/profile.jpg" alt="Aqui está a foto do seu perfil">
                    </div>
                </div>
            </div>
        </nav>
        <nav class="middle-nav">
            <div class="max-width">
                <h2>Seja bem-vindo novamente, Felipe !</h2>
                <nav class="middle-nav-2">
                    <ul>
                        <li class="active-2"><a href="">Geral</a></li>
                        <li><a href="">Transações</a></li>
                        <li><a href="">Estoque</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </header>

    <section id="dashboard-overview">
        <div class="max-width">
            <div class="stock-value">
                <p class="dashboard-title">Valor do Estoque</p>
                <h1>R$ {{number_format($total_stock_value, '2', ',', '.')}}</h1>
                <button class="dashboard-button"><i class="fa fa-plus" style="padding-right: 5px;"></i>Compra</button>
                <button class="dashboard-button"><i class="fa fa-plus" style="padding-right: 5px;"></i>Venda</button>
            </div>
            <div class="plans">
                <p class="dashboard-title">Total de Vendas</p>
                <h1>R$ {{number_format($entries, '2', ',', '.')}}</h1>

                <p class="dashboard-title">Total de Compras</p>
                <h1>R$ {{number_format($exits, '2', ',', '.')}}</h1>
            </div>

            <div class="general">c</div>
            <div class="transactions-historical">d</div>
        </div>
    </section>
</body>
</html>