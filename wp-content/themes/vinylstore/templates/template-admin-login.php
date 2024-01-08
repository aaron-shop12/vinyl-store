<?php
/**
 * Template Name: Admin Login
 */
$user_role = wp_get_current_user();
$userrole = $user_role->roles[0];

if (is_user_logged_in()) {
    //$redirect_to = get_permalink();
    wp_redirect(home_url("/professionals/"));
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
    <section class="two-column-module padding-top padding-bottom login">
        <div class="container">
            <?php if(get_sub_field('title')) { ?>
                <h2 class="title"><?php the_sub_field('title') ?></h2>
            <?php } ?>
            <div class="column-container">
                <div class="column">
                    <h2>For Vets and Vet clinics to access scientific papers and research information.</h2>
                </div>
                <div class="column">
                    <div class="c-login__wrapper gform_wrapper gravity-theme">
                      <div class="c-contact__content c-contact--login gform_fields" style="width:100%;">
                        <div class="successMsg form-group text-center text-success" id="submit-result123" style="display:none"></div>
                        <div class="errMsg form-group text-center text-warning c-red" id="submit-err123" style="display:none"></div>
                        <form class="login-form" id="login_form_main" name="ser-logform" novalidate="novalidate">
                            <div class="form-group form-group--custom gfield">
                                <label class="form-input-label" style="display:none;">Email *</label>
                                <input type="text" name="txtUserName" id="txtUserName" class="form-control form-control--input form-control--signup large"
                            placeholder="Email">
                            </div>
                            <div class="form-group form-group--custom gfield">
                                <label class="form-input-label" style="display:none;">Password</label>
                                <input type="password" name="txtPass" id="txtPass" class="form-control form-control--input form-control--signup large"
                            placeholder="Password">
                            </div>
                            <div class="form-group form-group--custom mb-0">
                                <button type="submit" id="btn_submit" class="btn btn-secondary">Login</button>
                            </div>
                        </form>
                      </div>
                      <div class="c-contact__info">
                            <div class="inner">
                                <div class="c-contact__col">
                                    Don't have a login? <a href="<?php echo home_url('/professional-signup/');?>" class="c-contact__link">Sign up</a>
                                </div>
                                <div class="c-contact__col">
                                    Forgot Password? <a href="<?php echo home_url('/forgot-password');?>" class="c-contact__link">Click here</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.pack.js"></script>
<script type="text/javascript">
  var form = $("#login_form_main");
  form.validate({
       errorElement: 'div',
        errorClass: 'error',
        rules: {
          txtUserName: {
            required: true,
          },
          txtPass: {
            required: true,
          },


        },
        messages: {
        },
          submitHandler:function(form){
            $.ajax({
                type:'POST',
                url:"<?php echo bloginfo('template_url'); ?>/remote/admin_login_submit.php",
                dataType:'json',
                data:$("#login_form_main").serialize(),
                beforeSend:function(xhr){

                  // $(form).find('.ajax-loader').show();
                  $("#btn_submit").text("Processing");
                },
            success:function(response){

                  if(response.result=="success"){
                    form.reset();
                    $("#submit-result123").show();
                      $("#submit-result123").html('Login success please wait...');

                      $('.successMsg').addClass('c-green');
                     window.location.href="<?php echo(home_url('/professionals/')); ?>";
                      $("#btn_submit").text("Success...");

                }
                else
                {
                    //alert("Incorrect User and Password");
                    //$('.successMsg').addClass('c-red text-warning');
                    $("#submit-err123").html(response.message);
                    $("#btn_submit").text("Login");
                    $("#submit-err123").show()
                }
                }

            });
        }
      });
</script>