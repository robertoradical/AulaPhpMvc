<?php
    class Usuario{
        
        public $nome;
        
        public function __construct($nome){
            $this->nome=$nome;
            
        }
        
        
    public function getUser($nome,$pass){
        $this->db->where('nm_Login',$nome);
        $this->db->where('pw_Login',$pass);
        $a= $this->db->get('Login');
     
     if($a->num_row() >0){
         if($a->row()->nome === "root"){
             return "admin";
             
         }else{
             return "comum";
             
         }
         
     }else{
         return false;
         
     }   
    }
        
       
        
    }



?>