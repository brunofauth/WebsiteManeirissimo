<?php require "page_top.html"; ?>

<?php session_start(); ?>
<?php session_regenerate_id(); ?>

<?php if (isset($_SESSION["user"])): ?>
    <article class="container-border">
        <?php require "./articles/fogo_selvagem.html"; ?>
    </article>
    <article class="container-border">
        <?php require "./articles/friagem.html"; ?>
    </article>
    <article class="container-border">
        <?php require "./articles/alien_x.html"; ?>
    </article>
<?php else: ?>
    <h1>Precisas entrar (autenticar-te) antes de usar essa página.</h1>
<?php endif; ?>

<?php require "page_bottom.html"; ?>