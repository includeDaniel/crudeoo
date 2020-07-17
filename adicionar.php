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
    <div class="container text-center">
        <h1>Adicionar</h1>
        <form method="POST" action="adicionar_submit.php">
            <div class="form-group">
            <label>Insira um Nome</label><br>
                <input class="form-control" type="text" name="nome" placeholder="Nome"/><br><br>
            <label>Insira um E-mail</label><br>
                <input class="col form-control" type="email" name="email" placeholder="E-mail"/><br><br>
                <input class="btn btn-success" type="submit" name="botao" value="Adicionar"/>
            </div>
        </form>
    </div>
</body>
</html>

