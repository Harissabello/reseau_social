<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css3/styles.css">
    <link rel="stylesheet" href="css"/styless.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
                .imj1{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
       
        form input.rec{
            width: 400px;
            height: 40px;
            border-radius: 20px;
            padding-left: 10px;
            margin-left: 90px;
            border: none;
            box-shadow: 0px 0px 0px 0.5px rgb(129, 128, 128);
        }
        .bloc4 nav ul{
    margin-left: 100px;
}
        form input::placeholder{
  color: #098d32;
 }
 #output{
    background-color: white;
    border: none;
    margin-left: 10px;
    margin-top: 45px;
 }
 header{
    width: 100%;
    height: 200px;
    background-color: white;
 }
 .dropdown{
    margin-top: -50px;
    margin-right:300px;
 }
 /* .bloc4{
    position: relative;
 } */
 .bloc5{
    margin-top: -80px;
 }
 .bloc4 li a{
   font-size: 12px;
   color:  black;
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   margin-left: 10px;
   font-weight: -700;
 }
.bloc4 li a:hover{
    font-size: 12px;
    text-decoration: none;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 12px;
    color: black;
}
 
 .trait2{
    border-bottom: 3px solid #098d32;
    margin-left: 6px;
    margin-top: -5px;
 }

 div.gallery {
  width: 500px;
  height: 300px;
  padding: 60px 0px 0px 20px;
}

		.img_scroll {
			width: 100px;
			height: 100px;
      padding-left: 25px;
		}
    .swiper-wrapper{
      margin-left: 30px;
    }
    
    .blc1{
	width:600px;
	height: 200px;
  float: right;
  margin-top: -300px;
 }
 .siz{
  font-size: 20px;
  color: rgb(96, 93, 93);
  margin-top: 20px;
 }
 .trait{
  border-bottom: 1px solid rgb(231, 231, 231);
  width: 560px;
  padding-top: 50px;
 }
 /* .trt{
  border-bottom: 1px solid rgb(231, 231, 231);
  width: 270px;
  padding-top: 20px;
  margin-left: 20px;
 } */
 .pri{
  padding-top: 30px;
  margin-left: 30px;
  font-size: 25px;
  color: red;
 }
 .ron1{
  color: black;
  background-color: transparent;
  border: none;
  padding-top: 5px;
  margin-left: 20px;
}
.ron2{
  color: black;
  background-color: transparent;
  border: none;
  padding-top: 10px;
  margin-left: 20px;
}
/* .trait1{
  border-left: 1px solid lightgray;
  height: 30px;
  margin-top: 5px;
  margin-left: 25px;
 } */
.lienn{
  background-color: #098d32;
  border-radius: 4px;
  border: none;
  width: 200px;
  height: 40px;
  margin-left: 170px;
  margin-top: 30px;

}
.lienn a{
  text-decoration: none;
  color: white;
  font-size: 17px;
}


 .carr{
  float: right;
  margin-right: 200px;
  margin-top: -600px;
 }
