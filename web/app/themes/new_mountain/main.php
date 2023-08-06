<section class="w-full h-[40vh] flex items-center justify-center">
    <h2 class="max-w-[300px] text-center text-[2rem] font-bold"><?php echo get_field('titre_section_2') ?></h2>
</section>
<section class="w-full h-screen flex justify-between px-[10vw] py-0">
    <div>
        <?php
        $img1 = get_field("image_colonne_1");
        echo '<img src="' . esc_url($img1) . '" alt="paysage">';
        ?>
        <div class="flex flex-col gap-[15px] p-[50px] w-[80%]">
            <p class="font-bold"><?php echo get_field("surtitre_colonne_1") ?></p>
            <h3 class="text-[2rem] font-bold leading-[1.3]"><?php echo get_field("titre_colonne_1") ?></h3>
            <p>
                <?php echo get_field("notule_colonne_1") ?>
            </p>
        </div>
    </div>
    <div class="ml-[15vh] mr-0 mt-[15vh] mb-0">
        <?php
        $img2 = get_field("image_colonne_2");
        echo '<img src="' . esc_url($img2) . '" alt="randonneurs devant le vide">';
        ?>
        <div class="flex flex-col gap-[15px] p-[50px] w-[80%]">
            <p class="font-bold"><?php echo get_field("surtitre_colonne_2") ?></p>
            <h3 class="text-[2rem] font-bold w-4/5 leading-[1.3]"><?php echo get_field("titre_colonne_2") ?></h3>
            <p>
                <?php echo get_field("notule_colonne_2") ?>
            </p>
        </div>
    </div>
</section>
<section class="w-full h-[80vh] flex flex-col items-center justify-center gap-[15px] custom-mt-25vh text-white bg-black">
    <p><?php echo get_field("subtitle") ?></p>
    <h3 class="text-[2rem] font-bold leading-[1.3] w-[20%] text-center mb-[5vh]"><?php echo get_field("title") ?></h3>

    <div class="splide w-1/4" data-splide='{"type":"loop","perPage":5, "perMove": "1", "rewind":"true", "rewindByDrag":"true"}'>
        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-left.svg" alt="left button"></button>
            <button class="splide__arrow splide__arrow--next"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-right.svg" alt="right button"></button>
        </div>

        <div class="splide__track">
            <div class="splide__list">
                <?php
                if (have_rows('logo_repeater')) :
                    while (have_rows('logo_repeater')) : the_row();
                        $logo = get_sub_field("logo_image");
                        echo '<img src="' . $logo['url'] . '" alt="logo mountain" class="splide__slide">';
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>

</section>