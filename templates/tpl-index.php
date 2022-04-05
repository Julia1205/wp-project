<?php
/*
  Template Name: Accueil
  Description : page d'accueil
 */
get_header();
?>

<main>
	<div class="banniere-header"></div>
		<h1 class="text-center"><?php the_field('company_name'); ?></h1>
		<div class="text-center">
			<?php the_field("company_description"); ?>
		</div>
		<div class="container mt-5">
			<h2 class="text-center mb-5"><?php the_field('title_first_article_row'); ?></h2>
			<div class="d-lg-flex flex-row flex-wrap justify-content-md-center">
				<?php  
                    $args = array(
                        'post_type' => 'vente',
                        'posts_per_page' => 3,
                        'orderby' => 'ASC',
                        'order' => 'DESC',
                    );
                    
                    $my_query = new WP_Query($args);
              
                    if($my_query->have_posts()) : 
						while ($my_query->have_posts()) : 
							$my_query->the_post(); 
							$date = get_field('date_de_la_vente');
							$now = date('Ymd');
							$dateToDisplay = DateTime::createFromFormat('Ymd', $date);
							if($date > $now){ 
				?>
				
				<article class="mx-lg-2 px-1 mb-5">
					<header>
						<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mt-3 small-pic" height="300" width="400" alt="<?php the_post_thumbnail_caption(); ?>">
						<h3 class="text-center pb-3 mt-3"><?php the_title()?></h3>
					</header>
						<h4>Pièce phare: </h4>
						<?php the_excerpt(); ?>
					  <hr/>
					  <footer class="d-flex justify-content-between align-items-center pb-1 align-self-end">
						<p class="mb-0">Vente le <?php echo($dateToDisplay->format('j/m/Y')); ?></p>
						<a href='<?php the_permalink()?>' class='btn btn-outline-info'>Détails</a>
					  </footer>
				</article>

				<?php   
                         
							} endwhile; endif;
					wp_reset_postdata(); ?>
				<div class="boutonsLink text-center my-5">
					<a href="<?php the_permalink('179'); ?>" class="btn <?php the_field('boutons-couleur', 'options'); ?> mb-1">Toutes les ventes à venir</a>
					<a href="<?php echo(the_permalink('164')); ?>" class="btn <?php the_field('boutons-couleur', 'options'); ?> mb-1">Vendre un bien similaire</a>
				</div>

			</div> 
			<h2 class="text-center mb-5"><?php the_field('title_second_article_row'); ?></h2>
			<div class="d-lg-flex flex-row flex-wrap justify-content-md-center">
				<?php  
                    $args = array(
                        'post_type' => 'vente',
                        'posts_per_page' => 3,
                        'orderby' => 'DESC',
                        'order' => 'ASC',
                    );
                    
                    $my_query = new WP_Query($args);
              
                    if($my_query->have_posts()) : 
						while ($my_query->have_posts()) : 
							$my_query->the_post(); 
							$date = get_field('date_de_la_vente');
							$now = date('Ymd');
							$dateToDisplay = DateTime::createFromFormat('Ymd', $date);
							if($date < $now){ 
				?>
				<article class="mx-lg-2 px-1 mb-5">
					<header>
						<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mt-3 small-pic" height="300" width="400" alt="<?php the_post_thumbnail_caption(); ?>">
						<h3 class="text-center pb-3 mt-3"><?php the_title()?></h3>
					</header>
						<h4>Pièce phare: </h4>
						<?php the_excerpt(); ?>
					  <hr/>
					  <footer class="d-flex justify-content-between align-items-center pb-1">
						<p class="mb-0">Vente le <?php echo($dateToDisplay->format('j/m/Y')); ?></p>
						<a href='<?php the_permalink()?>' class='btn btn-outline-info'>Détails</a>
					  </footer>
				</article>
				<?php    
					} endwhile; endif;
					wp_reset_postdata(); 
				?>
				<div class="boutonsLink text-center my-5">
					<a href="<?php the_permalink('176'); ?>" class="btn <?php the_field('boutons-couleur', 'options'); ?> mb-1">Toutes les ventes passées</a>
					<a href="<?php echo(the_permalink('164')); ?>" class="btn <?php the_field('boutons-couleur', 'options'); ?> mb-1">Vendre un bien similaire</a>
				</div>

			</div> 
		</div>

</main>
<?php 
get_footer();
?>