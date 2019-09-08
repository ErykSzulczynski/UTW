<?php get_header(); ?>

<div class="galery__background">
    <div class="galeryPage__grid">
        <?php
            $images = get_field('galery');

            if($images):
                foreach($images as $image):
        ?>
                    <div class="galeryPage__grid--item">
                        <div class="img__container">
                            <img src="<?php echo $image['url']; ?>">
                            <span class="image__description"><?php echo $image['title'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>