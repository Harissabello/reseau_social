<?php
session_start();
include('connect.php');

if(isset($_POST["emai"])){

$email = $_POST["emai"];
$motDePasse = $_POST["pwde"];

// @$roles = 0;

    $sql="SELECT * FROM user WHERE emails ='$email' AND motPasses ='$motDePasse'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id_session = $row['id_user'];
        $_SESSION["id_user"] = $id_session;
        echo json_encode(['success_msg' => 'User a été enregistrer']);
    } 
    else {
      echo json_encode(['suces_msg' => 'User n a pas été enregistrer']);
  }
  
    $conn->close();
   
    // $number = mysqli_num_rows($resultat);
    // if ($number==1) {
    //   $row = mysqli_fetch_assoc($resultat);
    //   $id_session = $row['id'];
    //   $_SESSION["id"] = $id_session;
    //   header('location:Accueil.php');
    // }
    // else{
    //   header('location:index.php');
    // }
  }

  //avant
//     $rss = mysqli_query($conn,$sql);
  
//     if(mysqli_num_rows($rss) > 0){
//       $row = $rss->fetch_assoc();
//       $id_session = $row['id'];
//       $_SESSION["id"] = $id_session;
      
     
//     }
//     else {
//       header('location:login.php');
//     }
  
//  mysqli_close($conn);
// }
?>






