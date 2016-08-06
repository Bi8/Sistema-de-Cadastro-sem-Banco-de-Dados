<?php
session_start();
require("global.php");
if(!isset($_SESSION["usuario"])){
 header("Location: index.php");
 exit();
}
if(isset($_GET["sair"]) && $_GET["sair"] == true){
 session_destroy();
 header("Location: index.php");
 exit();
}
?>
<html>
<body>
<h2><?php echo "Bem vindo " . $usuarios[$_SESSION["usuario"]][0];?></h2>
<p>
<a href="restrito.php?sair=true">Sair do Sistema</a>
</p>
<p>
Conteúdo Restrito Aqui
</p>
</body>
</html>