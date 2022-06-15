<?php require APPROOT . '/views/inc/header.php';?>

<!-- #About Page-->
<section id="resultat">
    <div class="container">
        <div class="page-container">
                <div class="articles">

                        <?php if(empty($data)) {  ?>
                        <div class="error-category">
                            <?php flash('keyword_not_found'); ?>
                        </div>
                        <?php } else { ?>
                        <?php foreach($data as $post) : ?>

                        <article class="card bg-light">
                            <div class="card-bkgd-image" style='background-image: url("<?php echo URLROOT; ?>/storage/posts/<?php echo $post->img_name; ?>")'></div>
                            <div>
                                <div class="category <?php colors_category($post->category);?>"><?php echo $post->category; ?></div>
                                <h3 class="article-heading"><a href="<?php echo URLROOT; ?>/posts/article/<?php echo $post->post_id; ?>"><?php echo $post->title; ?></a></h3>
                                <p>
                                    <?php echo limit_text($post->body, 26);
                                    ?>
                                </p>
                                <small><a href="<?php echo URLROOT; ?>/posts/article/<?php echo $post->post_id; ?>">Lire plus...</a></small>

                            </div>

                        </article>

                        <?php endforeach;?>
                    <?php } ?>
                </div>


            <div class="sidebar">
              
              <article class="card bg-green">
                <div class="category category-aides">Aides</div>
                <h3 class="article-heading"><a href="">Nous faire un don</a></h3>
                  Pour contribuer ou nous faire un don, veuillez nous contacter au:
                  <ul>
                    <br>
                    <li><i class="fas fa-envelope"></i> geeks@acem.tech</li>
                  </ul> 
                <a href="#" class="btn btn-block btn-secondary">Contribuez</a>
              </article>
              
                <article class="card bg-dark">
                <div class="category category-communiques">Reseaux Sociaux</div>
                <h3 class="article-heading"><a href="article.html">Nous suivre</a></h3>
                <p> <a href="https://www.facebook.com/BEacem"><i class="fab fa-facebook"></i> Bureau Exécutif de l'ACEM</a></p>
                <p> <a href="https://www.facebook.com/groups/acemfesofficiel"><i class="fab fa-facebook"></i> Notre groupe facebook</a></p>
                <p> <a href="https://www.facebook.com/Club-Acad%C3%A9mique-et-Scientifique-de-F%C3%A8s-100234075423739"><i class="fab fa-facebook"></i> Page facebook du club</a></p>
                <p><a href="https://www.youtube.com/channel/UCfKd1nKGbQvt2PzRA2p9v4w"><i class="fab fa-youtube"></i> ACEM FES Officielle</a></p>
                <p><a href="https://www.instagram.com/acem_fes/"><i class="fab fa-instagram"></i> acem_fes</a></p>

                <h3 class="article-heading"><a href="article.html">Nous ecrire</a></h3>
                <p><a href=""><i class="fas fa-globe-africa"></i> geeks@acem.tech</a></p>
              </article>

            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php';?>

