 <?php get_header(); ?>

    <div class="title__container">
            <span class="title text">
                <?php
                    the_field('home_page_title');
                ?>
            </span>
            <p class="title__text text">
                <?php
                    the_field('home_page_title_text');
                ?>
            </p>
                <div class="vert-move"><i class="fas fa-chevron-down title__icon"></i></div>
        </div>
    </section>
    <section class="section__about" data-aos="fade-up">
        <div class="about__container">
            <div class="about__content"  data-aos="fade-right">
                <span class="section__title text">
                    O nas
                </span>
                    <p class="about__text text">
                        <?php
                            the_field('about_text');
                        ?>
                    </p>
            </div>
            <div class="about__images" data-aos="fade-left" style="background-image: url('<?php the_field('about_image'); ?>');"></div>
        </div>
        
    </section>
    <section class="section__posts" data-aos="fade-up">
        <span class="section__title--center text" data-aos="fade-up">
            Aktualności
        </span>
        <div class="posts__grid">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );

                $new_posts = new WP_Query($args);

                while($new_posts->have_posts()){
                    $new_posts->the_post();
            ?>
                <div class="posts__grid--item" data-aos="fade-up">
                    <div class="post__date">
                        <span class="post__date--up text">
                            <?php the_time("d") ?>
                        </span>
                        <span class="post__date--down text">
                            <?php the_time("M") ?>
                        </span>
                    </div>
                    <div class="post__title text">
                        <a href="<?php echo the_permalink(); ?>">
                            <?php the_title() ?>
                        </a>
                    </div>
                    <div class="post__content text">
                        <?php
                            echo wp_trim_words(get_the_excerpt(), 80);
                        ?>
                    </div> 
                </div>
            <?php
                }

                wp_reset_query();
            ?>

        </div>
        <a href="<?php echo site_url('/aktualnosci') ?>" class="more__button--link">
            <button class="more__button" data-aos="fade-down">
                Zobacz więcej
            </button>   
        </a>
    </section>
    <section class="section__galery" data-aos="fade-up">
        <span class="section__title--center section__title--galery text">
            Galeria
        </span>
        <div class="galery__grid">

            <?php
                $images = get_field('galery');

                if($images):
                    foreach($images as $image):
            ?>
                        <div class="galery__grid--item" data-aos="fade-up" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                    <?php endforeach; ?>
                <?php endif; ?>

            <!--<div class="galery__grid--item" data-aos="fade-up">
                
            </div>
            <div class="galery__grid--item" data-aos="fade-up">
                
            </div>
            <div class="galery__grid--item" data-aos="fade-up">
                
            </div>
            <div class="galery__grid--item" data-aos="fade-up">
                
            </div>
            <div class="galery__grid--item" data-aos="fade-up">
                
            </div>
            <div class="galery__grid--item" data-aos="fade-up">
                
            </div>-->
        </div>
        <a href="<?php echo site_url('/galeria') ?>" class="more__button--link">
            <button class="more__button" data-aos="fade-down">
                Zobacz więcej
            </button>
        </a>
    </section>

<?php get_footer(); ?>