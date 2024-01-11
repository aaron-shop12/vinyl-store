<div class="announcement">
	<span><?php the_field('announcement_text', 'option'); ?></span>
</div>
<header class="header clear">
	<div class="container">
		<div class="header-top">
			<span class="logo desktop">
				<a href="/" class="logoHeader">
					<img src="<?php the_field('logo', 'option'); ?>" class="" alt="" width="800">
					<img src="<?php the_field('logo_mobile', 'option'); ?>" class="mobile" alt="" width="300">
				</a>
			</span>
			<span class="buttonWrapper" id="mobileNav">
				<a class="nav">
					<span class="ham"></span>
				</a>
			</span>
			<span class="headerRight">
				<div class="headerCart">
					<a href="/cart" class="xoo-wsc-cart-trigger">
						<span><?php echo WC()->cart->get_cart_contents_count() ?></span>
					</a>
				</div>
				<div class="headerSearch">
					<!-- <a href="#" id="headerSearch"></a> -->
					<?php echo do_shortcode('[fibosearch]'); ?>
					<!-- <form action="/" method="GET">
						<input type="text" name="s" value="<?php if(!empty($_GET['s'])) { echo $_GET['s']; } ?>" placeholder="I'm searching for..." />
						<input type="hidden" name="post_type" value="products" />
					</form> -->
				</div>
			</span>
			<nav class="main-menu-container">
				<?php theme_nav('main'); ?>
			</nav>
		</div>
	</div>
	<div class="mobileMenu" id="mobileMenu">
		<div class="container">
			<span class="xoo-wsch-close xoo-wsc-icon-cross" id="mobileNavClose"></span>
			<span class="menu-container">
				<?php theme_nav('mobile'); ?>
				<?php /*if ( have_rows( 'event_megamenu', 'options' ) ) : ?>
					<?php while ( have_rows( 'event_megamenu', 'options'  ) ) : the_row(); ?>
						<span class="events-mega-menu">
							<span class="text-column">
								<span class="text"><?php the_sub_field( 'text' ); ?></span>
							</span>
							<span class="link-column">
								<?php if ( have_rows( 'links' ) ) : ?>
									<?php while ( have_rows( 'links' ) ) : the_row(); ?>
										<span class="link-container">
											<a class="mega-menu-link text-link white-text-link" href="<?php the_sub_field( 'link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
										</span>
									<?php endwhile; ?>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
							</span>
						</span>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; */ ?>
				<?php if ( have_rows( 'header_buttons', 'options' ) ) : ?>
					<?php while ( have_rows( 'header_buttons', 'options' ) ) : the_row(); ?>
						<a class="mobile-menu-external-links <?php the_sub_field( 'button_style' ); ?>" href="<?php the_sub_field( 'button_link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			</span>
		</div>
	</div>
	<!-- <div id="searchForm" class="">
		<div class="container">
			<form action="/" method="GET">
				<input type="text" name="s" value="<?php if(!empty($_GET['s'])) { echo $_GET['s']; } ?>" placeholder="Enter search keyword" />
			</form>
		</div>	
	</div> -->
</header>
