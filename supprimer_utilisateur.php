<?php
// Vérifier si l'identifiant de l'utilisateur à supprimer a été envoyé en POST
if(isset($_POST['user_id'])) {
    
    // Récupérer l'identifiant de l'utilisateur à supprimer
    $user_id = $_POST['user_id'];
    
    // Connexion à votre base de données MySQL
    $conn = mysqli_connect("localhost", "root", "", "brief");
    
    // Vérifier si la connexion à la base de données a réussi
    if(!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }
    
    // Définir la requête SQL pour supprimer l'utilisateur
    $sql = "DELETE FROM user WHERE id_user = $user_id";
    
    // Exécuter la requête SQL
    if(mysqli_query($conn, $sql)) {
        echo json_encode(['success_msg' => 'User a été enregistrer']);
    } else {
        echo json_encode(['success_msg' => 'User a été enregistrer']);
    }
    
    // Fermer la connexion à la base de données
    mysqli_close($conn);
}
?>
