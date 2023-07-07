<?php
include('connect.php');
session_start();
$id = $_SESSION["id_user"];
$req = "SELECT * FROM `user` ";
  $result = $conn->query($req);

  if ($result->num_rows > 0) {
      $hari = $result->fetch_assoc();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

<table class="table">
<h1>Tableau de bord d'administration</h1>
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Genre</th>
      <th scope="col">Profil</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php	
    $sql = "SELECT * FROM user";
					$result = mysqli_query($conn, $sql);

					// Afficher les informations des participants dans le tableau
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
    ?>                        
    <tr>
      <th scope="row"><?= $row['id_user'] ?></th>
      <td><?php
      if ($row['genres'] == 'femme') {
        
        echo"<img src='image/imj11.png' width='30' height='30'>";
        
      } 
      
      else {
        echo"<img src='image/téléchargement (2).png' width='30' height='30'>";
      }
      
      ?></td>      
      <td><button class="btn btn-danger" id="<?php echo $row['id_user']?>" onClick="myFunction('<?php echo $row['nom'];?>','<?php echo $row['prenom'];?>','<?php echo $row['photoProfil'];?>','<?php echo $row['date_naissance'];?>','<?php echo $row['contacts'];?>','<?php echo $row['emails'];?>','<?php echo $row['genres'];?>')" data-toggle="modal"
                        data-target="#exampleModal">
      voir
    </button></td>
      <td><button class="btn btn-success" id="<?php echo $row['id_user']?>" onClick="myFun('<?php echo $row['id_user'];?>','<?php echo $row['nom'];?>','<?php echo $row['prenom'];?>','<?php echo $row['date_naissance'];?>','<?php echo $row['contacts'];?>','<?php echo $row['emails'];?>','<?php echo $row['genres'];?>')" data-toggle="modal" data-target="#modifi" >
                    Modifier
                  </button></td>
      <!-- Code HTML pour le bouton de suppression -->
<td><button type="button" class="btn btn-info btn-delete-user" data-user-id="<?php echo $row['id_user']?>">
  Supprimer
</button></td>
          
    </tr>
    <?php
    }
}


mysqli_close($conn);
    ?>
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <center>
        <img src="" id="photo" width="80" height="80" style="border-radius: 50%; margin-top: 20px" type="image">   
        <p style="font-weight: 800">Nom: <span id="nom"></span></p>
        <p style="font-weight: 800">Prenoms: <span id="prenom"></span></p>
        <p style="font-weight: 800">Date Naissance: <span id="date"></span></p>
        <p style="font-weight: 800">Contact: <span id="cont"></span></p>
        <p style="font-weight: 800">Email: <span id="email"></span></p>
        <p style="font-weight: 800">Genre: <span id="genre"></span></p>
        </center> 
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modifi" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
          <div class="wrapper wrapper--w960">
              <div class="card card-2">
                  <div class="card-heading"></div>
                  <div class="card-body">
                      <form method="POST" action="modifier.php"  enctype="multipart/form-data">
                      <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="use" name="id" hidden>
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="no" name="nom">
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="pre" name="prenom">
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="dat" name="date">
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="cont" name="contact">
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="emai" name="email">
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="genr" name="genre">
                          </div>
                          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  name="modif" type="submit" class="btn btn-success">Modifier</button>
      </div>
                      </form>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script>
      function myFunction($nom,$prenom,$photo,$date,$contact,$email,$genre) {
          document.getElementById("nom").innerHTML = $nom;
          document.getElementById("prenom").innerHTML = $prenom;
          document.getElementById("photo").src = $photo;
          document.getElementById("date").innerText = $date;
          document.getElementById("cont").innerText = $contact;
          document.getElementById("email").innerText = $email;
          document.getElementById("genre").innerText = $genre;
          //  
      }

      function myFun($id,$nom,$prenom,$date,$contact,$email,$genre) {
          document.getElementById("use").value = $id;
          document.getElementById("no").value = $nom;
          document.getElementById("pre").value = $prenom;
          document.getElementById("dat").value = $date;
          document.getElementById("cont").value = $contact;
          document.getElementById("emai").value = $email;
          document.getElementById("genr").value = $genre;
          //  
      }
    </script>
    <script>
      // Code JavaScript pour supprimer un utilisateur avec AJAX
$(document).on('click', '.btn-delete-user', function() {
  
  // Récupérer l'identifiant de l'utilisateur à supprimer depuis l'attribut data-user-id du bouton
  var userId = $(this).data('user-id');
  
  // Confirmer la suppression avec une boîte de dialogue
  if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) {
    console.log(userId);
    // Envoyer une requête AJAX pour supprimer l'utilisateur
    $.ajax({
      url: 'supprimer_utilisateur.php',
      type: 'POST',
      data: {user_id: userId},
      success: function(response) {
        parseJson = JSON.parse(response);
        // Rafraîchir la page pour afficher la liste des utilisateurs mise à jour
        
        if(parseJson.success_msg)
        {
          window.location.href="Admin.php";
          // document.getElementById('registrationFrm').reset();
        }
        else{
          if (parseJson.suces_msg) {
            $('#res1').html("Veuillez vérifier votre email ou mot de passe!");   
          }
        }
      },
      error: function(xhr, status, error) {
        alert('Une erreur est survenue lors de la suppression de l\'utilisateur : ' + error);
      }
    });
  }
});

    </script>
</body>
</html>
