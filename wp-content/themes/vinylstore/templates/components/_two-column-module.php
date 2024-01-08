<section class="two-column-module <?php the_sub_field( 'layout' ); ?> <?php the_sub_field( 'colour_tone' ); ?> <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'background' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <?php if(get_sub_field('title')) { ?>
            <h2 class="title"><?php the_sub_field('title') ?></h2>
        <?php } ?>
        <div class="column-container">
            <div class="column">
                <?php the_sub_field('column_one') ?>
            </div>
            <div class="column">
                <?php the_sub_field('column_two') ?>
            </div>
        </div>
    </div>
</section>
