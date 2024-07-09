<?php

    class Pessoa{
        protected $id;
        protected $nome;
        protected $genero;

        public function __construct($id,$nome,$genero) {
            $this->id = $id;
            $this->nome = $nome;
            $this->genero = $genero;
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

        public function getNome()
        {
                return $this->nome;
        }

        
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        public function getGenero()
        {
                return $this->genero;
        }

        
        public function setGenero($genero): self
        {
                $this->genero = $genero;

                return $this;
        }
        function cadastrarPessoa(Pessoa $pes){
                include '../dao/PessoaDAO.php';
                $pesdao=new PessoaDAO();
                $pesdao->cadastrarPessoa($this);
            }
            function listarPessoa(){
                include '../dao/PessoaDAO.php';
                $pesdao=new PessoaDAO();
                return $pesdao->listarPessoa();
            }
            function resgataID($codigo) {
                include '../dao/PessoaDAO.php';
                $pesdao=new PessoaDAO();
                return $pesdao->resgataID($codigo);
            }
            function excluirPessoa($codigo) {
                include '../dao/PessoaDAO.php';
                $pesdao=new PessoaDAO();
                return $pesdao->excluirPessoa($codigo);
            }
            function alterarPessoa(Pessoa $pes) {
                include '../dao/PessoaDAO.php';
                $pesdao=new PessoaDAO();
                return $pesdao->alterarPessoa($pes);
            }
    }

?>