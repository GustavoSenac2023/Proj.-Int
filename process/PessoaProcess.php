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
        $cpf=$_POST["cpf"];
        $nome=$_POST["nome"];
        $genero=$_POST["options"];
        if ($genero=="m") {
            $genero="M";
        }else{
            $genero="F";
        }
        $ctrl=new PessoaCont();
        $ctrl->cadastrarPessoa($cpf,$nome,$genero);
    }
    function alterar(){
        $cpf=$_POST["codigo"];
        $nome=$_POST["nome"];
        $genero=$_POST["options"];
        if ($genero=="m") {
            $genero="M";
        }else{
            $genero="F";
        }
        $ctrl=new PessoaCont();
        $ctrl->alterarPessoa($cpf,$nome,$genero);
    }
    function excluir(){
        $cpf=$_REQUEST["codigo"];
        $ctrl =new PessoaCont();
        $ctrl->excluirPessoa($cpf);
    }
    function listar() {
        include '../view/ListPessoa.php';
    }

?>