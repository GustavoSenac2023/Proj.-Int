<?php

    class LivroCont{
        public static function cadastrarLivro($id,$titulo,$autor,$quant){
            include '../model/Livro.php';
            $liv=new Livro($id,$titulo,$autor,$quant);
            $liv->cadastrarLivro($liv);
        }
        public static function listarLivro(){
            include '../model/Livro.php';
            $liv=new Livro(null,null,null,null);
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
        public static function alterarLivro($id,$titulo,$autor,$quant) {
            include '../model/Livro.php';
            $liv=new Livro($id,$titulo,$autor,$quant);
            return $liv->alterarLivro($liv);
        }


    }

?>