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
    <?php require "./articles/error_not_logged_in.html"; ?>
<?php endif; ?>

<?php require "page_bottom.php"; ?>