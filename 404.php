<?php
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Vaya, parece que lo que estas buscando no existe', 'twentyseventeen' ); ?></h1>
				</header>
				<div class="page-content">
					<p><?php _e( 'Parece que no hay reggaeton, por que no buscas otro tipo de música?', 'twentyseventeen' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer();
