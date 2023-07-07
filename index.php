<?php
include('connect.php');
session_start();
if(!$_SESSION["id_user"]){
  header("location:login.php");
}
else{
  $id = $_SESSION["id_user"];
  $req = "SELECT * FROM `user` WHERE id_user = '$id' ";
  $result = $conn->query($req);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
  }


?>

<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Reseau Social</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css2/style.css">
    <!-- <link rel="stylesheet" href="css2/style2.css"> -->
    <link rel="stylesheet" href="css1/style1.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

<style type="text/css">

	div.gallery {
  border: 1px solid #ccc;
  width: 278px;
  height: 288px;
  border-radius: 10px;

  }

  div.gallery:hover {
    box-shadow: 2px 2px 8px lightgray;
  }

  div.gallery img {
    width: 298px;
    height: 250px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  
    }
  .para{
    width: 270px;
    padding-top: -5px;
    font-size: 12px;
    margin-left: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
  }
  .para1{
    margin-left: 10px;
    margin-top: -10px;
    font-size: 12px;
    width: 270px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
  }
 div.desc1{
  padding-left: 15px;
  text-align: center;
  width: 250px;
  height: 100px;
  background-color: blue;
 }

	.contenant {
  height: 200px;
  width: 278px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  margin-top: -200px;
  position: absolute;
 }
 .contenant:hover {
  position: absolute;
  opacity: 1;
  box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

 }
 .contenant:hover .overlay {
  opacity: 1;
 }
 .contenant:hover .img_plus {
  opacity: 1;
 }




 /* texte dans image */
 .overlay {
  
  margin-left: 10px;
  opacity: 0;
  transition: .5s ease;
  color: white;
  vertical-align: text-bottom;
  font-size: 11px;
  float: left;
  text-align: left;
  margin-top: 150px;

 }

 /* la petite image sur l'image */
 .img_plus {
  
  opacity: 0;
  transition: .5s ease;  
  text-align: right;
  height:40px;
  width:40px;
 
 }
 
 #commentaire {
	  background: #f2f2f2;
    border: 1px solid #999;
    bottom: 0;
    color: #36b;
    cursor: pointer;
    display: block;
    height: 28px;
    line-height: 28px;
    min-width: 110px;
    padding: 0 5px;
    position: fixed;
    right: 20px;
    text-align: center;
    z-index: 4;
    font-family:'Roboto',Helvetica,Sans-Serif;
    font-size: 13px;
 }
 /*caroussel*/
 .swiper {
        width: 100%;
        height:  20%;
        margin-right: 20px;

      }

  .swiper-slide {
        
    font-size: 18px;
    background: #fff;
    border-radius: 50px;   
    border: 0.5px solid #008518;
    width: 150px;
    height: 50px;
    margin-left: 10px;      
  }

 /*fin caroussel*/

		.div_text_scroll {
			font-size: 12px;
			width: 150px;
			margin-left: 40px;
      margin-top: -40px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
		}
		.img_scroll {
			width: 30px;
			height: 35px;
			border-radius: 50%;
      padding-top: 10px;
      margin-left: 5px;
		}
</style>

</head>
<body>
	&nbsp;
  <header>
    
  <div style="display: flex;align-items: center;">
     <img width="110" height="110" src="images/img.jpeg" style="margin-top: -80px">
       <input id="re" class="re1" type="text" name="rech">
       <img style="position: absolute; margin-left: 580px; margin-top: -70px" src="images/b4f9ef87c592af0145044285cdc1f706-removebg-preview.png" width="25" height="20" >
       <div class="w3-container">
     <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green" style="margin-left:500px; margin-top: -80px"><img src="images/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396-removebg-preview (1).png" width="30" height="30" type="image">Profil</button>
     <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-green"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Informartion utilisateur</h2>
      </header>
      <div class="w3-container">
        <center>
         <img src="<?=$row['photoProfil']?>" width="100" height="100" style="border-radius: 50%; margin-top: 20px" type="image">   
        <p style="font-weight: 800">Nom: <?=$row['nom']?></p>
        <p style="font-weight: 800">Prénom: <?=$row['prenom']?></p>
        <p style="font-weight: 800">Numéro: <?=$row['contacts']?></p>
        <p style="font-weight: 800">Genre: <?=$row['genres']?></p>
        </center>
      </div>
      <footer class="w3-container w3-green">
        <a href="deconnexion.php " style="text-decoration: none">Déconnexion</a>
      </footer>
    </div>
   </div>
  </div>

      <nav class="navi">
        <ul>
          <li><a href="#">TOUT</a></li>
          <li><a href="#">ACTUALITES</a></li>
          <li><a href="#"><B>IMAGES</B></a></li>
          <p class="trt"></p>
          <li><a href="formPublication.php" style="color: #008518"><b>PUBLIER</b></a></li>
        </ul>
      </nav>
     
      <form method="POST" action="">
        <div class="file" style="display: flex;align-items: center; margin-right: 900px">
          Type de Publication:	 
          <select name="fonction" style="border-style: none;font-weight: bold;">
            <option selected value="">Choisir</option>
            <option value="Restaurant">Restaurant</option>
            <option value="Recette">Recette</option>
            <option value="Experience" >Retourd'Experience</option>
            <option value="Conseil">Conseil</option>
          </select>
          <button type="submit" class="bt11">Filtre <img  class="imj9" src="images/filtre.png"></button>
      
        </div>
    
      </form>
