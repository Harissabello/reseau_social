<?php
include('connect.php');
if(isset($_POST["nom"])){
  // $no = addslashes($_POST["noms"]);
    $nom = addslashes($_POST["nom"]);
    $pre = addslashes($_POST["prenom"]);
    $naiss = addslashes($_POST["naissance"]);
    // $date = addslashes($_POST["dateNaissance"]);
    $gen = addslashes($_POST["genre"]);
    $emal = addslashes($_POST["email"]);
    $cont = addslashes($_POST["contact"]);
    $mo = addslashes($_POST["motPasse"]);

    // $datepub = date("Y/m/d");
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    //   $check = getimagesize($_FILES["file"]["tmp_name"]);
    //   if($check !== false) {
    //     echo "c'est bien une image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    //   } else {
    //     echo "le fichier est different d'une image.";
    //     $uploadOk = 0;
    //   }
      // renomer l'image
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    $finaldestination = $target_dir .$newfilename;

        if(move_uploaded_file($_FILES["file"]["tmp_name"],"" . $finaldestination)) {
            
            $sql = "INSERT INTO `user`(nom, prenom, contacts, photoProfil, date_naissance, emails, motPasses, genres)
             VALUES('$nom', '$pre', '$cont', '$finaldestination', '$naiss','$emal', '$mo', '$gen')";
            //  header("location:login.php");
            //  echo $sql;
            if(mysqli_query($conn, $sql)){
              // echo "succes";
              // echo json_encode(['succes_msg' => 'User a été enregistrer']);
              echo 1;
          
            }else{
              echo "error: ". $sql . "<br>" .mysqli_error($conn);
            }
            mysqli_close($conn);
          }  
    }
?>