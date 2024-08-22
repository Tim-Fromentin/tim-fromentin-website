<?php 
include_once "../functions_u3QJ9Aygdt/function_page_project_gLfbde27d.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../assets/img/tf.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">

<title>Tim Fromentin Portfolio</title>
</head>
<body>



<!-- navbar -->
    <div id="navbar"></div>
    



<?php 
$projets = recuperProjects();
?>

<!-- Contenu de la page -->
<section id="sec-project-page">
    <div class="box-info">
            <h1 class="surtitle"><?php echo $nom_projet; ?></h1>
    <img src="<?php echo $img_projet; ?>" alt="<?php echo $nom_projet; ?>">
    </div>

    <div class="box-content">
            <p><span>Description du projet :</span> <?php echo $desc_projet; ?></p>
    <p><span>Date du projet :</span> <?php echo $date_projet; ?></p>
    
    
    
    
    <?php if (!empty($link_projet)): ?>
    <a href="<?php echo htmlspecialchars($link_projet); ?>" target="_blank" class="link-primary">Voir le site</a>

<?php endif; ?>

    </div>

</section>


<section id="sec-project-timelapse">
<h1 class="surtitle">Déroulement du projet</h1>
<ol>
    <?php echo $deroul_projet; ?>
</ol>
</section>

<section id="sec-project-annexe">
<h1 class="surtitle">Fichiers complémentaire</h1>
<?php if (!empty($annexe_webdesign_projet)): ?>
    <img src="<?php echo $annexe_webdesign_projet; ?>" alt="">
<?php endif; ?>
<?php if (!empty($annexe_img_projet)): ?>
    <img src="<?php echo $annexe_img_projet; ?>" alt="">
<?php endif; ?>

<?php if (!empty($annexe_video_projet)): ?>
    <video muted controls src="<?php echo htmlspecialchars($annexe_video_projet); ?>"></video>

<?php endif; ?>










</section>
    
    <!-- footer -->
    <div id="footer"></div>  
    

    <script src="../scripts/include.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- <script src="../scripts/app.js"></script> -->
</body>
</html>