<?php 
    $nomeForm = $_POST['nome'] ?? "";
    $enderecoForm = $_POST['endereco'] ?? "";
    $bairroForm = $_POST['bairro'] ?? "";
    $cepForm = $_POST['cep'] ?? "";
    $cidadeForm = $_POST['cidade'] ?? "";
    $estadoForm = $_POST['estado'] ?? "";

    define('MYSQL_HOST' , 'localhost:3306');
    define('MYSQL_USER' , 'root');
    define('MYSQL_PASSWORD' , '');
    define('MYSQL_DB_NAME' , 'bd_sistemas');

    try {
        $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

    } catch (PDOException $ex) {
        echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
    }

    $sql = "INSERT INTO `clientes`(`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`) VALUES ('$nomeForm','$enderecoForm','$bairroForm','$cepForm', '$cidadeContatoForm','$estadoForm')";

    $cadastrarCliente = $pdo->prepare($sql);
    $cadastrarCliente->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
  </head>
    <body class="body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar">
                        <a class="navbar-brand" href="index.php"></a> 
                            <a class="navbar-brand" href="#"><h3 class="title">SISTEMA WEB</h3></a>   
                        <a class="navbar-brand" href="dados.php"><p class="title"></p></a>
                    </nav>
                </div>    
            </div>
            <div class="row">
                <div class="col">
                <p class="subtitle">Parabéns, seu cadastro foi realizado!</p>
                <a href="index.php" class="Options2"><-- Voltar </a>
                <a href="dados.php" class="Options2"> Consultar os dados --></a>
                </div>
            </div>
        </div>
    </body>
</html>            