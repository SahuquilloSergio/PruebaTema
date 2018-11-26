<?php


			if ( have_posts() ) :

				/* Start the Loop */
				if ( have_posts()){
					while(have_posts){
						
					
					the_post();
					
					the_content();
					}
				}

			endif;
			?>


