<?php require "page_top.html"; ?>

<?php session_start(); ?>
<?php session_regenerate_id(); ?>

<?php if (isset($_SESSION["user"])): ?>
    <article class="container-border">
        <?php require "./articles/chama.html"; ?>
    </article>
    <article class="container-border">
        <?php require "./articles/ultra_t.html"; ?>
    </article>
    <article class="container-border">
        <?php require "./articles/massa_cinzenta.html"; ?>
    </article>
<?php else: ?>
    <h1>Precisas entrar (autenticar-te) antes de usar essa página.</h1>
<?php endif; ?>

<?php require "page_bottom.html"; ?>