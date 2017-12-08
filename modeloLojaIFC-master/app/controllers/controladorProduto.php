<?php

//SOU BURRO N SEI FAZER ND
// Conheço ninguem nao
//to sem credito

// O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
// Use o método $_GET para obter informações vindas de outras páginas.

//faça um require_once para o arquivo Produto.php
//faça um require_once para o arquivo CrudProduto.php
    require_once __DIR__."/../models/Produto.php";
    require_once __DIR__."/../models/CrudProdutos.php";
//quando um valor da URL for igual a cadastrar faça isso
if ( $_GET['acao'] == 'cadastrar'){

    $produto = new Produto($_POST['nome'], $_POST['preco'], $_POST['categoria'],$_POST['quantidade']);
    $crud = new CrudProdutos();
    $crud->salvar($produto);

    header('location: ../views/admin/produtos.php?msg=cadastrou com sucesso');
    //redirecione para a página de produtos
}

if($_GET['acao'] == 'remover'){

   $crud = new CrudProdutos();
   $crud->excluir($_GET['id']);

   header('location: ../views/admin/produtos.php?msg=super excluido');
}
/*
//quando um valor da URL for igual a editar faça isso
if ( ? == 'editar'){

    //algoritmo para editar
    //redirecione para a página de produtos
}

//quando um valor da URL for igual a excluir faça isso
if ( ? == 'excluir'){

    //algoritmo para excluir
    //redirecione para a página de produtos
}