
<?php get_header()?>
<h1>Liste des Logements</h1>

<?php
    $query = new WP_Query([
        'post_type' => 'logement',
        'meta_query' => array(
            array(
                'post_type'=> 'ville',
                'value'=>'"'. get_the_ID() .'"',
                'compare'=>'LIKE'
            ),
        ),
        
        
        ]);

    if($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
    ?>

<br> <p>Longement disponible dans votre ville : </p> 

    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    
    <?php
        }
    }
    else {
    ?>
    <br> <p> Pas de Logements disponibles dans cette ville </p> <?php
    }
     
?>

<?php get_footer()?>