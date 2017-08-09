<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nextfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>  
    <!--
		<div id="preloaders">
			<div class="loader-inner ball-scale-multiple"><div></div><div></div><div></div></div>
		</div>
	-->
    <div id="wrapper">

        <div class="row-offcanvas row-offcanvas-left">
            <div id="sidebar-fix" class="sidebar-offcanvas">
                <div class="side-logo clearfix">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() && function_exists( 'the_custom_logo' ) ) {
						
							printf('<a href="%s" class="navbar-brand custom-logo-link">', home_url());
							the_custom_logo();
							printf('</a>');
					
					}
					 else 
					{
						printf('<a class="navbar-brand" href="%s">%s</a>', home_url(), esc_attr( get_bloginfo( 'name' ) ));
					}
					
				?>
                 
                </div><!-- end logo -->
                <?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'        => 'sidebar-nav clearfix',
					) );
				?>
                <div class="social">
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                </div>
            </div><!-- end sidebar -->
		<div id="main">
			<div class="visible-md visible-xs visible-sm mobile-menu">
				<button type="button" class="btn btn-default btn-sm" data-toggle="offcanvas"><i class="fa fa-bars"></i></button>
			</div>

