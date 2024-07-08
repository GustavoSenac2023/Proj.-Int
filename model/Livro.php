<?php

    class Livro{
        protected $id;
        protected $titulo;
        protected $autor;

        public function __construct($id,$titulo,$autor) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->autor = $autor;
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

    }

?>