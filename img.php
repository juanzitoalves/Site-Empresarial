<?php
$conexao = new mysqli('localhost', 'root', '', 'empresa');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$consulta = $conexao->query("SELECT img FROM novidades WHERE id_nov = $id");
$resultado = $consulta->fetch_assoc();
header("Content-type: image/jpeg");
echo $resultado['img'];
$conexao->close();