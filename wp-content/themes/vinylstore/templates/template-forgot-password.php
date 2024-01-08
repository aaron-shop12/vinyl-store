<?php
/*
Template Name: Forgot Password
*/
get_header();
wp_reset_query();
?>
<main class="page template-page" id="main">
    <!-- <section class="banner small">
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
    </section> -->
    <section class="two-column-module padding-top padding-bottom login blue">
        <div class="container">
            <div class="column-container">
                <div class="column">
                    <h2>Forgot password</h2>
                </div>
                <div class="column">
                    <div class="c-login__wrapper gform_wrapper gravity-theme">
                      <div class="c-contact__content c-contact--login gform_fields" style="width:100%;">
                        <?php echo do_shortcode('[reset_password]'); ?> 
                      </div>
                      <div class="c-contact__info">
                            <div class="inner">
                                <div class="c-contact__col">
                                    Already have a login? <a href="<?php echo home_url('/my-account/');?>" class="c-contact__link">Login</a>
                                </div>
                                <div class="c-contact__col">
                                    Don't have a login? <a href="<?php echo home_url('/professional-signup');?>" class="c-contact__link">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>    
</main>    
<?php get_footer(); ?>