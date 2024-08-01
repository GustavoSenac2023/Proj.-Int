<?php

    class RetiradaCont{
        public static function cadastrarRetirada($status,$data,$fk_pessoa,$fk_livro){
            include '../model/Retirada.php';
            $ret=new Retirada(null,$status,$data,$fk_pessoa,$fk_livro);
            $ret->cadastrarRetirada($ret);
        }
        public static function listarRetirada(){
            include '../model/Retirada.php';
            $ret=new Retirada(null,null,null,null,null);
            return $ret->listarRetirada();
        }

        public static function pesquisarRetirada($com){
            include '../model/Retirada.php';
            $ret=new Retirada(null,null,null,null,null);
            return $ret->pesquisarRetirada($com);
        }

        public static function resgataID($codigo) {
            include '../model/Retirada.php';
            $ret = new Retirada(null,null,null,null,null);
            return $ret->resgataID($codigo);
        }
        public static function excluirRetirada($codigo) {
            include '../model/Retirada.php';
            $ret = new Retirada(null,null,null,null,null);
            return $ret->excluirRetirada($codigo);
        }
        public static function alterarRetirada($id,$status,$data,$fk_pessoa,$fk_livro) {
            include '../model/Retirada.php';
            $ret=new Retirada($id,$status,$data,$fk_pessoa,$fk_livro);
            return $ret->alterarRetirada($ret);
        }


    }

?>