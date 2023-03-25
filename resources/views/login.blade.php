<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost/controle-de-estoque-laravel/public/assets/css/style.css">
</head>
<body>
    <div class="container-form">
        <form action="http://localhost/controle-de-estoque-laravel/public/login_action" method="POST">
            @csrf
            <h3>LOGIN</h3>
                
            <label>
                Email
            </label>
            <input type="email" name="email" placeholder="example@domain.com" data-rules="required|email">
    
            <label>
                Senha
            </label>
            <input type="password" name="password" placeholder="2Y4$P9/mK57UMQBiUa" data-rules="required|min=6">
    
            <div class="duplicate_email">{{$error ?? null}}</div>

            <button class="primary-button">ENTRAR</button>
        </form>
        <p>Ainda não possui uma conta? <a href="http://localhost/controle-de-estoque-laravel/public/register"><span>Registre-se.</span></a></p>
    </div>
    <script src="http://localhost/controle-de-estoque-laravel/public/assets/js/loginFormValidation.js"></script>
</body>
</html>