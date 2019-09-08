<?php get_header(); ?>

<?php
    while(have_posts()){
        the_post();
?>
<div class="postPage__container">
    <div class="postPage__grid">
        <div class="postPage__grid--item"></div>
        <div class="postPage__grid--itemMain">
            <button class="goBack__button">
            <a href="<?php echo site_url('/aktualnosci') ?>" class="goBack__button--link">
                <i class="fas fa-arrow-left"></i> Wróć do aktualności
                </button>
            </a>
            <h2 class="postPage__title"><?php the_title(); ?></h2>
            <p class="postPage__author">Posted by <?php the_author(); ?> | <?php the_date() ?></p>
            <p class="postPage__content"><?php the_content(); ?></p>
        </div>
    </div>
</div>

<?php
    }
?>

<?php get_footer(); ?>