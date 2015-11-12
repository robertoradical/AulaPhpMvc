<?php
    class Model extends CI_Model{
        
        public function insert(Usuario $usu){
            $this->db->insert('Usuario',$usu); //Usuario = nome da tabela, $usu parametro de entrada
            
        }
        
        public function serchAll(){
            
            $query= $this->db->query("Select * from Usuario");
            return $query->result();
        }
        
        
        
    } 
    



?>