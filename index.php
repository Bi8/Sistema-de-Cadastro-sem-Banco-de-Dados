<?php
session_start();
require("global.php");
$nome = get_post('nome');
$senha = get_post('senha');
$post_back = get_post('post_back');
if(!empty($post_back)) faz_login();
?>
<html>
<body>
<form id="form1" name="form1" method="post" action="index.php">
<p>Nome: <input type="text" name="nome" /></p>
<p>Senha: <input type="text" name="senha" /></p>
<input type="submit" name="post_back" id="button" value="Submit" />
</form>
</body>
</html>