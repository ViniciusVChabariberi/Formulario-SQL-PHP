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
                    <p class="subtitle">Editar dados do cliente</p>
                </div>
            </div>
            <div class="row">    
                <div class="col formulario">
                    <form action="atualizar.php?id=<?=$_GET['id']?>" method="POST">
                        <div class="mb-3">
                            <label class="formulario_titulos" for="nome">Nome:</label> 
                            <input type="text" class="form-control" name="nome" id="nome" autocomplete= off required>
                        </div>  

                        <div class="mb-3">
                            <label class="formulario_titulos" for="tele">Endereço:</label> 
                            <input type="text" class="form-control"  name="endereco" id="endereco" autocomplete= off required>
                        </div> 

                        <div class="mb-3">
                            <label for="select" class="form-label formulario_titulos">Bairro:</label>
                            <input type="text" class="form-control" name="bairro" id="bairro" autocomplete= off required>
                        </div>

                        <div class="mb-3">
                            <label class="formulario_titulos" for="data">CEP:</label> 
                            <input type="tel" class="form-control" placeholder="xxxxx-xxx" id="cep" name="cep" autocomplete= off required>
                        </div>

                        <div class="mb-3">
                            <label for="select" class="form-label formulario_titulos">Cidade:</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" autocomplete= off required>
                        </div>
                        
                        <div class="mb-3">
                        <label for="select" class="form-label formulario_titulos">Estado:</label>
                            <select class="form-select" name="estado" id="estado" autocomplete= off required>
                                <option value="sp">SP</option>
                                <option value="rj">RJ</option>
                                <option value="mg">MG</option>
                                <option value="es">ES</option>
                            </select>  
                        </div>
                        <div class="mb-3">    
                            <input  class="btn botao" type="submit" name="editar" value="editar">
                        </div>    
                    </form>
                </div>
            </div>
    </div>        
  </body>
</html>
