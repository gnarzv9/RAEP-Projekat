<?php
    if(isset($_POST['posalji'])){
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $email=$_POST['email']; 

    class registrovan{
        protected $ime;
        protected $prezime;
        protected $email;
    

    function __construct($ime,$prezime,$email){
        $this->ime=$ime;
        $this->prezime=$prezime;
        $this->email=$email;
    }

    function Ime(){
        if(ctype_alnum($this->ime)){
            return true;
        }else{
            return false;
        }
    }

    function Prezime(){
        if(ctype_alnum($this->prezime)){
            return true;
        }else{
            return false;
        }
    }

    function Email(){
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
    }

    class register extends registrovan{

        public function Register(){
    
          if($this->Ime()==false){
            header("location:loseime.php");
            exit();
           }
    
          if($this->Prezime()==false){
            header("location:loseprezime.php");
            exit();
          }
          if($this->Email()==false){
            header("location:losemail.php");
            exit();
          }

          $mysqli=mysqli_connect("localhost", "root", "", "lopte");
          if($mysqli->connect_errno){
              echo "Neuspesno povezivanje na bazu.";
              exit();
          }

        $sql="INSERT INTO korisnici(ime,prezime,email) VALUES (?,?,?)";
        if(!$stmt=$mysqli->prepare($sql)){
        echo 'Neispravan unos.';
        }
        $stmt->bind_param('sss',$this->ime,$this->prezime,$this->email);

        if($stmt->execute()){
            header('Location: uspesnaregistracija.php');
        }
        else{
            echo"Neuspešna registracija";
        }
        }
    }
    

$korisnik = new register($ime,$prezime,$email);
$korisnik->Register();

}
?>



