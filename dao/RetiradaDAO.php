<?php

    class RetiradaDAO{
        function cadastrarRetirada(Retirada $model){
            include 'Conexao.php';
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO exemplar_retirada (status,data,fk_pessoa,fk_livro) VALUES (:status,:data,:fk_pessoa,:fk_livro)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':status',$model->getStatus());
            $stmt->bindValue(':data',$model->getData());
            $stmt->bindValue(':fk_pessoa',$model->getFkPessoa());
            $stmt->bindValue(':fk_livro',$model->getFkLivro());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
        }
        function listarPessoa(){
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
            $sql="UPDATE exemplar_retirada SET status=:status,data=:data,fk_pessoa=:fk_pessoa,fk_livro=:fk_livro WHERE id=:id";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':status',$model->getStatus());
            $stmt->bindValue(':data',$model->getData());
            $stmt->bindValue(':fk_pessoa',$model->getFkPessoa());
            $stmt->bindValue(':fk_livro',$model->getFkLivro());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
    }

?>