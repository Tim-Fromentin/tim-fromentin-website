<?php

if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Récupérer l'ID du projet depuis l'URL
    $id_projet = $_GET['id'];

    // Inclure la fonction recupererProjetParID()
    include_once "function_project_zF5NkUt8EW.php";

    // Appeler la fonction pour récupérer les détails du projet spécifique
    $projet = recupererProjetByID($id_projet);

    // Vérifier si le projet existe
    if($projet) {
        // Afficher les détails du projet
        $nom_projet = htmlspecialchars($projet['name_project']);
        $img_projet = 'data:image/jpeg;base64,' . base64_encode($projet['img_project']);
        $annexe_webdesign_projet = 'data:image/jpeg;base64,' . base64_encode($projet['annexe_webdesign_project']);
        $annexe_img_projet = 'data:image/jpeg;base64,' . base64_encode($projet['annexe_img_project']);
        $annexe_video_projet = htmlspecialchars($projet['annexe_video_project']);
        $desc_projet = htmlspecialchars($projet['desc_project']);
        $date_projet = htmlspecialchars($projet['date_project']);
        $link_projet = htmlspecialchars($projet['link_project']);
        $deroul_projet = ($projet['timelapse_project']);
    } else {
        // Rediriger vers une page d'erreur si le projet n'existe pas
        header("Location: ../index.php");
        exit();
    }
} else {
    // Rediriger vers une page d'erreur si l'ID du projet n'est pas spécifié dans l'URL
    header("Location: ../erreur.php");
    exit();
}
?>
