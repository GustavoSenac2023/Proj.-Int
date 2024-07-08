<?php

    class LivroCont{
        public static function cadastrarLivro(){
            include '../model/Livro.php';
            $liv=new Livro(null,null,null);
            $liv->cadastrarLivro($liv);
        }
        public static function listarLivro(){
            include '../model/Livro.php';
            $liv=new Livro(null,null,null);
            return $liv->listarLivro();
        }
        public static function resgataID($codigo) {
            include '../model/Livro.php';
            $liv = new Livro(null,null,null);
            return $liv->resgataID($codigo);
        }
        public static function excluirLivro($codigo) {
            include '../model/Livro.php';
            $liv = new Livro(null,null,null);
            return $liv->excluirLivro($codigo);
        }



    }

?>