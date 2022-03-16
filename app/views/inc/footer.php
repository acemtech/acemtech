<footer id="main-footer">
        <div class="container footer-container">
          <div class="acem-fes-news-about">
            <img src="<?php echo URLROOT; ?>/public/images/logo.png" alt="" class="logo">
            <p>L’ACEM TECH est une solution innovante proposée par le Club Académique et Scientifique de l’ACEM de Fès à l’intention de garantir l’enrichissement et la valorisation des projets innovants, de cultiver l’esprit d’innovation, développer et faciliter l’esprit d’épanouissement.</p>
          </div>

          <div class="acemfes-site-map">
            <h4>LIEN UTILES</h4>
            <ul class="list">
              <li><a href="<?php echo URLROOT; ?>">Accueil</a></li>
              <li><a href="https://ambacom-maroc.com/">Ambassade de l'Union des Comores au Maroc</a></li>
              <li><a href="https://www.facebook.com/BEacem">Bureau Exécutif</a></li>
              <li><a href="<?php echo URLROOT; ?>/posts/article/2">Acem Tech</a></li>
              <li><a href="<?php echo URLROOT; ?>/utilisateurs/connexion">Publier un article</a></li>
            </ul>
          </div>
          <div>
            <h4>NOUS CONTACTEZ</h4>
            <form action="<?php echo URLROOT; ?>/utilisateurs/sendMail" id="contact-form" method="post">
                <input type="text" name="nom_prenom" placeholder="Nom & Prénom">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="subject" placeholder="Objet du message">
                <textarea name="message" cols="30" rows="5" placeholder="Votre message"></textarea>
              <input type="submit" class="btn btn-block btn-primary" value="ENVOYEZ">
            </form>
          </div>

          <div class="author-copyright">
            <p><small>Copyright &copy; 2021, Tous droits reservés<sup>&reg;</sup></small></a></p>
            <p><small>Designed and Coded with <i class="fas fa-heart"></i> by <a href="<?php echo URLROOT; ?>">ACEM TECH</a></small></p>
          </div>
        </div>
      </footer>
        <?php if($view == 'posts/ajouterarticle' || $view == 'posts/editer') : ?>
      <script src="<?php echo URLROOT; ?>/public/js/ckeditor/ckeditor.js"></script>                             <script src="<?php echo URLROOT; ?>/public/js/script.js"></script>
      <script>
          CKEDITOR.replace( 'editor1' );
      </script>
        <?php endif; ?>
  </body>
  </html>
