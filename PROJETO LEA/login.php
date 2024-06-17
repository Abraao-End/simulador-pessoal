<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class = "corpo" >
        <form action="entrar.php" method="POST">
            <h1>Login</h1>
            
           <div class="input-box">
            <input style="background-image: linear-gradient(to right, #A6A6A6, #FFFFFF);" type="email" name="email" placeholder="Email" required>
            <i class='bx bxs-user'></i>

           </div> <div class="input-box">
            <input style="background-image: linear-gradient(to right, #A6A6A6, #FFFFFF);" type="password" name="senha" placeholder="Senha" required>
            <i class='bx bxs-lock-alt'></i>

           </div> 

            <div class="remember-forgot">
                <label><input type="checkbox"> Lembrar Senha</label>
                <a href="#">Esqueceu a senha?</a>
            </div>

            <input type="submit" name="submit" class="btn" value="Login">
            </form>
            <div class="register-link">
                <p>Voce não tem uma conta? <a href="criarconta.php">Registre-se</a></p>

            </div>
    </div>
    
</body>
</html>