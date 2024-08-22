<?php
include '../../public_html/functions_56k99TfM5ZOj/function_project_g51dHJd.php'
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

    <section id="sec-menu-project">

    <?php foreach ($projects as $project): ?>

    <div class="box-project">
            <p class="title-project">
            <?php echo htmlspecialchars($project['name_project']); ?>
            </p>
            <img src="data:image/jpeg;base64,<?php echo base64_encode($project['img_project']); ?>" />

            <p class="txt">
            <?php echo htmlspecialchars($project['desc_project']); ?>
            </p>
            <a href="./project.php?id=<?php echo htmlspecialchars($project['id_project']); ?>" class="primary-link">voir le projet</a>
        </div>

    <?php endforeach; ?>


    </section>



      <div id="footer"></div>  
        
<script src="../scripts/include.js"></script>
<script src="../scripts/app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>