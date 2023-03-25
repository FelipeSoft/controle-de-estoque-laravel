<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="http://localhost/controle-de-estoque-laravel/public/assets/css/style.css">
</head>
<body>
    <div class="container-form">
        <form action="http://localhost/controle-de-estoque-laravel/public/register_action" method="POST">
            @csrf
            <h3>REGISTRO</h3>
            
            <label for="">
                Nome
            </label>
                <input type="text" name="name" placeholder="Mr. Olympia" data-rules="required|name|min=2">
            
    
            <label for="">
                Email
            </label>
                <input type="email" name="email" placeholder="example@domain.com" data-rules="required|email">
            
    
            <label for="">
                Senha
            </label>
                <input type="password" placeholder="2Y4$P9/mK57UMQBiUa" data-rules="required|password|min=6">
            
    
            <label for="">
                Confirme a senha
            </label>
                <input type="password" name="password" placeholder="" data-rules="required|password|min=6">
            
            <div class="passwordConfirmErrorArea"></div>
            <div class="duplicate_email">{{$error ?? null}}</div>

            <button class="primary-button">REGISTRAR</button>
        </form>
        <p>Já possui uma conta? <a href="http://localhost/controle-de-estoque-laravel/public/login"><span>Inicie uma sessão.</span></a></p> 
    </div>
    <script src="http://localhost/controle-de-estoque-laravel/public/assets/js/registerFormValidation.js"></script>
</body>
</html>