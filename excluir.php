<?php
    include 'contatos.class.php';
    $contato = new Contato();

    if(!empty($_GET['id'])) {

        $id = addslashes($_GET['id']);
        $contato->excluir($id);
        header("Location:contatos.php");
    }