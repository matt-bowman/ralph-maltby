<?php get_header(); ?>

<?php
    $args = array(
        "post_type" => "faq"
    );

    $query = new WP_Query($args);
?>

<h1>FAQ</h1>

<?php if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>

    <div class="container">
        <h4><?php the_field("question"); ?></h4>
        <h5><?php the_field("answer"); ?></h5>
    </div>

<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>