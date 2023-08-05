<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <nav>
            <a href="#" class="logo">
                <?php
                $logo = get_field("logo_du_site");
                if ($logo) {
                    echo '<img src="' . esc_url($logo) . '" alt="Logo du site">';
                }
                ?>
            </a>
            <ul class="flex-col">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'menu',
                        'container' => 'li',
                        'menu_class' => 'navigation',
                    )
                );
                ?>
            </ul>
        </nav>

        <h1><?php echo get_field('titre'); ?></h1>
        <div class="input__wrapper">
            <button><img src="/loupe.png" alt="loupe" /></button>
            <input type="search" name="" id="" placeholder="Chercher un aliment, une ville ou un animal..." />
        </div>
    </header>