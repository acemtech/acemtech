<?php require APPROOT . '/views/inc/header.php';?>


<!-- #Article Page-->
<section id="article">
    <div class="container">
        <div class="page-container">
            <article class="card bg-light">
                <div class="block">
                    <?php
                    flash('file_size_error');
                    flash('file_format_error');
                    flash('file_exist_error');
                    flash('file_upload_error');
                    flash('file_input_error');
                    flash('input_img_error');
                    ?>
                </div>
                <div class="bkgd-cover-image" style='background-image: url("<?php echo URLROOT; ?>/storage/posts/<?php echo (!empty($data['post']->img_name)) ? $data['post']->img_name : $data['old_img']; ?>")'></div>
                <form action="<?php echo URLROOT; ?>/posts/editer/<?php echo $data['id']; ?>" method="post" id="editpost-form" enctype="multipart/form-data">
                    <input type="hidden" name="old_img" value="<?php echo !empty($data['post']->img_name) ? $data['post']->img_name : $data['old_img']; ?>">
                    <div class="form-group mt-1">
                        <input type="file" name="img_article" id="">
                        <span class="invalid-feedback"><?php echo $data['filename_err']; ?></span>
                    </div>
                    <div class="form-group mb-1">
                        <label for="img-desc"><smal>Description de l'image(Facultatif)</smal></label>
                        <input type="text" name="desc_img" value="<?php echo (!empty($data['post']->desc_img)) ? $data['post']->desc_img : $data['desc_img'];?>" placeholder="Description de l'image(Facultatif)">
                    </div>
                    <span class="invalid-feedback"><?php echo $data['title_error'] ? $data['title_error'] : ''; ?></span>
                    <div class="form-group">
                        <labe for="title">Titre</labe>
                        <input type="text" name="title" id="title" value="<?php echo (!empty($data['post']->title)) ? $data['post']->title : $data['title']; ?>">
                    </div>
                    <div class="py-1 form-group">
                        <label for="category">Catégories</label>
                        <select name="categories" id="category">
                            <option value="<?php echo (!empty($data['post']->category)) ? $data['post']->category : $data['category'];?>" selected><?php echo (!empty($data['post']->category)) ? $data['post']->category : $data['category']; ?></option>
                            <option value="Festivites">Festivites</option>
                            <option value="Projets">Projets</option>
                            <option value="Nouveautes">Nouveautes</option>
                            <option value="Communiques">Communiques</option>
                            <option value="archives">Archives</option>
                        </select>
                        <span class="invalid-feedback"><?php echo $data['category_error']; ?></span>
                    </div>
                <span class="invalid-feedback"><?php echo $data['body_error'] ? $data['body_error'] : ''; ?></span>
                <div class="form-group">
                    <textarea name="body" id="editor1" cols="80" rows="20" placeholder="article message">
                        <?php if(!empty($data['post']->body)) echo $data['post']->body; ?>
                    </textarea>

                </div>


                <div class="form-group">
                    <input type="submit" value="Valider" class="btn-sm btn-primary">
                </div>

                <div class="form-group">
                    <a href="<?php echo URLROOT; ?>/posts/dashboard">Annuler</a>
                </div>
                </form>

                <div class="clearfix"></div>

            </article>

            <div class="sidebar">
            <?php 
                require APPROOT . '/views/inc/categorie.php'; 
                require APPROOT . '/views/inc/smedia.php'; 
            ?>
            
            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php';?>

