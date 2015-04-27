<?php
/*
    Template Name: Product Page
*/
get_header();

$args = array(
    "post_type" => "products"
);

$query = new WP_Query($args);
?>

<div class="grid">
    <div class="grid__col--12">
        <h1 class="headline-primary--grouped text-centered">Products</h1>
        <h2 class="headline-secondary--grouped text-centered">
        learn about all the Maltby products available only at <a href="http://www.golfworks.com/">The GolfWorks</a>
        </h2>
    </div>
</div>

<div class="grid">

    <?php
        if($query->have_posts()) : while($query->have_posts()): $query->the_post();
            $product_type = get_post_meta(get_the_ID(), 'product_type', true);
            $product_description = get_post_meta(get_the_ID(), 'product_description', true);
    ?>


    <div class="grid__col--4">

        <?php if ( get_post_meta( get_the_ID(), 'product_image', true ) ) : ?>
            <a href="<?php the_permalink() ?>" rel="bookmark">
                <img class="img--wrap" src="<?php echo get_post_meta( get_the_ID(), 'product_image', true ); ?>" alt="<?php the_title(); ?>" />
            </a>
        <?php endif; ?>
        <h3>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p><?php if(!empty($product_description)) { echo $product_description; } ?></p>
        <button class="btn--default"><a href="<?php the_permalink(); ?>">View More Info</a></button>
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>