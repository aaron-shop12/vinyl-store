<section class="two-column-image-text feeding-guide indent colour <?php the_sub_field( 'colour_tone' ); ?> <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <?php if(get_sub_field('show_animal_sizes') == 'no') { ?>
            <?php if(get_sub_field('title')) { ?>
                <h2 class="title"><?php the_sub_field('title') ?></h2>
            <?php } ?>
        <?php } ?>
        <div class="column-container">
            <div class="text-column column">
                <?php if(get_sub_field('show_animal_sizes') == 'yes') { ?>
                    <?php if(get_sub_field('title')) { ?>
                        <h2 class="title"><?php the_sub_field('title') ?></h2>
                    <?php } ?>
                <?php } ?>
                <?php the_sub_field('text'); ?>
            </div>   
            <div class="column right">
                <?php the_sub_field('right_column_text'); ?>
                <?php if(get_sub_field('show_animal_sizes') == 'no') { ?>
                    <span class="icon-notes">
                        <span class="top">
                            <span class="icon">
                                <?php $icon = get_sub_field('icon'); ?>
                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                            </span>
                            <span class="product">
                                <span>Product</span>
                                <span><?php the_sub_field('product_title'); ?></span>
                            </span>
                        </span>
                        <span class="base">
                             <?php if ( have_rows( 'notes' ) ) : ?>
                                <?php while ( have_rows( 'notes' ) ) : the_row(); ?>
                                    <span>
                                        <span><?php the_sub_field('title'); ?></span>
                                        <span><?php the_sub_field('text'); ?></span>    
                                    </span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </span>
                    </span>
                <?php } else if(get_sub_field('show_animal_sizes') == 'yes' && get_sub_field('animal_columns') == 'two') { ?>
                    <?php $amountType = get_sub_field('amount_type'); ?>
                    <span class="icon-notes">
                        <span class="top">
                            <span class="icon">
                                <?php $icon = get_sub_field('icon'); ?>
                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                            </span>
                            <span class="product">
                                <span>Product</span>
                                <span><?php the_sub_field('product_title'); ?></span>
                            </span>
                        </span>
                    </span>
                    <div class="baseFeeding two">
                        <span>
                            <?php if ( have_rows( 'animal_sizes' ) ) : ?>
                                <?php while ( have_rows( 'animal_sizes' ) ) : the_row(); ?>
                                    <span>
                                        <span class="image">
                                            <?php $image = get_sub_field('image'); ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        </span>
                                        <span class="weight">
                                            <span>Cat Weight</span>
                                            <span><?php the_sub_field('dog_weight'); ?></span>
                                        </span>
                                        <span class="amount">
                                            <span><?php if($amountType == 'loading') { ?>Loading<?php } else { ?>Daily<?php } ?> Amount</span>
                                            <span><?php the_sub_field('daily_amount'); ?></span>
                                        </span>
                                        <?php if(get_sub_field('maintenance_amount')) { ?>
                                            <span class="amount maintenance">
                                                <span>Maintenance Amount</span>
                                                <span><?php the_sub_field('maintenance_amount'); ?></span>
                                            </span>
                                        <?php } ?>
                                    </span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </span>        
                    </div>    
                <?php } ?>
            </div>  
        </div> 
        <?php if(get_sub_field('show_animal_sizes') == 'yes' && get_sub_field('animal_columns') == 'three') { ?>
            <?php $amountType = get_sub_field('amount_type'); ?>
            <div class="baseFeeding">
                <span>
                    <span class="top">
                        <span class="icon">
                            <?php $icon = get_sub_field('icon'); ?>
                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                        </span>
                        <span class="product">
                            <span>Product</span>
                            <span><?php the_sub_field('product_title'); ?></span>
                        </span>
                    </span>
                    <span class="base">
                            <?php if ( have_rows( 'notes' ) ) : ?>
                            <?php while ( have_rows( 'notes' ) ) : the_row(); ?>
                                <span>
                                    <span><?php the_sub_field('title'); ?></span>
                                    <span><?php the_sub_field('text'); ?></span>    
                                </span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </span>
                </span>
                <span>
                    <?php if ( have_rows( 'animal_sizes' ) ) : ?>
                        <?php while ( have_rows( 'animal_sizes' ) ) : the_row(); ?>
                            <span>
                                <span class="image">
                                    <?php $image = get_sub_field('image'); ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </span>
                                <span class="weight">
                                    <span>Dog Weight</span>
                                    <span><?php the_sub_field('dog_weight'); ?></span>
                                </span>
                                <span class="amount">
                                    <span><?php if($amountType == 'loading') { ?>Loading<?php } else { ?>Daily<?php } ?> Amount</span>
                                    <span><?php the_sub_field('daily_amount'); ?></span>
                                </span>
                                <?php if(get_sub_field('maintenance_amount')) { ?>
                                    <span class="amount maintenance">
                                        <span>Maintenance Amount</span>
                                        <span><?php the_sub_field('maintenance_amount'); ?></span>
                                    </span>
                                <?php } ?>
                            </span>
                        <?php endwhile; ?>
                    <?php endif; ?>    
                </span>
            </div>
        <?php } ?>
    </div>
</section>        