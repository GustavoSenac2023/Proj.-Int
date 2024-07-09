<?php
    include '../controller/LivroCont.php';
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
        $titulo=$_POST["titulo"];
        $autor=$_POST["autor"];
        $ctrl=new LivroCont();
        $ctrl->cadastrarLivro($titulo,$autor);
        //print "<script>alert('$titulo')</script>";
    }
    function alterar(){
        $titulo=$_POST["titulo"];
        $autor=$_POST["autor"];
        $ctrl=new LivroCont();
        $ctrl->alterarLivro($titulo,$autor);
    }
    function excluir(){
        $id=$_REQUEST["codigo"];
        $ctrl =new LivroCont();
        $ctrl->excluirLivro($id);
    }
    function listar() {
        include '../view/';
    }

?>