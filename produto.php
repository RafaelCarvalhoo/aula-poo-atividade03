<?php

    class produto {
        private $descricao;
        private $estoque;
        private $preco;
        private $fabricante;
        
        public function __construct(
            $descricao, 
            $estoque, 
            $preco ) {
            
            $this->descricao = $descricao;
            $this->estoque = $estoque;
            $this->preco = $preco; 
        }
        
        public function getDescricao() 
        {
            return $this->descricao;
        }
        
        
        public function getEstoque() 
        {
            return $this->estoque;
        }
        
        
        public function getPreco() 
        {
            return $this->preco;
        }
        
        
        public function getfabricante() 
        {
            return $this->fabricante;
        }
        
        public function setFabricante($fabricante) 
        {
            $this->fabricante = $fabricante;
        }
}