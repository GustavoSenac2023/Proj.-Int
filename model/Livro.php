<?php

    class Livro{
        protected $id;
        protected $titulo;
        protected $autor;
        protected $quant;

        public function __construct($id,$titulo,$autor,$quant) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->quant= $quant;
        }

        public function getQuant()
        {
                return $this->quant;
        }

        public function setQuant($quant): self
        {
                $this->quant = $quant;

                return $this;
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

        public function getTitulo()
        {
                return $this->titulo;
        }

        
        public function setTitulo($titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }

        public function getAutor()
        {
                return $this->autor;
        }

        
        public function setAutor($autor): self
        {
                $this->autor = $autor;

                return $this;
        }

        function cadastrarLivro(Livro $liv){
            include '../dao/LivroDAO.php';
            $livdao=new LivroDAO();
            $livdao->cadastrarLivro($this);
        }
        function listarLivro(){
            include '../dao/LivroDAO.php';
            $livdao=new LivroDAO();
            return $livdao->listarLivro();
        }
        function resgataID($codigo) {
            include '../dao/LivroDAO.php';
            $livdao=new LivroDAO();
            return $livdao->resgataID($codigo);
        }
        function excluirLivro($codigo) {
            include '../dao/LivroDAO.php';
            $livdao=new LivroDAO();
            return $livdao->excluirLivro($codigo);
        }
        function alterarLivro(Livro $liv) {
            include '../dao/LivroDAO.php';
            $livdao=new LivroDAO();
            return $livdao->alterarLivro($liv);
        }
    }

?>