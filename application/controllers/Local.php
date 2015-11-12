<?php

class Local extends CI_Controller{
    
    public function entrar(){
        
        $this->load->view("txt");
        
    }
     public function comumm(){
        
        $this->load->view("comumview");
        
    }
     public function visitante(){
        
        $this->load->view("visitanteview");
        
    }
    
    public function logout(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_NOME");
        
    }
    
    public function page(){
        if($this->session->userdata("_NOME") != null){
            
        echo "Pagina de Usuario";    
            
        }else{
            
            redirect("/Local/entrar");
        }
        
    }
    
    public function auth(){
        $nome= $_POST["login"];
        $senha= $_POST["senha"];
        
        if($nome === "root" && $senha==="root"){
            $this->session->set_userdata("_ID","Admin");
           // redirect('/Local/admin');
            
        }if($nome === "roberto" && $senha==="jo1166"){
            $this->session->set_userdata("_ID","Comum");
            $this->session->set_userdata("_NOME",$nome);
           // redirect('/Local/comumm');
            
        }else{
            $this->session->set_userdata("_ID","Visitante");
           // redirect('/Local/visit');
            
        }
    
    
}

    public function admin(){
        
            echo "Bem Vindo Administrador do Sistema";
            
    }
    public function comum(){
        $nome = $this->session->userdata("_NOME");
            echo "Bem Vindo ".$nome;
            
    }
    public function visit(){
        
            echo "Bem Vindo Visitante";
            
    }
    
    public function nova(){
        
        if($nome === "roberto" && $senha==="jo1166"){
            $this->session->set_userdata("_ID","Comum");
            $this->session->set_userdata("_NOME",$nome);
            redirect('/Local/comumm');
            
        }else{
            $this->session->set_userdata("_ID","Visitante");
            redirect('/Local/visitante');
            
            
        }
        
        
    }
}