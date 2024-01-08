<?php get_header(); ?>

<?php
	global $post;
	$postType = 'page';

	if ($post) {
		$postType = $post->post_type;
	}
?>

<main class="<?php if ( is_home() ): echo 'blog'; else: echo $postType; endif; ?><?php if ( is_search() ): echo ' search'; endif; ?>" id="main" >
	<?php

		if ( is_home() || is_post_type_archive()  ) {
			get_template_part('templates/template-' . $postType);
		} elseif ( is_category() || is_tag() || is_tax() ) {
			get_template_part('templates/template-' . $postType);
		} elseif ( is_single() ) {
			get_template_part('templates/single-' . $postType);
		} elseif ( is_page() && !is_page_template() ) {
			get_template_part('templates/template-default');
		} elseif ( is_search() ) {
			get_template_part('templates/template-search');
		} elseif ( is_404() ) {
			get_template_part('templates/template-404');
		} ?>

</main>

<?php get_footer(); ?>
