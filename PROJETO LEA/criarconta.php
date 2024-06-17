<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="criarconta.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class = "corpo" >
        <form action="cadastrar.php" method="POST">
            <h1>Criar Conta</h1>
            
           <div class="input-box">
            <input style="background-image: linear-gradient(to right, #A6A6A6, #FFFFFF);" type="text" placeholder="Usuario" name="nome" required>
            <i class='bx bxs-user'></i>
           </div> 

           <div class="input-box">
            <input style="background-image: linear-gradient(to right, #A6A6A6, #FFFFFF);" type="email" placeholder="Email" name="email" required>
            <i class='bx bxs-lock-alt'></i>
           </div> 

           <div class="input-box">
            <input style="background-image: linear-gradient(to right, #A6A6A6, #FFFFFF);" type="password" placeholder="Senha" name="senha" required>
            <i class='bx bxs-lock-alt'></i>
           </div> 

            <input type="submit" class="btn" value="Cadastrar cliente">
        </form>
    </div>
    
</body>
</html>