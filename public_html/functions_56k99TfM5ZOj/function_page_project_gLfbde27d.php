<?php

if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Récupérer l'ID du project depuis l'URL
    $id_project = $_GET['id'];

    // Inclure la fonction recupererprojectParID()
    include_once "../functions_56k99TfM5ZOj/function_project_g51dHJd.php";

    // Appeler la fonction pour récupérer les détails du project spécifique
    $project = takeAllProjectByID($id_project);

    // Vérifier si le project existe
    if($project) {
        // Afficher les détails du project
        $nom_project = htmlspecialchars($project['name_project']);
        $img_project = 'data:image/jpeg;base64,' . base64_encode($project['img_project']);
        $desc_project = ($project['desc_project']);
        $date_project = htmlspecialchars($project['date_project']);
        $link_project = htmlspecialchars($project['link_project']);
        $designer_project = ($project['designer_project']);
    } else {
        // Rediriger vers une page d'erreur si le project n'existe pas
        header("Location: ../index.php");
        exit();
    }
} else {
    // Rediriger vers une page d'erreur si l'ID du project n'est pas spécifié dans l'URL
    header("Location: ../erreur.php");
    exit();
}
?>
