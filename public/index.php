<?php
include ('function.php');
function baseConnect(){
        $host = "localhost"; 
        $user = "root";
        $password = "Tacaudrelier4!";
        $dbname ="checkpoint1"; 
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
$req = "select civility.civility, contact.lastname, contact.firstname from civility, 
contact where contact.civility_id=civility.id order by contact.lastname asc;";
$reponse = $dbh->query($req);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>civility</th>
                <th>lastname firstname</th>
            </tr>
        </thead>
         
          
        <tbody>

        <?php
           
            while($donnees = $reponse->fetch()) 
            {
                ?>

            <tr>
                <td><?php echo $donnees->civility;?></td>
                <td><?php echo fullname ($donnees->lastname, $donnees->firstname);?></td>

            </tr>

    <?php  
        }
    ?>
        </tbody>
    </table>

</body>

</html>