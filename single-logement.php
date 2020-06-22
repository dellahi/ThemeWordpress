<?php get_header()?>
<?php
$query = new WP_Query(array('post_type' => "logement"));
if ($query->have_posts()) {
    
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <h1> Détails sur <?php the_title(); ?></h1><br>
        <?php
        ?>    
        <p>Surface :</p><?php the_field("surface"); ?> <br> <br>
        <?php
        ?>
        <p>Prix :</p><?php the_field("prix"); ?><br><br>
        <?php
        ?>
        <p>Exposition :</p><?php the_field("exposition"); ?><br><br>
        <?php
        ?>
        <p>Type de Logement :</p><?php the_field("Type"); ?><br><br>
        <?php
        ?>
        <p>Les frais de l'agence :</p><?php the_field("frais_agence"); ?><br><br>
        <?php
        ?>
        <p>Date de mise en vente du Logement :</p><?php the_field("date_mise_en_vente"); ?><br><br>
        <?php    
    }
}
     
?>

<?php get_footer()?>