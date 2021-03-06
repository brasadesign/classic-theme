<?php 
/**
 * Template Name: Home
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Classic Theme
 */

get_header(); ?>

 <div class="wrapper">
 	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="slider-home">
					<?php
					echo do_shortcode("[metaslider id=47]");
					?>
				</div>
				<?php// while ( have_posts() ) : the_post(); ?>

					<?php// get_template_part( 'content', 'page' ); ?>


				<?php// endwhile; // end of the loop. ?>
				
				<div class="area-categorias">
					<ul>
						<li class="categorias">
							<img class="img-cat" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tv-categoria.png" />
							<a href="<?php echo home_url(); ?>/tipo/tv">IPTV</a>
						</li>
						<li class="categorias">
							<img class="img-cat" src="<?php echo get_stylesheet_directory_uri(); ?>/images/dth-categoria.png" />
							<a href="<?php echo home_url(); ?>/tipo/dht">DTH</a>
						</li>
						<li class="categorias">
							<img class="img-cat" src="<?php echo get_stylesheet_directory_uri(); ?>/images/catv-categoria.png" />
							<a href="<?php echo home_url(); ?>/tipo/catv">CATV</a>
						</li>
						<li class="categorias">
							<img class="img-cat" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cabo-categoria.png" />
							<a href="<?php echo home_url(); ?>/tipo/cabo">CABO</a>
						</li>
					</ul>	
				</div><!-- .area-categorias -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
</div> <!-- .wrapper -->

<div class="faixa-inferior">
	<div class="content-inferior">
		<!-- Marcas -->
		<div class="marcas-content">
			<?php
			$marcas = "";
			$marcas = get_page_by_title( 'Marcas' );
			$thumbnail_marcas = wp_get_attachment_image_src( get_post_thumbnail_id($marcas->ID), '', false, '' );
			?>
			
			<div class="titulo-inferior"><h2><?php echo $marcas->post_title; ?></h2></div>
			<div class="thumb-inferior">
				<?php   
					$args_marcas = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => $marcas->ID,
					'orderby' => 'menu_order',
					'order' => 'ASC'
					);

					$attachments_marcas = get_posts( $args_marcas );
					if ( $attachments_marcas ) {
						foreach ( $attachments_marcas as $attachment_cliente ) {
						$image_attributes_cliente = wp_get_attachment_image_src( $attachment_cliente->ID );
						echo '<div class="imagens-cliente">';
						echo '<img src="'.$image_attributes_cliente[0].'">';
						echo '</div>';
				  		}
					}
					?>

					<?php wp_reset_postdata(); // reset the query ?>   
					
			</div><!-- .thumb-inferior-->
				
		</div><!-- .marca-content-->
		
			<!-- Clientes -->
		<div class="clientes-content">
			<?php
			$clientes = "";
			$clientes = get_page_by_title( 'Clientes' );
			$thumbnail_clientes = wp_get_attachment_image_src( get_post_thumbnail_id($clientes->ID), '', false, '' );
			?>
			
			<div class="titulo-inferior"><h2><?php echo $clientes->post_title; ?></h2></div>
			<div class="thumb-inferior">
									<?php   
					$args_clientes = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => $clientes->ID,
					'orderby' => 'menu_order',
					'order' => 'ASC'
					);

					$attachments_clientes = get_posts( $args_clientes );
					if ( $attachments_clientes ) {
						foreach ( $attachments_clientes as $attachment_cliente ) {
						$image_attributes_cliente = wp_get_attachment_image_src( $attachment_cliente->ID );
						echo '<div class="imagens-cliente">';
						echo '<img src="'.$image_attributes_cliente[0].'">';
						echo '</div>';
				  		}
					}
					?>

					<?php wp_reset_postdata(); // reset the query ?>   
			</div><!-- .thumb-inferior-->
				
		</div><!-- .clientes-content-->
	</div><!-- .content-inferior-->	
</div><!-- .faixa-inferior-->	
	



<?php get_footer(); ?>
