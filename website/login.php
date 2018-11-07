<?php require "page_top.html"; ?>

<?php session_start(); ?>
<?php session_regenerate_id(); ?>

<?php if (isset($_SESSION["user"])): ?>
    <?php header("Location: ./index.php") ?>
<?php else: ?>
    <?php if (isset($_POST["user"]) && isset($_POST["pswd"])): ?>
        <?php if ($_POST["user"] == "admin@upf.br" && $_POST["pswd"] == "password"): ?>
            <?php $_SESSION["user"] = htmlspecialchars($_POST["user"]); ?>
            <h1>Bem vindo, <?php echo $_SESSION["user"] ?>!</h1>
        <?php else: ?>
            <h1>User ou pw invalidos</h1>
            <form class="login-container container-border" method="post" action="login.php">
                <input required name="user" placeholder="Email" type="email">
                <input required name="pswd" placeholder="Senha" type="password">
                <input name="keep" type="checkbox">
                <button type="submit">Login</button>
            </form>
        <?php endif; ?>
    <?php else: ?>
        <form class="login-container container-border" method="post" action="login.php">
            <input required name="user" placeholder="Email" type="email">
            <input required name="pswd" placeholder="Senha" type="password">
            <input name="keep" type="checkbox">
            <button type="submit">Login</button>
        </form>
    <?php endif; ?>
<?php endif; ?>

<?php require "page_bottom.html"; ?>