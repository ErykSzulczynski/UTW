<?php
    get_header();
?>

<div class="blogPage__grid">
    <?php
        $args = array(
            'post_type' => 'post'
        );
    
        $blogposts = new WP_Query($args);

        while($blogposts->have_posts()){
            $blogposts->the_post();
    ?>
        <div class="blogPage__grid--item">
            <div class="blog__post--title">
                <?php the_title(); ?>
            </div>
            <div class="blog__post--author">
                <span class="author__name">
                    Utworzono przez <?php the_author(); ?>
                </span>
                <span class="author__date">
                    <?php the_date() ?> 
                </span>
            </div>
            <div class="blog__post--content">
                <?php echo strip_shortcodes(wp_trim_words( get_the_content(), 150 )); ?>
            </div>
            <a href="<?php the_permalink() ?>" class="more__button--link">
                <button class="blog__post--more">
                    Zobacz więcej
                </button>   
            </a>
        </div>
    <?php
        }
    ?>
</div>

<?php
    get_footer();
?>