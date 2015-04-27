<?php get_header(); ?>

<div class="grid">

      <div class="grid__col--8">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php if(get_the_post_thumbnail()): ?>

            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail("large"); ?>
            </a>

            <?php endif; ?>

            <h3 class="headline-article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <cite>By: <?php the_author_posts_link(); ?></cite>
            <cite>On: <?php the_time("F j, Y"); ?></cite>
            <cite>In: <?php the_category(", "); ?></cite>
            <p class="text-large"><?php echo strip_tags(get_the_excerpt()); ?></p>
            <a href="<?php the_permalink(); ?>"><button class="btn--default btn--small">Read More</button></a>


        <?php endwhile; else : ?>

            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

        <?php endif; ?>

    </div>

    <div class="grid__col--4">

        <div class="widget">

          <h3>Menu</h3>
          <ul class="menu">
            <li class="menu__link--large"><a href="ask.html"><i class="fa fa-comments"></i> Ask</a></li>
            <li class="menu__link--large"><a href="faq.html"><i class="fa fa-question-circle"></i> FAQ</a></li>
            <li class="menu__link--large"><a href="#"><i class="fa fa-area-chart"></i> MPF Ratings</a></li>
            <li class="menu__link--large"><a href="#"><i class="fa fa-video-camera"></i> Video Library</a></li>
            <li class="menu__link--large"><a href="#"><i class="fa fa-graduation-cap"></i> Club Making Academy</a></li>
          </ul>

        </div>

        <?php get_sidebar(); ?>

    </div>

</div>

<?php get_footer(); ?>