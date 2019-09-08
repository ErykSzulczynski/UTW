<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Uniwerytet Trzeciego Wieku</title>
</head>
<body>
    <section class="section__landing">
        <nav class="nav">
            <div class="nav__logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.png">
            </div>
            <div id="burger__container" onclick="mobileMenuOpen()">
                <i class="fas fa-bars mobile__menu--open"></i>
            </div>
            <div id="mobile__menu--overlay">
                    <i class="fas fa-times  mobile__menu--close" id="mobile__container--close" onclick="mobileMenuClose()"></i>
                <div class="nav__links">
                    <ul>
                        <li>
                            <a href="<?php echo site_url(''); ?>">
                                Strona główna
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/aktualnosci'); ?>">
                                Aktualności
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/plan'); ?>">
                                Plan Lekcji
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/galeria'); ?>">
                                Galeria
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/kontakt'); ?>">
                                Kontakt
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>