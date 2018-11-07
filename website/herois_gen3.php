<?php require "page_top.php"; ?>

<?php session_start(); ?>
<?php session_regenerate_id(); ?>

<?php if (isset($_SESSION["created"])): ?>
    <article class="container-border">
        <?php require "./articles/ameaca_aquatica.html"; ?>
    </article>
    <article class="container-border">
        <?php require "./articles/anfibio.html"; ?>
    </article>
    <article class="container-border">
        <?php require "./articles/contra_tempo.html"; ?>
    </article>
<?php else: ?>
    <h1>Precisas entrar (autenticar-te) antes de usar essa página.</h1>
<?php endif; ?>

<?php require "page_bottom.php"; ?>