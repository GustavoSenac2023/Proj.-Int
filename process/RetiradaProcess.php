<?php
    include '../controller/RetiradaCont.php';
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
        $status=$_POST["options"];
        $data=$status;
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $date=$_POST["data"];
        $fk_pessoa=$_POST["fk_pessoa"];
        $fk_livro=$_POST["fk_livro"];
        $ctrl=new RetiradaCont();
        echo $status;
        $ctrl->cadastrarRetirada($data,$date,$fk_pessoa,$fk_livro);
    }
    function alterar(){
        $id=$_POST["codigo"];
        $status=$_POST["status"];
        $data=$_POST["data"];
        $fk_pessoa=$_POST["fk_pessoa"];
        $fk_livro=$_POST["fk_livro"];
        $ctrl=new RetiradaCont();
        $ctrl->alterarRetirada($id,$status,$data,$fk_pessoa,$fk_livro);
    }
    function excluir(){
        $id=$_REQUEST["codigo"];
        $ctrl =new RetiradaCont();
        $ctrl->excluirRetirada($id);
    }
    function listar() {
        include '../view/ListRetirada.php';
    }

?>