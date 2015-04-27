<?php get_header(); ?>

<div class="container">

    <div class="leader">
        <h1><?php wp_title(""); ?> Articles</h1>
    </div>

    <div class="posts">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>

            <?php if(get_the_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail("large"); ?>
            </a>
            <?php endif; ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <summary>
                <p><?php echo strip_tags(get_the_excerpt()); ?>
            </summary>

            <cite>
                Posted On: <?php the_time("F j, Y"); ?> |
                Written By: <?php the_author_posts_link(); ?> |
                Category: <?php the_category(", "); ?>
            </cite>
            <a href="<?php the_permalink(); ?>"><button>continue reading</button></a>

        </article>

        <?php endwhile; else : ?>

            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

        <?php endif; ?>


    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>