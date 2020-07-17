<?php    
    include 'contatos.class.php';
    $contato = new Contato();
    if(isset($_POST['id'])&& !empty($_POST['id'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $id = addslashes($_POST['id']);
        
        if(!empty($_POST['email'])){
            $contato->editar($nome, $email, $id);
        }
        header("Location:contatos.php");
    } else {
        header("Location:contatos.php");
    }