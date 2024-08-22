<?php 
include '../../public_html/functions_56k99TfM5ZOj/function_page_project_gLfbde27d.php'


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <title>Tim Fromentin Freelance</title>
</head>
<body>

    <div id="navbar"></div>
    <div id="loading-window">
        <div class="loader">
        </div>
    </div>

    <?php 
$projects = takeAllProject();
?>




    <section id="sec-project-pre">
        <div class="container-project-pre">
            <div class="box-img">
                <h1 class="surtitle"><?php echo $nom_project; ?></h1>
                <img src="<?php echo $img_project; ?>" alt="<?php echo $nom_project; ?>">
            </div>
            <div class="box-content">
                <p class="project-pre-title">
                    Description
                </p>
                <p class="txt desc-project"><?php echo $desc_project; ?>
                </p>
                <p class="project-pre-title">
                    Date du projet
                </p>
                <p class="txt"><?php echo $date_project; ?>
                </p>
                <p class="project-pre-title">
                    WebDesigner
                </p>
                <p class="txt"><?php echo $designer_project; ?>
                </p>
            </div>
        </div>


        <?php if (!empty($link_project)): ?>
    <a href="<?php echo htmlspecialchars($link_project); ?>" target="_blank" class="secondary-link">Voir le site</a>

<?php endif; ?>
    </section>

    

    <section id="sec-link-devis">
        <div class="box-content">
            <h2 class="surtitle">Un projet en tête ?</h2>
            <p class="txt">
                Que vous envisagiez la création d'un site vitrine pour votre entreprise, un blog pour partager vos passions, un site e-commerce pour développer vos ventes en ligne, ou tout autre projet web, je suis là pour vous aider à concrétiser vos idées. Contactez-moi dès aujourd'hui pour obtenir un devis personnalisé et commencer à donner vie à votre projet web !
            </p>
            <a href="./devis.php" class="primary-link">Devis</a>
        </div>
        <img src="../assets/img/desk-pre.png" alt="">
    </section>


      <div id="footer"></div>  
        
<script src="../scripts/include.js"></script>
<script src="../scripts/app.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>