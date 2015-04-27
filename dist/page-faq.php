<?php
/*
    Template Name: FAQ Page
*/
?>

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
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>

<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>

