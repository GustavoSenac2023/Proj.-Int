<?php

    class RetiradaDAO{
        function cadastrarRetirada(Retirada $model){
            include 'Conexao.php';
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO exemplar_retirada (status,data,fk_Pessoa_id,fk_Livro_id) VALUES (:status,:data,:fk_Pessoa_id,:fk_Livro_id)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':status',$model->getStatus());
            $stmt->bindValue(':data',$model->getData());
            $stmt->bindValue(':fk_Pessoa_id',$model->getFkPessoa());
            $stmt->bindValue(':fk_Livro_id',$model->getFkLivro());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
        }
        function listarRetirada(){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM exemplar_retirada ORDER BY id";
            return $con->conn->query($sql);
        }
        
        function resgataID($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM exemplar_retirada WHERE id='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirPessoa($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM exemplar_retirada WHERE id= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
            //echo "<script>location.href='../view/ListUsuario.php';</script>";
        }

        function alterarPessoa(Pessoa $model){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="UPDATE exemplar_retirada SET status=:status,data=:data,fk_Pessoa_id=:fk_Pessoa_id,fk_Livro_id=:fk_Livro_id WHERE id=:id";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':status',$model->getStatus());
            $stmt->bindValue(':data',$model->getData());
            $stmt->bindValue(':fk_Pessoa_id',$model->getFkPessoa());
            $stmt->bindValue(':fk_Livro_id',$model->getFkLivro());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
    }

?>