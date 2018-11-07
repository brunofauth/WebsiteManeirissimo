<!doctype html>

<?php
    session_start();
    $timeout = 60 * 60 * 4; // 4 horas
    if (isset($_SESSION["created"]) && $_SESSION["created"] + $timeout < time()):
        header("Location: ./deauth.php");
        exit;
    endif;
?>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./site.css">
        <title>Heróis — Ben 10 Fan Club</title>
    </head>
    <body>
        <header>
            <img class="banner" src="./banner.png" alt="Heróis — Ben 10 FC">
        </header>
        <nav>
            <div class="navbar">
                <a class="navbar-item" href="./index.php">Início</a>
                <a class="navbar-item" href="./herois_gen1.php">Heróis da Geração 1</a>
                <a class="navbar-item" href="./herois_gen2.php">Heróis da Geração 2</a>
                <a class="navbar-item" href="./herois_gen3.php">Heróis da Geração 3</a>
                <?php if (isset($_SESSION["created"])): ?>
                    <a class="navbar-item" href="./deauth.php">Sair</a>
                <?php else: ?>
                    <a class="navbar-item" href="./login.php">Entrar</a>
                <?php endif; ?>
            </div>
            <?php if (isset($_SESSION["created"])): ?>
                <div class="logged-in-box">
                    Logado como <?php echo $_SESSION["user"] ?>
                </div>
            <?php endif; ?>
        </nav>
        <main>