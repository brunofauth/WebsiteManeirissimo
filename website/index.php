<?php require "page_top.php"; ?>

<?php session_start(); ?>
<?php session_regenerate_id(); ?>

<article class="container-border">
    <?php require "./articles/bem_vindo.html"; ?>
</article>

<?php require "page_bottom.php"; ?>