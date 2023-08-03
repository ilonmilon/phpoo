<?php
    class fruta{
        // atributos
        public $nome;
        public $cor;

        //metodos
        function __construct($nome, $cor){
            $this->nome = $nome; 
            $this->cor = $cor;
        } 
        function get_name(){
            return $this->nome;
        }
        function set_cor(){
            $this->cor = $cor;
        }
        function get_cor(){
            return $this->cor;
        }
    }

    $maca = new fruta ("maca_ifsp_turmab","vermelho");
    $banana = new fruta ("banana_ifsp_turmab","amarelo");
    
    /*
    $maca->set_name("maca_ifsp_turmab");
    $banana->set_name("banana_ifsp_turmab");
    */

    echo $maca->get_name();
    echo "<br>". $banana->get_name();
?>