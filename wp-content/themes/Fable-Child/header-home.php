<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="main-header">

		<div class="container clearfix">
		<?php
			$logo = ( $user_logo = et_get_option( 'fable_logo' ) ) && '' != $user_logo
				? $user_logo
				: $template_directory_uri . '/images/logo(cropped).svg';
		?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" />
			</a>

			<nav id="top-menu">
			<?php
				$menuClass = 'nav';
				if ( 'on' == et_get_option( 'fable_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
				$primaryNav = '';

				$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );

				if ( '' == $primaryNav ) :
			?>
				<ul class="<?php echo esc_attr( $menuClass ); ?>">
					<?php if ( 'on' == et_get_option( 'fable_home_link' ) ) { ?>
						<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home','Fable' ); ?></a></li>
					<?php }; ?>

					<?php show_page_menu( $menuClass, false, false ); ?>
					<?php show_categories_menu( $menuClass, false ); ?>
				</ul>
			<?php
				else :
					echo( $primaryNav );
				endif;
			?>
			</nav>


			<?php do_action( 'et_header_top' ); ?>

		</div> <!-- .container -->

<?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '9' ); ?>		

	</header> <!-- #main-header -->