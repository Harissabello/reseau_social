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
    <title>Inscription</title>

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
                    <h2 class="title">S'inscrire</h2>
                    <form method="POST"  id="signForm" action="inserSign.php" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Nom" id="nom" name="nom">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Prenom" id="prenom" name="prenom">
                        </div>
                        <div class="input-group">
                            <label>Photo Profil</label>
                            <input class="input--style-2" type="file" id="file" class="fileToUpload" name="file">
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="date"  id="naissance" name="naissance">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <div class="select-dropdown">
                                        <select name="genre" id="genre">
                                            <option disabled="disabled" selected="selected">Genre</option>
                                            <option value="homme">Homme</option>
                                            <option value="femme">Femme</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="password" id="motPasse" placeholder="Mot de Passe" name="motPasse">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" id="contact" placeholder="Contact" name="contact">
                                </div>
                            </div>
                        </div>
                        <div id="res" style="color: red;"></div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" id="inscris" name="submit">Soumettre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> -->

    <!-- Jquery JS
    <script src="vendor/jquery/jquery.min.js"></script>
    Vendor JS-->
    <!-- <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>  -->

    <!-- Main JS-->
    <!-- <script src="js1/global.js"></script> -->
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <!-- <script type="text/javascript" src="js1/jquery-2.1.3.js"></script>
<script type="text/javascript" src="funct.js"></script> -->
    <script>
        $(document).ready(function () {
	$('#inscris').click(function (e) {
		e.preventDefault();
		let emptyInputCount = 0;

    $("#signForm input").each(function(){
                var input = $(this);
                if(input.val() == ''){
                    $('#res').html("Veuillez remplir correctement les champs !");  
                    emptyInputCount = 1;
                }
                else{
                    input.css('border-color','#ced4da');
                }
            });
            

		if (emptyInputCount == 0) {
			let nomutilisateur = $('#nom').val();
            let preutilisateur = $('#prenom').val();
            let contactutilisateur = $('#contact').val();
            let naissutilisateur = $('#naissance').val();
            let emaileutilisateur = $('#email').val();
	        let motdepasseutilisateur = $('#motPasse').val();
            let genutilisateur = $('#genre').val();
            let file_data = $('#file').prop('files')[0];
			let form_data = new FormData();
			form_data.append('file', file_data);
			form_data.append('nom', nomutilisateur);
            form_data.append('prenom', preutilisateur);
            form_data.append('contact', contactutilisateur);
			form_data.append('naissance', naissutilisateur);
            form_data.append('email', emaileutilisateur);
            form_data.append('motPasse', motdepasseutilisateur);
            form_data.append('genre', genutilisateur);
            
			

			// if (nomutilisateur == '') {
			// 	// Verifier si champ est vide
			// 	$('#nom').html('Entrez votre nom !');
			// }  else {
				$.ajax({
					url: 'inserSign.php',
					type: 'POST',
					dataType: 'script',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
          success: function (data) {
						if (data == 1) {
                            // alert("cgt");
							window.location.href = 'login.php';
							document.getElementById('signForm').reset();
							// $('#succes').html(
							// 	'<div class="alert alert-success">' +
							// 		'Compte créé avec succès, veuillez vous connecter !' +
							// 		'</div>',
							// );
						} 
          }
				});
			// }
		}
	});
});
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->