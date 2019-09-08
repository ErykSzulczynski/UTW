<?php get_header(); ?>
 
<div class="contact__background">
    <div class="contact__title">
        Kontakt
    </div>
    <div class="contact__list">
        <ul>
            <li>
                <i class="fas fa-phone-alt"></i> <?php the_field('phone') ?>
            </li>
            <li>
                <i class="fas fa-envelope"></i> <?php the_field('email') ?>
            </li>
        </ul>
    </div>
    <div class="contact__social">
        <p>Lub znajdź nas na:</p>
        <ul>
            <li>
                <i class="fab fa-facebook-square"></i>
            </li>
            <li>
                <i class="fab fa-instagram"></i>
            </li>
        </ul>
    </div>
</div>

<?php get_footer(); ?>