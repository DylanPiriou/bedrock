<section class="w-full h-[50vh] flex items-center justify-center">
    <h2 class="max-w-[300px] text-center text-[2rem] font-[bold]"><?php echo get_field('titre_section_2') ?></h2>
</section>
<section class="w-full h-screen flex justify-between px-[10vw] py-0">
    <div>
        <?php
        $img1 = get_field("image_colonne_1");
        echo '<img src="' . esc_url($img1) . '" alt="paysage">';
        ?>
        <div class="flex flex-col gap-[15px] p-[50px]">
            <p><?php echo get_field("surtitre_colonne_1") ?></p>
            <h3 class="text-[2rem] font-[bold] w-4/5 leading-[1.3]"><?php echo get_field("titre_colonne_1") ?></h3>
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
        <div class="flex flex-col gap-[15px] p-[50px]">
            <p><?php echo get_field("surtitre_colonne_2") ?></p>
            <h3 class="text-[2rem] font-[bold] w-4/5 leading-[1.3]"><?php echo get_field("titre_colonne_2") ?></h3>
            <p>
                <?php echo get_field("notule_colonne_2") ?>
            </p>
        </div>
    </div>
</section>