<?php

    class Retirada{
        protected $id;
        protected $status;
        protected $data;
        protected $fk_pessoa;
        protected $fk_livro;

        public function __construct($id,$status,$data,$fk_pessoa,$fk_livro) {
            $this->id = $id;
            $this->status = $status;
            $this->data = $data;
            $this->fk_pessoa = $fk_pessoa;
            $this->fk_livro = $fk_livro;
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        public function getStatus()
        {
                return $this->status;
        }

        
        public function setStatus($status): self
        {
                $this->status = $status;

                return $this;
        }

        public function getData()
        {
                return $this->data;
        }

        
        public function setData($data): self
        {
                $this->data = $data;

                return $this;
        }
        public function getFkPessoa()
        {
                return $this->fk_pessoa;
        }

        
        public function setFkPessoa($fk_pessoa): self
        {
                $this->fk_pessoa = $fk_pessoa;

                return $this;
        }

        public function getFkLivro()
        {
                return $this->fk_livro;
        }

        
        public function setFkLivro($fk_livro): self
        {
                $this->fk_livro = $fk_livro;

                return $this;
        }

        function cadastrarRetirada(Retirada $ret){
                include '../dao/RetiradaDAO.php';
                $retdao=new RetiradaDAO();
                $retdao->cadastrarRetirada($this);
            }
            function listarRetirada(){
                include '../dao/RetiradaDAO.php';
                $retdao=new RetiradaDAO();
                return $retdao->listarRetirada();
            }
            function resgataID($codigo) {
                include '../dao/RetiradaDAO.php';
                $retdao=new RetiradaDAO();
                return $retdao->resgataID($codigo);
            }
            function excluirRetirada($codigo) {
                include '../dao/RetiradaDAO.php';
                $retdao=new RetiradaDAO();
                return $retdao->excluirRetirada($codigo);
            }
            function alterarRetirada(Retirada $ret) {
                include '../dao/RetiradaDAO.php';
                $retdao=new RetiradaDAO();
                return $retdao->alterarRetirada($ret);
            }
            function pesquisarRetirada($com){
                include '../dao/RetiradaDAO.php';
                $retdao=new RetiradaDAO();
                return $retdao->pesquisarRetirada($com);
            }

    }

?>