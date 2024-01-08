<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="deafult-title-container padding-top padding-bottom test">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>
    <section class="post-block post-content background-transparent default-template">
        <div class="container">
            <div class="post-content-outer">
                <div class="post-content-container">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; else : ?>
<?php endif; ?>
