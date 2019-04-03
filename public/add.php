<?php
function baseConnect(){
        $host = "localhost";
        $dbname ="checkpoint1"; 
        $user = "root";
        $password = "Tacaudrelier4!";
         
        try{
            $connexion = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $connexion; 
        }
        catch(PDOException $e){
            die('Echec: ' .$e->getMessage());
        }
       
}
$dbh = baseConnect();
if ($_POST['civility'] == "Mr"){
    $civility = 1;
}
else {
    $civility = 2;
}
$req = "INSERT INTO contact (civility_id, lastname, firstname) values (".$civility.",'".$_POST['lastname']."','".$_POST['firstname']."');";

$reponse = $dbh->query($req);

$errors = array();
if (empty($_POST["firstname"])) {
        $errors["firstname1"] = "Your firstname cannot be empty";
}
if (empty($_POST["lastname"])) {
        $errors["lastname1"] = "Your lastname cannot be empty";
    }
if (count($errors) == 0) {
        header("Location: success.php");
        exit();
    }

    
    
?>