.carr button{
  border: none;
}
.lienn1{
  width: 280px;
  height: 50px;
  background-color: rgb(236, 234, 234); 
  padding-right: 180px;  
  padding-top: 5px;
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.lienn1 a{
  font-size: 14px;
  color: black;
  text-decoration: none;
  font-weight: 500;
}
.lienn2{
  width: 280px;
  height: 50px;
  background-color: white; 
  padding-right: 120px; 
  padding-top: 5px;
  margin-top: -15px;
  position: relative;
}

.lienn2 a{
  font-size: 14px;
  text-decoration: none;
  color: rgb(79, 77, 77);
}
.lienn3{
  width: 280px;
  height: 50px;
  background-color: white; 
  padding-right: 90px; 
  padding-top: 5px;
  margin-top: -9px;
  position: relative;
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
}

.lienn3 a{
  font-size: 14px;
  color: rgb(79, 77, 77);
  text-decoration: none;
}
.cad{
  width: 280px;
  height: 150px;
  background-color: white;
  border-radius: 2px;
  margin-top: 20px;
}
.sizz{
  font-size: 12px;
  padding-top: 5px;
  color: rgb(96, 93, 93);
  float: right;
  margin-left: 20px;
  width: 200px;
 }
 .prii{
  font-size: 15px;
  color: red;
  float: right;
  margin-right: 80px;
  margin-top: -15px;

 }
 .ptlien{
  background-color: #098d32;
  border-radius: 4px;
  border: none;
  width: 270px;
  height: 30px;
  margin-left: 5px;
  margin-top: 15px;

}
.ptlien a{
  text-decoration: none;
  color: white;
  font-size: 14px;
}
.tir{
  font-size: 18px;
  font-weight: 600;
  color: black;
  margin-left: 20px;
}
.trt2{
  border-bottom: 1px solid rgb(231, 231, 231);
  width: 860px;
 }
 .carr1{
  width: 400px;
  height: 350px;
  border: 1px solid rgb(231, 231, 231);
  margin-top: 40px;
  margin-left: 30px;
 }
 .tir1{
  font-size: 13px;
  font-weight: 500;
  color: black;
  margin-left: 20px;
  padding-top: 10px;
}
.trt3{
  border-bottom: 1px solid rgb(231, 231, 231);
  width: 400px;
 }
 .carr2{
  width: 330px;
  height: 350px;
  border: 1px solid rgb(231, 231, 231);
  margin-top: -350px;
  margin-right: 80px;
  float: right;
 }
 .tir2{
  font-size: 13px;
  font-weight: 500;
  color: black;
  margin-left: 20px;
  padding-top: 10px;
}
.trt4{
  border-bottom: 1px solid rgb(231, 231, 231);
  width: 330px;
 }
 .par4 li{
  margin-left: 10px;
  font-size: 15px;
  color: black;
 }
 .par1{
  margin-left: 10px;
  font-size: 14px;
 }
 .par2{
  margin-left: 10px;
  font-size: 14px;
 }
 .par3{
  margin-left: 10px;
  font-size: 14px;
 }
 .par5{
  margin-left: 10px;
  font-size: 14px;
 }
 .par6{
  font-size: 16px;
  color: black;
  margin-left: 10px;
  margin-top: 15px;
 }
 .imr img{
  margin-left:130px;
 }

	</style>
</head>
<body style="background-color: rgb(224, 220, 220);">

<!-- l'entête du site -->

<header>
<div class="bloc1">
            <img src="image/emaraicher.png" class="imj1">
               <form method="POST">
                 <input type="text" id="rech" class="rec" name="rech" placeholder="Search..." onkeup="search()">
                 <button type="button" id="output"> <img  src="image/b4f9ef87c592af0145044285cdc1f706-removebg-preview.png" width="25" height="20"> </button>
              </form>

            <nav class="navi1">
            <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #098d32;"> Vendre </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" style="background-color: #098d32; color: white" href="#">Connexion</a></li>
            <li><a class="dropdown-item" style="background-color: #098d32; color: white" href="#">Déconnexion</a></li>
        </ul>
    </div>
            </nav>
        </div>
        <div class="bloc4">
            <nav>
            <ul>
                    <li class="lien1">
                        <a href="#">TOUT <p class="trait1"></p></a>

                    </li>
                    <li>
                        <a class="lien4" href="#">IMAGES <p class="trait2"></p></a>
                    </li>
                    <li>
                        <a href="#">VIDÉOS <p class="trait3"></p></a>

                    </li>
                    <li>
                        <a href="#">CARTES<p class="trait4"></p></a>

                    </li>
                    <li>
                        <a href="#">ACTUALITÉS <p class="trait5"></p></a>

                    </li>
                </ul>
            </nav>
        </div>
      
    
      </form>
        </div>

    </header>

<!-- première partie du site -->

      <section id="deuxieme" >
      <div style="width: 860px;  height:600px; margin-left: 30px; padding-top: 20px; position: relative; background-color: white; border-radius: 2px">
      <?php
    if(isset($_GET["id"])){
        $id= $_GET["id"];
    }
    $req ="SELECT * FROM `publication` WHERE id = $id";
    $result = mysqli_query($conn, $req);
    $har = mysqli_fetch_assoc($result);
    ?>
<?php 
    // if(isset($_GET["id"])){
         
  
    //   $id= $_GET["id"];
         
    //       $sql = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '1'";
  
    //       $result = mysqli_query($conn, $sql);
    //       $count1 = mysqli_num_rows($result);

    //       $sql2 = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '0'";
  
    //       $result1 = mysqli_query($conn, $sql2);
    //       $count2 = mysqli_num_rows($result1);
          
    //     }
          ?>

      <div class="gallery">
        <a  href="#">
        <img style="width: 230px;height: 190px;position:relative;" src="<?=$har['imagepub']?>" alt="">
        </a>
      </div>

      <div class="blc1">
        <p class="siz">Le nom de l'article est <?=$har['titre']?> et de la catégories <?=$har['fonction']?> </p>

<p class="trait"></p>
<P class="pri"> prix: <STRONG><?=$har['prixP']?> FCFA</STRONG></P>

<!-- Ajout au panier -->
<div style="display: flex;">

<!-- button acheter -->
<button class="lienn">
  
  <a href="">
  <img class="ihg1" src="image/84426-removebg-preview.png" width="20" height="25" alt="">
    J'achète</a>
</button>
</div>
      </div>
      <!-- Pour le slide -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
              <a href="">
              <img class="img_scroll" src="<?=$har['imagepub1']?>" alt="image">
              </a>
          </div>
          <div class="swiper-slide">
              <a href="">
              <img class="img_scroll" src="<?=$har['imagepub2']?>" alt="image">
              </a>
          </div>
          <div class="swiper-slide">
              <a href="">
              <img class="img_scroll" src="<?=$har['imagepub3']?>" alt="image">
              </a>
          </div>
      </div> 
      </div> 
    <!-- les fleches -->
      <div class="swiper-button-next" style="height: 30px;width: 35px;color: black;position: absolute;margin-top:50px; padding-right: 550px;">
    </div>
      <div class="swiper-button-prev" style="height: 30px;width: 35px; color: black;margin-top: 50px;"></div>
      <P class="trt"></P>
      <p style=" font-weight:500; padding-left: 10px">PARTAGER CE PRODUIT</p>
     <div style="padding-left: 10px">
     <a href="https://facebook.com"><img src="images/facebook.svg" alt=""></a>
      <a href="https://twitter.com">
        <img src="images/twitter.svg" alt="">
      </a>
     </div>
      </div>
      <div class="carr">
        <p>
        <button class="lienn1">
          <a href="#premier">
            <img src="image/téléchargement__3_-removebg-preview - Copie.png" width="20" height="20" alt="photo">
            Détails
          </a>
        </button>
        </p>
        <p>
        <button class="lienn2">
          <a href="#deuxieme">
            <img src="image/1541514-removebg-preview.png" width="20" height="20" alt="photo">
            Fiche Technique
          </a>
        </button>
        </p>
        <!-- <p class="trt1"></p> -->
        <button class="lienn3">
          <a href="#">
            <img src="image/54761-removebg-preview.png" width="20" height="20" alt="photo">
            Commentaires  clients
          </a>
      </button>
      <div class="cad">
      <img style="width: 60px;height: 50px; margin-top: 25px;padding-left: 5px;" src="<?=$har['imagepub']?>" alt="">
      <p class="sizz">Le nom de l'article est <?=$har['titre']?> et de la catégories <?=$har['fonction']?> </p>
      <P class="prii"> prix: <STRONG><?=$har['prixP']?> FCFA</STRONG></P>
      <button class="ptlien">
  <a href="">
  <img class="ihg1" src="image/84426-removebg-preview.png" width="20" height="25" style="background-color: " alt="">
    J'achète</a>
</button>
      </div>
      </div>
      </section>
      <section id="premier">
        <div style="width: 860px;  height:1400px; margin-left: 30px; padding-top: 20px; position: relative; background-color: white; border-radius: 2px; margin-top: 550px;">
        <p class="tir" >Détails</p>
        <p class="trt2"></p>
        <P class="par6"><?=$har['detailsProduits']?></P>
        <div class="imr">
          <P><img src="<?=$har['imagepub']?>" width="400" height="300" alt=""></P>
          <P><img src="<?=$har['imagepub1']?>" width="400" height="300" alt=""></P>
          <P><img src="<?=$har['imagepub2']?>" width="400" height="300" alt=""></P>
          <P><img src="<?=$har['imagepub3']?>" width="400" height="300" alt=""></P>
        </div>
        </div>
      </section>

      <section id="deuxieme">
        <div style="width: 860px;  height:600px; margin-left: 30px; padding-top: 20px; position: relative; background-color: white; border-radius: 2px;">
        <p class="tir" >Fiche Technique</p>
        <p class="trt2"></p>
        <div class="carr1">
          <p class="tir1">Modalité de Paiement et Livraison</p>
          <p class="trt3"></p>
          <p class="par4">
            <li>
              Délais de Livraison : 
            <strong><?=$har['delaiPaiement']?></strong>
            </li>
          </p>
          <p class="par4">
            <li>
             Moyen de Paiement : 
            <strong><?=$har['moyen']?></strong>
            </li>
          </p>
          <p class="par4">
            <li>
              Prix de Transport : 
            <strong><?=$har['prixT']?> FCFA</strong>
            </li>
          </p>
        </div>
        <div class="carr2">
          <p class="tir2">Descriptif Technique</p>
          <p class="trt4"></p>
          <p class="par2">
            <strong>Qantité</strong>: <?=$har['quantite']?>
          </p>
          <p class="par3">
            <strong>Produit</strong>: <?=$har['fonction']?>
          </p>
          <p class="par5">
            <strong>Poids(Kg)</strong>: <?=$har['poids']?>
          </p>
        </div>
        </div>
      </section>

   <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 11,
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
      <script>

      </script>
    
<script>
      function ldike(id) {
        var count=jQuery('#like'+id).html();
        count++;
        jQuery('#like'+id).html(count);
      }

      $(document).ready(function() {
        $('form').submit(function(e) {
          e.preventDefault();
          const avis = $(this).find('input[name=avis]').val();
          const id = $(this).find('input[name=id]').val();
          const _this = this
          $.post("likeDislike.php", { id, avis }, function(res){
            const result = JSON.parse(res)
            if(result) {
              $(_this).find('input[name=count1]').val(result.like)
              $(_this).find('input[name=count2]').val(result.dislike)
            }
          });
        });
      });

      
</script>
</body>
</html>

