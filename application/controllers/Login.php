<?php

class Login extends CI_Controller{
    
    
    
    
    
    public function entrar(){
        $this->load->view("entrar");
        
        
    }
    
    public function auth(){
        $nome= $_POST["login"];
        $senha= $_POST["senha"];
        
        if($nome === "root" && $senha==="root"){
            $this->session->set_userdata("_ID","Admin");
            //$this->load->view("form");
            
        }else{
            $this->session->set_userdata("_ID","Comum");
            $this->session->set_userdata("_NOME",$nome);
            //$this->load->view("mypage2");
        }
        
        
    }
    public function admin(){
        $x= $this->session->userdata("_ID");
        if($x === "Admin"){
            echo "Bem Vindo";
            
        }else{
            echo "Voce não esta autorizado a ver este conteudo";
            
        }
        
        
    }
    
    
    
}