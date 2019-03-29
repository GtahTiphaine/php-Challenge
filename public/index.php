<?php

$maBDD= checkpoint;

{
 $dbh = new PDO("mysql:host=localhost", 'root', "Tacaudrelier4!"); // ouverture de la bdd//

}

//formulaire
if($_POST) //si post existe 
{    

        $errors = array();


        // start validation
        ///firstName
        if(empty($_POST['firstName']))
        {
            $errors['firstName1'] = "Le champ nom doit être rempli";//firstName= error
        }
        

        ///lastName
        if(empty($_POST['lastName']))
        {
            $errors['lastName1'] = "Le champ prénom doit être rempli";
        }
      
       
        if(empty($_POST['civility']))
        {
            $errors['civility1'] = "Le champ prénom doit être rempli";
        }

       

       

        //check errors
        if(count($errors)== 0) //compter si il y a des erreurs 
        {
            //diriger vers la page succès
            header("location: succes.php"); // renvoie la page succès si count à 0
            exit(); 

        }
     
}

?>

<!Doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
<!-- tableau -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Civility</th>
      <th scope="col">Contact</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>  
    </tr>
    
     
  </tbody>
</table>


<!--formulaire-->



<body>
    <h1> Contact </h1>

    <form action="" method="post">

        <div>
            <p>firstname <span style="color:#ff0000;">*</span>:
                <!----champs obligatoire-->
                <input type="text" name="firstName" required id="firstName" value="<?php if(isset($_POST['fisrtName'])) echo $_POST['name']; ?>"
                    size="30" />
            </p>
            <!--value != errors / name != name1-->
            <p><?php if(isset($errors['firstName1'])) echo $errors['firstName1'];?></p>
            <!--lien avec le if declenche message d'erreurs-->
        
        </div>

        <div>
            <p>lastname <span style="color:#ff0000;">*</span>:
                <!----champs obligatoire-->
                <input type="text" id="lastName" required value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"
                    name="lastName" size="30" />
            </p>
            <!--value != errors / prenom1 != prenom1-->
            <p><?php if(isset($errors['lastName1'])) echo $errors['lastName1'];?></p>
            <!--lien avec le if declenche message d'erreurs-->
        </div>
        <div>
            <p>Civility <span style="color:#ff0000;">*</span>:
                <!----champs obligatoire-->
                <input type="text" id="civility" required value="<?php if(isset($_POST['civility'])) echo $_POST['civility']; ?>"
                    name="civility" size="30" />
            </p>
            <!--value != errors / civility1 != civility-->
            <p><?php if(isset($errors['civility1'])) echo $errors['civility1'];?></p>
            <!--lien avec le if declenche message d'erreurs-->
        </div>
        
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>