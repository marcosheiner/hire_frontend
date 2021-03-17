<?php
//aqui vai o código para realizar registro

?>

<?php include'includes/menuhome.php';?>   

    <form class="form-signin text-center" method="POST" action="">
        <br>
        <h3 class="text-home">Cadastre-se na Hire</h3>
        <br>
        <input type="text" name="nome_completo" id="nome_completo" class="form-control" placeholder="Nome Completo" required>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nome de Usuário" required>
        <input type="text" name="nascimento" id="nascimento" class="form-control" placeholder="Data de Nascimento" required>
        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required autofocus>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
        
        <button class="btn btn-lg btn-login btn-block" type="submit">Cadastrar</button>

        <br>
        
        <a href="index.php"><small>Já tem conta? Entre agora!</small></a>
        <p class="mt-5 mb-3" style="color: rgb(0, 0, 0);">&copy; Juazeiro do Norte - CE | Hire 💖</p>
        
    </form>

<?php include'includes/footerhome.php';?>