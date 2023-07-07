<?php
include('connect.php');
if(isset($_POST['emp_id'])){
$idsup = $_POST['emp_id'];
// if($idsup == 1){
//         echo 1;
//     }
$output = '';
 $query = "SELECT * FROM user WHERE id_user = '$idsup'";  
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_assoc($result);
    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    if($row > 0)  
    {  
         $output .= '  

         <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="profil.css">
            <title>Document</title>
            </head>
            <body>
            <section class="vh-100" style="background-color: #f4f5f7; max-height:370px">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-12 mb-4 mb-lg-0">
                  <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                    
                      <div class="col-md-8 gradient-custom text-white">
                        <div class="card-body p-4">
                          <h6 class="text-black">Information</h6>
                          <hr class="mt-0 mb-4">
                          <div class="row pt-1">
                            <div class="col-6 mb-3">
                              <h6>Nom :</h6>
                              <p class="text-black">'.$row["nom"].'</p>
                            </div>
                            <div class="col-6 mb-3">
                              <h6>Prénom :</h6>
                              <p class="text-black">'.$row["prenom"].'</p>
                            </div>
                          </div>
                          
                          <div class="row pt-1">
                            <div class="col-6 mb-3">
                              <h6>E-mail :</h6>
                              <p class="text-black">'.$row["emails"].'</p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
            </body>
            </html>
              ';  
    }  
    $output .= "</table></div>";  
    echo $output;  
      } 
?>

    
</body>
</html>