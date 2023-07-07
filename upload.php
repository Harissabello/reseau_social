<?php
include('connect.php');
if(isset($_POST["submit"])){
    $nom = addslashes($_POST["titre"]);
    // $bt = htmlentities($nom);
    // $b = html_entity_decode($bt);
    // echo $b;
    $fonc = addslashes($_POST["fonction"]);
    $test = $_POST["texte"];
    // $datepub = date("Y/m/d");
    $target_dir = "imagess/";
    $target_file = $target_dir . basename($_FILES["imagepub"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
      $check = getimagesize($_FILES["imagepub"]["tmp_name"]);
      if($check !== false) {
        echo "c'est bien une image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "le fichier est different d'une image.";
        $uploadOk = 0;
      }
      // renomer l'image
    $temp = explode(".", $_FILES["imagepub"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    $finaldestination = $target_dir .$newfilename;
    
    if($uploadOk == 0){
        echo"image non enregistre";
    
    }else{
        if(move_uploaded_file($_FILES["imagepub"]["tmp_name"],"" . $finaldestination)) {
            
            $sql = "INSERT INTO `publication`(titre, fonction, imagepub, texte, datepub)
             VALUES('$nom', '$fonc', '$finaldestination', '$test', NOW())";
             header("location:index.php");
            //  echo $sql;
    
        }
        if(mysqli_query($conn, $sql)){
          echo "succes";
        }else{
          echo "error: ". $sql . "<br>" .mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    }
?>