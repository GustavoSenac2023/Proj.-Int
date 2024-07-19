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
        $quant=$_POST["quant"];
        $ctrl=new LivroCont();
        $ctrl->cadastrarLivro($titulo,$autor,$quant);
    }
    function alterar(){
        $id=$_POST["codigo"];
        $titulo=$_POST["titulo"];
        $autor=$_POST["autor"];
        $quant=$_POST["quant"];
        $ctrl=new LivroCont();
        $ctrl->alterarLivro($id,$titulo,$autor,$quant);
    }
    function excluir(){
        $id=$_REQUEST["codigo"];
        $ctrl =new LivroCont();
        $ctrl->excluirLivro($id);
    }
    function listar() {
        include '../view/ListLivro.php';
    }

?>