<?php
if(isset($_POST['submit'])){
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $email=$_POST['email']; 

    class registrovan{
        protected $ime;
        protected $prezime;
        protected $email;
    }

    public function __construct($ime,$prezime,$email){
       
        $this->ime=$ime;
        $this->prezime=$prezime;
        $this->email=$email;
        
    }
}