<?php include("cabecalho.php")?>
<?php include("logica-usuario.php"); ?>
    <h1>Bem vindo!</h1>
    <h2>Login</h2>

    <?php

        if(isset($_SESSION["success"])) {
            ?>
                <p class="alert-success"><?= $_SESSION["success"]?></p>
            <?php
            unset($_SESSION["success"]);
        }
        
        if(isset($_SESSION["danger"])) {
        ?>
            <p class="alert-danger"><?= $_SESSION["danger"]?></p>
        <?php
            unset($_SESSION["danger"]);
        }
    ?>

    <?php
        if(usuarioEstaLogado()) {
            ?>
                <p class="text-success">
                    Você está logado como <?= usuarioLogado($email) ?>
                    <a href="logout.php" class="btn">Deslogar</a>
                </p>
            <?php
        }else {
            ?>
                <form action="login.php" method="post">
                    <table class="table">
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Senha</td>
                            <td><input type="password" name="senha" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-primary">Login</button></td>
                        </tr>
                    </table>
                </form>
            <?php
        }
    ?>

<?php include("rodape.php")?>