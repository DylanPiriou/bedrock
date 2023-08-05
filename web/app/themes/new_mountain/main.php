<h2><?php echo get_field('titre_section_2') ?></h2>
<section class="cards">
    <div class="card">
        <?php
        $img1 = get_field("image_colonne_1");
        echo '<img src="' . esc_url($img1) . '" alt="paysage">';
        ?>
        <div class="img__content-wrapper">
            <p><?php echo get_field("surtitre_colonne_1") ?></p>
            <h3><?php echo get_field("titre_colonne_1") ?></h3>
            <p>
                <?php echo get_field("notule_colonne_1") ?>
            </p>
        </div>
    </div>
    <div class="card">
        <?php
        $img2 = get_field("image_colonne_2");
        echo '<img src="' . esc_url($img2) . '" alt="randonneurs devant le vide">';
        ?>
        <div class="img__content-wrapper">
            <p><?php echo get_field("surtitre_colonne_2") ?></p>
            <h3><?php echo get_field("titre_colonne_2") ?></h3>
            <p>
                <?php echo get_field("notule_colonne_2") ?>
            </p>
        </div>
    </div>
</section>