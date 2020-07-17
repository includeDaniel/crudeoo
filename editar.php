<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.1.0.min.js" ></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        include 'contatos.class.php';
        $contato = new Contato();
        
        if(!empty($_GET['id'])){
            $id = addslashes($_GET['id']);
            $info = $contato->getInfo($id);

            if(empty($info['email'])){
                header("Location:contatos.php");
                exit;
            }
        } else { 
            header("Location:contatos.php");
            exit;
        }

    ?>

    <div class="container text-center">
        <h1>Editar</h1>
        <form method="POST" action="editar_submit.php">
            <div class="form-group">
                    <input type="hidden" name="id" value=" <?php echo $info['id']?>"/>  
                <label>Nome:</label><br>
                    <input class="form-control" type="text" name="nome" value=" <?php echo $info['nome'];?> "/><br><br>
                <label>E-mail:</label><br>
                    <input class="col form-control" type="email" name="email" value=" <?php echo $info['email']?> "/><br><br>
                    <input class="btn btn-success" type="submit" name="botao" value="Salvar"/>
            </div>
        </form>
    </div>
</body>
</html>