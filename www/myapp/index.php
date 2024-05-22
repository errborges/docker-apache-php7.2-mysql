<?php

//phpinfo();
//$conn = mysqli_connect("db", "root", "root", "eborges") or die(mysqli_error());
//echo 'Banco conectado';
//$conn->close();

$banco = new PDO('mysql:host=db;dbname=eborges', 'root','root');
print "Conexão Efetuada com sucesso!";

$novo_cliente = array('nome'=>'Edson','departamento'=>'TI','unidade'=>'Brasil');
$banco->prepare('INSERT INTO clientes (nome,departamento,unidade) VALUES (:nome,:departamento,:unidade)')->execute($novo_cliente);
