<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/scrollEvent.js" defer></script>
</head>

<body class="font-primary" <?php body_class(); ?>>
    <header class="w-full h-[80vh] bg-black">
        <nav class="fixed w-full flex items-center justify-between h-[10vh] px-[10vw] text-white z-10">
            <a href="#" class="logo">
                <?php
                $logo = get_field("logo_du_site");
                if ($logo) {
                    echo '<img src="' . esc_url($logo) . '" alt="Logo du site">';
                }
                ?>
            </a>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'menu',
                    'menu_class' => 'navigation flex gap-[15px]'
                )
            );
            ?>
        </nav>

        <div class="w-[70vw] absolute -translate-x-2/4 -translate-y-2/4 flex flex-col gap-[5vh] left-2/4 top-2/4 text-white">
            <h1 class="w-[400px] text-5xl font-bold leading-[110%] z-1"><?php echo get_field('titre'); ?></h1>
            <div class="w-full h-[5vh] flex items-center justify-center">
                <button class="h-full aspect-[1] flex items-center justify-center bg-gray-200"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/loupe.png" alt="loupe" /></button>
                <input type="search" name="" id="" class="w-full h-full text-[black] pl-[15px]" placeholder="Chercher un aliment, une ville ou un animal..." />
            </div>
        </div>
    </header>