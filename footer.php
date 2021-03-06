<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<div class="wrap">
				
				<?php
				if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;
				
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				
				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						wp_nav_menu(array( 'theme_location' => 'en-pie-menu' ) );
					</nav><!-- .social-navigation -->
				<?php endif;
				
				get_template_part( 'template-parts/footer/site', 'info' );
				
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php get_sidebar( 'primary' ); ?>


</body>
</html>
