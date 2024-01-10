<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

<title><?php wp_title(); ?></title>

<!-- <link rel="stylesheet" href="https://use.typekit.net/nnh3ygx.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font/skelet-icons-master/style.css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLcDOYGHRZ4Z09tMisM0g8lSSCAywnMPc&callback=Function.prototype"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=block" rel="stylesheet">
<script src="https://kit.fontawesome.com/fbae53416f.js" crossorigin="anonymous"></script>

<?php wp_head(); ?>

</head>
<?php
    $colourScheme = '';
    $theme = get_field('select_theme','options');
    //print_r($theme);
    if($theme == 'fourcyte-us') {
        if(is_search() || is_shop()) {
            $colourScheme = 'blue';
        } else {
            $colourScheme = get_field('colour_scheme');
        }
    } else {
        if(is_search()) {
            $colourScheme = 'blue';
        } else {
            $colourScheme = get_field('colour_scheme');
        }
    }
?>
<body <?php body_class(''); ?> id="body" rel="<?php echo $colourScheme; ?>">
    <?php get_template_part( 'templates/partials/_header' ); ?>
