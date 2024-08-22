<?php

if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Récupérer l'ID du article depuis l'URL
    $id_article = $_GET['id'];

    // Inclure la fonction recupererarticleParID()
    include_once "../functions_56k99TfM5ZOj/function_blog_KtMthVcC1RJ02oDNLVea.php";

    // Appeler la fonction pour récupérer les détails du article spécifique
    $article = takeAllArticleByID($id_article);

    // Vérifier si le article existe
    if($article) {
        // Afficher les détails du article
        $title_article = htmlspecialchars($article['title_article']);
        $img_article = 'data:image/jpeg;base64,' . base64_encode($article['img_article']);
        $mention_img_article = ($article['mention_img_article']);
        $text_article = ($article['text_article']);
    } else {
        // Rediriger vers une page d'erreur si le article n'existe pas
        header("Location: ../index.php");
        exit();
    }
} else {
    // Rediriger vers une page d'erreur si l'ID du article n'est pas spécifié dans l'URL
    header("Location: ../erreur.php");
    exit();
}
?>
