<?php

$host = 'localhost';
$bd = 'contatos';
$usuario = 'root';
$senha = "";

$conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);


$stmt = $conexao->prepare("SELECT * FROM contatos_info");
$stmt->execute();

$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contatos</title>
</head>

<body>
    <?php foreach($contatos as $contato) : ?>    
        <h5><?php echo $contato['nome']; ?> </h5>
        <h5><?php echo $contato['telefone']; ?> </h5>
        <h5><?php echo $contato['email']; ?> </h5>
        <hr>
    <?php endforeach; ?>    
</body>

</html>