<?php
    include '../controller/PessoaCont.php';
    switch ($_REQUEST["op"]) {
        case "Incluir":
            incluir();
            break;
        case "Alterar":
            alterar();
            break;
        case "Excluir":
            excluir();
            break;
        case "Listar":
            listar();
            break;        
        default:
            echo "Key not found";
            break;
    }
    function incluir(){
        $nome=$_POST["nome"];
        $genero=$_POST["genero"];
        $ctrl=new PessoaCont();
        $ctrl->cadastrarPessoa($nome,$genero);
    }
    function alterar(){
        $id=$_POST["codigo"];
        $nome=$_POST["nome"];
        $genero=$_POST["genero"];
        $ctrl=new PessoaCont();
        $ctrl->alterarPessoa($id,$nome,$genero);
    }
    function excluir(){
        $id=$_REQUEST["codigo"];
        $ctrl =new PessoaCont();
        $ctrl->excluirPessoa($id);
    }
    function listar() {
        include '../view/ListPessoa.php';
    }

?>