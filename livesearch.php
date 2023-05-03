<?php include "assest/head.php"; ?>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<style>
    .bg-div {
        background: linear-gradient(rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)), url("./img/slider/brasil.jpg");
        /* Full height */
        height: 680px;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<?php

if($_GET["q"]=="") {

    
    //requête SQL
    
 
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC  LIMIT 9");
    $stmt->execute();
    $articles = $stmt->fetchAll();
    
   
    
    
    ?>
    
					 
 
        <?php foreach ($articles as $article) { ?>

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="single_article.php?id=<?= $article['article_id'] ?>">
                        <img src="img/article/<?= $article['article_image'] ?>" alt="">
                    </a>
                    <div class="post-body">

                        <div class="post-meta">
                            <a class="post-category cat-1" href="articleOfCategory.php?catID=<?= $article['category_id'] ?>" style="background-color:<?= $article['category_color'] ?>"><?= $article['category_name'] ?></a>
                            <span class="post-date">
                                <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                            </span>
                        </div>

                        <h3 class="post-title"><a href="single_article.php?id=<?= $article['article_id'] ?>"><?= $article['article_title'] ?></a></h3>

                    </div>
                </div>
            </div>
   <?php }

}
else{

    

        $pdo= new PDO("mysql:host=localhost;dbname=blog" ,"root","") ;
        if (isset($_GET["q"])){
            $req="SELECT * FROM article  INNER JOIN category ON id_categorie=category_id WHERE category_name =?";
            
            $value=$_GET['q'];
            $result=$pdo->prepare($req);
            $result->execute([$value]);
            $articles=$result->fetchAll(PDO::FETCH_ASSOC);
        }
        

       

 ?>
        
        <?php foreach ($articles as $article) { ?>
            <div class="col-md-4">
                        <div class="post">
                            <a class="post-img" href="single_article.php?id=<?= $article['article_id'] ?>">
                                <img src="img/article/<?= $article['article_image'] ?>" alt="">
                            </a>
                            <div class="post-body">

                                <div class="post-meta">
                                    <a class="post-category cat-1" href="articleOfCategory.php?catID=<?= $article['category_id'] ?>" style="background-color:<?= $article['category_color'] ?>"><?= $article['category_name'] ?></a>
                                    <span class="post-date">
                                        <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                                    </span>
                                </div>

                                <h3 class="post-title"><a href="single_article.php?id=<?= $article['article_id'] ?>"><?= $article['article_title'] ?></a></h3>

                            </div>
                        </div>
                    </div>
        <?php }
}?>