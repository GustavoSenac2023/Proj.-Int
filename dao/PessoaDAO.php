<?php

    class PessoaDAO{
        function cadastrarPessoa(Pessoa $model){
            include 'Conexao.php';
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO pessoa (cpf,nome,genero) VALUES (:cpf,:nome,:genero)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':cpf',$model->getCpf());
            $stmt->bindValue(':nome',$model->getNome());
            $stmt->bindValue(':genero',$model->getGenero());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
        }
        function listarPessoa(){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM pessoa ORDER BY cpf";
            return $con->conn->query($sql);
        }
        
        function resgataID($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM pessoa WHERE cpf='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirPessoa($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM pessoa WHERE cpf= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
            //echo "<script>location.href='../view/ListUsuario.php';</script>";
        }

        function alterarPessoa(Pessoa $model){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="UPDATE pessoa SET nome=:nome,genero=:genero WHERE cpf=:cpf";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':cpf',$model->getCpf());
            $stmt->bindValue(':nome',$model->getNome());
            $stmt->bindValue(':genero',$model->getGenero());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
    }

?>