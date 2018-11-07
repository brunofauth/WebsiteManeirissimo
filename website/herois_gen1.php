<?php require "page_top.php"; ?>

<?php session_start(); ?>
<?php session_regenerate_id(); ?>

<?php if (isset($_SESSION["created"])): ?>
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
    <?php require "./articles/error_not_logged_in.html"; ?>
<?php endif; ?>

<?php require "page_bottom.php"; ?>