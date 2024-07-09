<?php

    class PessoaCont{
        public static function cadastrarPessoa($nome,$genero){
            include '../model/Pessoa.php';
            $pes=new Pessoa(null,$nome,$genero);
            $pes->cadastrarPessoa($pes);
        }
        public static function listarPessoa(){
            include '../model/Pessoa.php';
            $pes=new Pessoa(null,null,null);
            return $pes->listarPessoa();
        }
        public static function resgataID($codigo) {
            include '../model/Pessoa.php';
            $pes = new Pessoa(null,null,null);
            return $pes->resgataID($codigo);
        }
        public static function excluirPessoa($codigo) {
            include '../model/Pessoa.php';
            $pes = new Pessoa(null,null,null);
            return $pes->excluirPessoa($codigo);
        }
        public static function alterarPessoa($id,$nome,$genero) {
            include '../model/Pessoa.php';
            $pes=new Pessoa($id,$nome,$genero);
            return $pes->alterarPessoa($pes);
        }


    }

?>