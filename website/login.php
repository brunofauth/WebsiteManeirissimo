<?php require "page_top.html"; ?>

<form class="login-container" method="post" action="authenticate.php">
        <input name="user" placeholder="Email" type="email">
        <input name="pswd" placeholder="Senha" type="password">
        <input name="keep" type="checkbox">
        <button type="submit">Login</button>
    </form>    

<?php require "page_bottom.html"; ?>