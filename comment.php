<?php
        include("connect");
        if(isset($_POST["submit"])){
            $id = $_GET["id"];
            $commentaire =  addslashes($_POST["mess"]);
            
          $sql = "INSERT INTO `commentaire`(texte,publication_id) VALUES ('$commentaire',$id)";
          header("location:visuel.php");
  
          if(mysqli_query($conn, $sql)){
            echo "success";
          }else{
            echo "error: ". $sql . "<br>" .mysqli_error($conn);
          }
          // header("refresh:0");
  
        mysqli_close($conn);
      }
?>