<?php 
session_start();
if (isset($_SESSION['id_user'])) {
  
    header("Location: index.php");
  }
  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">connexion</h2>
                    <form method="POST" id="registrationFrm"  enctype="multipart/form-data">
                       
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Email" id="email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Mot de passe" id="pwd" name="pwd">
                        </div>
                        <div id="res" style="color:red;"></div>
                        <div id="res1" style="color:red;"></div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" id="connexion" name="submit">Soumettre</button>
                        </div>
                        <p style="margin-top: 20px; "><a href="signup.php" style="color:green; text-decoration: none ; font-weight: 500"><span>Je m'inscrire</span>?</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js1/global.js"></script>
    <script>
    $(document).ready(function(){       
        $("#connexion").click(function(e){
            e.preventDefault();
            let emptyInputCount=0;
            
            $("#registrationFrm input").each(function(){
                var input = $(this);
                if(input.val() == ''){
                    input.css('border-color','red');
                    $('#res').html("Veuillez remplir correctement les champs !");  
                    emptyInputCount = 1;
                }
                else{
                    input.css('border-color','#ced4da');
                }
            });
            
            

            if(emptyInputCount == 0){
                let getEmail = $("#email").val();
                let getmotDePasse = $("#pwd").val();
              
                postObj = {
                    emai: getEmail,
                    pwde: getmotDePasse,
                }
                
                $.ajax({
                    type: 'POST',
                    url:'verifier.php',
                    data:postObj,
                    success: function(data){
                        parseJson = JSON.parse(data);

                        if(parseJson.success_msg)
                        {
                          window.location.href="index.php";
                          document.getElementById('registrationFrm').reset();
                        }
                        else{
                            if (parseJson.suces_msg) {
                                $('#res1').html("Veuillez vérifier votre email ou mot de passe!");   
                            }
                        }
                    }

                })
            }

        });
    });0.
    
</script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<!-- end document-->