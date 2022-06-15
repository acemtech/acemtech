<?php require APPROOT . '/views/inc/header.php';?>

<!-- #Article Page-->
<section id="article">
    <div class="container">
        <div class="page-container">
            <article class="card bg-light">
                <div class="bkgd-cover-image" style='background-image: url("<?php echo URLROOT; ?>/storage/posts/<?php echo $data['post']->img_name; ?>")'></div>
                <span><small class="italic"><?php echo $data['post']->desc_img; ?></small></span>
                <h1 class="l-heading"><?php echo $data['post']->title; ?></h1>
                <div class="meta">
                    <small>
                        <i class="fas fa-user"></i>Ecrit par <span class="text-bold"><?php echo $data['user']->firstname . ' ' . $data['user']->lastname;?></span><span class="hide">, <span class="date"><?php formatDateMin($data['post']->published_at); ?></span></span>
                    </small>
                    <!-- SHOW BUTTONS IF USER IS LOGGED IN -->
                    <?php if(!empty($_SESSION['user_id']) && $data['user']->id == $_SESSION['user_id']) : ?>
                    <div class="hide">
                        <a href="<?php echo URLROOT; ?>/posts/editer/<?php echo $data['post']->post_id; ?>" class="btn-sm">Editer</a>
                        <form class="inline" method="post" action="<?php echo URLROOT; ?>/posts/supprimer/<?php echo $data['post']->post_id; ?>" onsubmit="return confirm('Voulez-vous vraiment supprimer cet article? Suppression irreversible!')">
                            <input type="submit" name="supprimer" class="btn-sm text-red" value="Supprimer" title="Suppression irreversible">
                        </form>
                    </div>
                    <?php endif; ?>
                  
                  	<!-- Your share button code -->
                        <div class="fb-share-button" 
                        data-href="<?php echo URLROOT; ?>/posts/article/<?php echo $data['post']->post_id; ?>" 
                        data-layout="button_count">
                        </div>

                    <div class="category <?php colors_category($data['post']->category);?>"><?php echo $data['post']->category; ?></div>
                </div>
                <div class="clearfix"></div>
                <div class="p-news mb-1">
                    <?php echo $data['post']->body; ?>
                </div>


                <div class="writer">
                    <?php if(!empty($data['user']->picture_name)) { ?>
                        <img class="img-scale" src="<?php echo URLROOT; ?>/storage/profiles/<?php echo $data['user']->picture_name; ?>" alt="">
                    <?php } else { ?>
                        <img id="profile-pic" src="<?php echo URLROOT; ?>/public/images/avatar.png" alt="">
                    <?php } ?>
                    <h3><a href="<?php echo URLROOT; ?>/utilisateurs/profile/<?php echo $data['user']->id; ?>"><?php echo $data['user']->firstname . ' ' . $data['user']->lastname; ?></a></h3>
                    <p><?php echo $data['user']->bio; ?></p>
                </div>
            </article>

            <div class="sidebar">
                <article class="card bg-light">
                    <h3 class="article-heading text-capitalize"><a>Catégories</a></h3>
                    <ul class="list">
                        <li><a href="<?php echo URLROOT; ?>/posts/categorie/festivites"><i class="fa fa-chevron-right"></i> Festivités</a></li>
                        <li><a href="<?php echo URLROOT; ?>/posts/categorie/be"><i class="fa fa-chevron-right"></i> Bureau Exécutif</a></li>
                        <li><a href="<?php echo URLROOT; ?>/posts/categorie/innovations"><i class="fa fa-chevron-right"></i> Innovations</a></li>
                        <li><a href="<?php echo URLROOT; ?>/posts/categorie/Projet"><i class="fa fa-chevron-right"></i> Projets</a></li>
                        <li><a href="<?php echo URLROOT; ?>/posts/categorie/Nouveautes"><i class="fa fa-chevron-right"></i> Nouveautés</a></li>
                    </ul>
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

