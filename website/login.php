<?php require "page_top.php"; ?>

<?php session_start(); ?>
<?php session_regenerate_id(); ?>

<?php $fake_db = array(
    "admin@upf.br" => "password",
    "debug@oi.com" => "abc123",
    "a@b.c" => "asd"
); ?>

<?php if (isset($_SESSION["created"])): ?>
    <?php header("Location: ./index.php") ?>
<?php else: ?>
    <?php if (isset($_POST["user"]) && isset($_POST["pswd"])): ?>
        <?php if (array_key_exists($_POST["user"], $fake_db) && $_POST["pwsd"] == $fake_db["user"]): ?>
            <?php $_SESSION["user"] = htmlspecialchars($_POST["user"]); ?>
            <?php $_SESSION["created"] = time(); ?>
            <?php header("Location: ./index.php") ?>
        <?php else: ?>
            <h2>Erro: usuário ou senha inválidos.</h2>
            <form class="login-container container-border" method="post" action="login.php">
                <input required name="user" placeholder="Email" type="email">
                <input required name="pswd" placeholder="Senha" type="password">
                <button type="submit">Login</button>
            </form>
        <?php endif; ?>
    <?php else: ?>
        <form class="login-container container-border" method="post" action="login.php">
            <label for="email-inp">Email:</label>
            <input required class="senha-inp" name="user" placeholder="Email" type="email">
            <label for="senha-inp">Senha:</label>
            <input required class="senha-inp" name="pswd" placeholder="Senha" type="password">
            <br><br>
            <button type="submit">Login</button>
        </form>
    <?php endif; ?>
<?php endif; ?>

<?php require "page_bottom.php"; ?>