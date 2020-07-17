<?php    
    include 'contatos.class.php';
    $contato = new Contato();
    if(isset($_POST['nome'])&& !empty($_POST['nome']) && isset($_POST['email'])&& !empty($_POST['email'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        
        $contato->adicionar($email, $nome);

        header("Location:contatos.php");
    } else {
        header("Location:adicionar.php");
    }