<?php 
include '../../public_html/functions_56k99TfM5ZOj/function_page_article_jNmbhmxCi7UNPZQ9Z5sQ.php'


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <title><?php echo $title_article; ?></title>
</head>
<body>

    <div id="navbar"></div>
    <div id="loading-window">
        <div class="loader">
        </div>
    </div>

    <?php 
$article = takeAllArticle();
?>



<section id="sec_article">
    <h1 class="surtitle"><?php echo $title_article; ?></h1>
    <img src="<?php echo $img_article; ?>" alt="<?php echo $title_article; ?>">
    
    <p>Mention image : <?php echo $mention_img_article; ?>
    </p>
    
    
    
    <p class="txt">
        <?php echo $text_article; ?>
    </p>

    <a href="./devis.php" class="primary-link">Faire un devis ?</a>

</section>




    




      <div id="footer"></div>  
        
<script src="../scripts/include.js"></script>
<script src="../scripts/app.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>