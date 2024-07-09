<?php

    class LivroDAO{
        function cadastrarLivro(Livro $model){
            include 'Conexao.php';
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO livro (titulo,autor) VALUES (:titulo,:autor)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':titulo',$model->getTitulo());
            $stmt->bindValue(':autor',$model->getAutor());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
        }
        function listarLivro(){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM livro ORDER BY id";
            return $con->conn->query($sql);
        }
        
        function resgataID($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM livro WHERE id='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirLivro($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM livro WHERE id= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/ListUsuario.php';</script>";
        }

        function alterarLivro(Livro $livro){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="UPDATE livro SET titulo=:titulo,autor=:autor WHERE id=:id";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':id',$livro->getId());
            $stmt->bindValue(':titulo',$livro->getTitulo());
            $stmt->bindValue(':autor',$livro->getAutor());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
    }

?>