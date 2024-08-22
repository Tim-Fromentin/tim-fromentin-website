<?php
include '../../public_html/functions_56k99TfM5ZOj/function_blog_KtMthVcC1RJ02oDNLVea.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Tim Fromentin Freelance</title>
</head>
<body>

    <div id="navbar"></div>
    
        <div id="navbar"></div>
    
    <div id="loading-window">
        <div class="loader">
                    </div>
    </div>


    <?php 
$articles = takeAllArticle();
?>




        <section id="sec-all-article">
            <h1 class="title">Blog</h1>
            <p class="subtitle">
                Bienvenue sur ma page blog dédiée au développement web ! Ici, vous trouverez une multitude d'articles passionnants couvrant une variété de sujets liés à mon domaine d'expertise. En tant que développeur web freelance, j'ai rassemblé ici des astuces, des actualités et bien plus encore pour vous aider à naviguer dans le monde du développement web.

Je partage avec vous des astuces pratiques qui m'ont aidé à améliorer mes compétences en développement web au fil des années. Que vous soyez débutant cherchant à apprendre les bases ou professionnel souhaitant perfectionner son art, vous trouverez ici des conseils précieux pour vous guider.

En tant que freelance, je sais à quel point il est important de rester à jour avec les dernières tendances et technologies du secteur. C'est pourquoi je m'efforce de vous tenir informés des dernières actualités et des innovations qui façonnent notre domaine. Des nouvelles versions de langages de programmation aux nouvelles méthodes de développement, je vous tiens au courant de tout ce que vous devez savoir.

Alors, que vous soyez passionné par le développement web ou simplement curieux d'en apprendre davantage, je vous invite à explorer mes articles et à découvrir tout ce que j'ai à partager. Et n'hésitez pas à revenir régulièrement, car je publie régulièrement de nouveaux contenus pour enrichir votre expérience de développement web.
            </p>
            <div class="container-all-article">


            <?php foreach ($articles as $article): ?>

                <div class="box-all-article">
                    <h2 class="title-article">
                    <?php echo htmlspecialchars($article['title_article']); ?>
                    </h2>
                    <img src="data:image/webp;base64,<?php echo base64_encode($article['img_article']); ?>" />
                    <p class="desc-article txt">
                    <?php echo ($article['text_article']); ?>

                    </p>
                    <a href="./article.php?id=<?php echo htmlspecialchars($article['id_article']); ?>" class="primary-link">voir l'article</a>
                </div>


<?php endforeach; ?>



                
            </div>
        </section>


      <div id="footer"></div>  
        
<script src="../scripts/include.js"></script>
<script src="../scripts/app.js"></script>
</body>
</html>