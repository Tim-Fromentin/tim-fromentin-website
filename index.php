<?php
include './functions_56k99TfM5ZOj/function_project_g51dHJd.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Freelance développeur web à Orléans, spécialisé dans la création de sites vitrine, blogs et e-commerce à des prix compétitifs. Confiez votre projet à un professionnel du web pour une présence en ligne efficace et abordable.">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
    <title>Tim Fromentin Freelance</title>
</head>
<body>

    <div id="navbar"></div>
    
    <div id="loading-window">
        <div class="loader">
                    </div>
    </div>
    
    <header id="head-menu">
        <div class="box-content">
            <h1 class="title">Freelance sur Orléans</h1>
            <p class="subtitle">
                
                Vous recherchez un développeur web freelance à Orléans ? Depuis un an, je mets mes compétences à votre service. Besoin de créer un site web, un blog ou une boutique en ligne ? Je suis là pour vous accompagner dans la réalisation de vos projets digitaux. Contactez-moi dès aujourd'hui pour concrétiser votre vision en ligne !</p>
        </div>
        <img src="./assets/img/mockup-menu.webp" alt="exemple site web site vitrine portfolio">
    </header>

    <section id="sec-hero-service">
        <span class="txt-hero-service">site vitrine</span>
        <div class="separator"></div>
        <span class="txt-hero-service">blog</span>
        <div class="separator"></div>
        <span class="txt-hero-service">e-commerce</span>
        <div class="separator"></div>
        <span class="txt-hero-service">web design</span>
    </section>
    
    <?php 
$projects = takeAllProject();
?>

    <section id="sec-menu-project">
        
    <?php foreach ($projects as $project): ?>
    <?php if ($project['id_project'] == 5 || $project['id_project'] == 6): ?>
        <div class="box-project">
            <p class="title-project">
                <?php echo htmlspecialchars($project['name_project']); ?>
            </p>
            <img src="data:image/webp;base64,<?php echo base64_encode($project['img_project']); ?>" />

            <p class="txt">
                <?php echo htmlspecialchars($project['desc_project']); ?>
            </p>
            <a href="./pages/project.php?id=<?php echo htmlspecialchars($project['id_project']); ?>" class="primary-link">voir le project</a>
        </div>
    <?php endif; ?>
<?php endforeach; ?>




        <a href="./pages/AllProject.php" class="secondary-link">voir tout les projets</a>
    </section>

    <!-- <section id="sec-hero-timelapse">

    </section> -->

    <section id="sec-link-devis">
        <div class="box-content">
            <h2 class="surtitle">Un projet en tête ?</h2>
            <p class="txt">
                Que vous envisagiez la création d'un site vitrine pour votre entreprise, un blog pour partager vos passions, un site e-commerce pour développer vos ventes en ligne, ou tout autre projet web, je suis là pour vous aider à concrétiser vos idées.

Contactez-moi dès aujourd'hui pour obtenir un devis personnalisé et commencer à donner vie à votre projet web !
            </p>
            <a href="./pages/devis.php" class="primary-link">Devis</a>
        </div>
        <img src="./assets/img/desk-pre.png" alt="">
    </section>

      <div id="footer"></div>  
      
        
<script src="./scripts/include.js"></script>
<script src="./scripts/app.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>