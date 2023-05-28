<?php
    define('MYSQL_HOST', 'localhost:3306');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB_NAME', 'bd_sistemas');
 
     try {
        $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

    } catch (PDOException $ex) {
        echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <title>PHP - Sistema de Acesso ao Banco de Dados</title>
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
            <br>
            <div class="linha">
            <h2 class="subtitle_2 consulta">Consultar - Contatos Agendados</h2>
            </div>
            <a href="index.php" class="Options">Não tem um cadastro? Clique aqui para cadastrar.</a>
            <br>
            <br>
            <div class="linha">
                <div class="table-responsive"> 
                
                    <table class="tabela table table-borderless">
                        <thead>
                            <tr class="tabela_linha">
                                <th class="tabela_dados">Nome</th>
                                <th class="tabela_dados">Endereço</th>
                                <th class="tabela_dados">Bairro</th>
                                <th class="tabela_dados">CEP</th>
                                <th class="tabela_dados">Cidade</th>
                                <th class="tabela_dados">Estado</th>
                                <th class="tabela_dados">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query($sql);
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo $rows[$i]['nome'] . "<br><br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo $rows[$i]['endereco'] . "<br><br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo  $rows[$i]['bairro'].  "<br><br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo  $rows[$i]['cep'].  "<br><br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo  $rows[$i]['cidade'] . "<br><br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo  $rows[$i]['estado'] . "<br><br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                     <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo "<a href='editar.php?id=". $rows[$i]['id'] . "' class='Options'>Editar      </a>";
                                    echo "<a href='deletar.php?id=". $rows[$i]['id'] . "' class='Options'>      Excluir</a>". "<br><br><br>";
                                    }
                                    ?>
                                </td>    
                            </tr>
                        </tbody>
                    </table>   
                </div>
            </div>
        <br>
        <br>
        <br>      
        </div>      
    </body>        
</html>    