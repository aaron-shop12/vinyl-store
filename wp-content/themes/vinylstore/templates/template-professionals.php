<?php
/**
 * Template Name: Professionals Template
 */
$user_role = wp_get_current_user();
$userrole = $user_role->roles[0];

if (!is_user_logged_in()) {
    //$redirect_to = get_permalink();
    //wp_redirect(home_url("/professional-login/"));
    //exit;
}
get_header();
wp_reset_query();
?>
<main class="page template-page" id="main">
    <section class="banner small">
        <span class="image">
            <?php $image = get_field('professionals_banner_image','options'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <span class="overlay">
                <div class="container">
                    <?php if(get_field('professionals_banner_text','options')) { ?>
                        <span class="left">
                            <h1><?php the_field('professionals_banner_text','options'); ?></h1>
                        </span>
                    <?php } ?>
                </div>    
            </span>
        </span> 
    </section>
    <?php if (!is_user_logged_in()) { ?>
        <section class="full-width-text padding-top padding-bottom">
            <div class="container">
                <div class="content">
					<p style="text-align:center;">Please <a href="/my-account">login</a> to access professionals content.</p>
					<p style="text-align:center;">Don't have a login? <a href="<?php echo home_url('/professional-signup/');?>" class="c-contact__link">Sign up</a></p>
				</div>
			</div>
		</section>
    <?php } else { ?>
        <?php if($userrole != 'administrator' && $userrole != 'wholesaler' && $userrole != 'subscriber') { ?>
            <section class="full-width-text padding-top padding-bottom">
	            <div class="container">
	                <div class="content">
						<p style="text-align:center;">Access denied. Please contact us to enquire about upgrading your account.</p>
					</div>
				</div>
			</section>
        <?php } else { ?>
            <?php if ( get_field ( 'intro_block' ) ) { ?>
                <section class="full-width-text padding-top">
                    <div class="container">
                        <div class="textBlock">
                            <?php the_field( 'intro_block' ); ?>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <?php $sections = get_field('section'); ?>
            <?php foreach($sections as $section) { ?>
                <section class="full-width-text professionals padding-top padding-bottom cattitle<?php echo $section['display_category_titles']; ?>">
                    <div class="container">
                        <h2><?php echo $section['title']; ?></h2>
                        <?php foreach($section['category'] as $category) { $colour = get_field('colour', $category['item']); ?>
                            <div class="category">
                                <h3 style="color:<?php echo $colour; ?>;"><?php echo $category['item'] -> name; ?></h3>
                                <div class="items">
                                    <?php
                                    $args = array(
                                        'posts_per_page' => -1,
                                        'offset' => 0,
                                        'post_type' => 'professional_item',
                                        'post_status' => 'publish',
                                        'post_parent' => 0,
                                        'suppress_filters' => true,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'professional-category',
                                                'field'    => 'term_id',
                                                'terms'    => $category['item'] -> term_id,
                                            ),
                                        )
                                    );
                                    $myresources = get_posts($args);
                                    foreach ($myresources as $post) : setup_postdata($post);
                                    ?>
                                        <span>
                                            <span class="title"><?php the_title();?></span>
                                            <span class="link">
                                                <?php if(get_field('download_button_link')) { ?>
                                                    <a style="background-color:<?php echo $colour; ?> !important;" href="<?php the_field('download_button_link'); ?>" target="_blank" class="btn btn-primary">Download</a>
                                                <?php } ?>
                                                <?php if(get_field('video_url')) { ?>
                                                    <a style="background-color:<?php echo $colour; ?> !important;" href="<?php the_field('video_url'); ?>" class="btn btn-primary videoPopup glightbox">View</a>
                                                <?php } ?>
                                            </span>
                                        </span>
                                    <?php endforeach;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>    
            <?php } ?>
        <?php } ?>
    <?php } ?>    
</main>
<?php get_footer(); ?>