<?php
      $show = 10;

    if(isset($_POST["add"])){

      $show= $_POST["add"];
      
    }

 if (isset($_POST['fonction'])) {

  $fonction = $_POST['fonction'];

  $sql = "SELECT * FROM `publication` WHERE fonction = '$fonction' LIMIT $show";

  $result1 = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql);

  

  if (mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0) {
  $data1 = $result1;
  $data2 = $result2;
  }else {
    $req ="SELECT*FROM publication ORDER BY id DESC LIMIT $show";

    $result3 = mysqli_query($conn, $req);
    $result4 = mysqli_query($conn, $req);
    $data1 = $result3;
    $data2 = $result4;
  
  }

 }else {
  $req ="SELECT*FROM publication ORDER BY id DESC LIMIT $show";

  $result5 = mysqli_query($conn, $req);
  $result6 = mysqli_query($conn, $req);
  $data1 = $result5;
  $data2 = $result6;
 }
?>

     <p class="trt1"></p>

  </header>
 
  <section id="premier"  style="position: relative;">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <?php 
              while($hari = mysqli_fetch_assoc($data1)){
                 ?>
          <div class="swiper-slide">
              <img class="img_scroll" src="<?=$hari['imagepub']?>" alt="image">
          <div class="div_text_scroll"><?=$hari['titre']?><br>  <b><?=$hari['fonction']?></b></div>
      
          </div>

          
          <?php
            }
          ?>
        
        </div>
    </div>
      
    

      <!-- les fleches -->
      <div class="swiper-button-next" style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -40px;"></div>
      <div class="swiper-button-prev" style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -40px;"></div>
      <!--<div class="swiper-pagination"></div>-->

  </section>
 


	 <!--galerie image-->
  <section id="deuxieme" style="width: 100%;padding-top: 20px; padding-right: 30px;">
   <?php
    while($har = mysqli_fetch_assoc($data2)){
    ?>
    <div style="display: inline-flex;justify-content: space-around;margin-left: 5px;margin-bottom:10px" >

      <div class="gallery" class="boite" >
        <a  href="visuel.php?id=<?=$har['id']?>">
        <img style="width: 278px;height: 200px;position:relative;" src="<?=$har['imagepub']?>" alt="">
          <div class="contenant">

          <div class="overlay" >300 x 250 - jpg<br> maximumwall.com</div>
          <img class="img_plus" style="height: 40px;width: 40px;float: right;" src="images/img_plus.png">
      
          </div>
        </a>
          <div class="bel">
          <p class="para"> <?=$har['texte']?> </p>
          <p class="para1"> <?=$har['datepub']?> </p>
          </div>
      </div>

      </div>
      <?php
      }

      
       mysqli_close($conn); 
       
      ?>

    </div>  
  </section>

<!--commentaire-->
  <div class="commentaire" id="commentaire" style="border: 1px solid #008518">
    <a style="margin-top: 5px; text-decoration: none;" href="#">
	    <img style="float: left;border: 0;
        height: 14px;
        margin: 0 5px -4px 0;
        width: 14px;
        display: inline;
        margin-top: 8px;
        " src="images/commentaire.jpg">
        <div style="color: #008518;">commentaire</div>
    </a>
  </div>

<!--fin commentaire-->
     <?php    
       $nbre2 = mysqli_num_rows($data1) + 10;
     ?>

  
  <form action="" method="post">
    <input type="number" name="add" value="<?php echo $nbre2 ?>" hidden>
    <button class="btn2" type="submit">Voir plus...</button>
  </form>

	


   <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 11,
        spaceBetween: 2,
        slidesPerGroup: 11,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

</body>
</html>
<?php
}
?>