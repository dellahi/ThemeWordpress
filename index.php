<?php
get_header();
?>

<h1>Liste des Villes : </h1> <br>
<p>
Choisir une ville pour accéder à l'ensemble des Logements disponibles dans cette ville
</p>
<?php
$query = new WP_Query(array('post_type' => "ville"));
if ($query->have_posts()) {
    
    while ($query->have_posts()) {
        $query->the_post();
        $image = get_field('image');
        $image_src = wp_get_attachment_image_src($image);
        ?>
        <div class="card" style="width: 18rem;">
       <img class="card-img-top" src= $image_src[0] alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php the_field("description");  ?></p>
                <a href="<?php the_permalink(); ?><?php the_title(); ?>" class="btn btn-primary">Logements</a>
            </div>
        </div>
        <br>        
        <?php
    }
}
     

get_footer();
?>
