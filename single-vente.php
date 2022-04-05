<?php
	get_header();
?>
<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-12">
<?php          
			if (have_posts()) {
			while (have_posts())
			{
                the_post();		
?>
			<div class="contenu">
				<h1 class="text-center"><?php the_title()?></h1>	
				<p>La vente se tiendra le  
					<?php 
						$originalDate = get_field('date_de_la_vente');
						$now = date('Ymd');
						$dateToDisplay = DateTime::createFromFormat('Ymd', $originalDate);
					echo($dateToDisplay->format('j M Y')); 
					?>
				</p>
				<div class="text-center">
				<?php the_post_thumbnail('large'); ?>
				</div>
				<?php
					} } wp_reset_query();
					the_field('description_de_la_piece_phare');
				?>
				<p>Estimé à <?php the_field('estimation_piece_phare'); ?> € </p>
			</div>
		</div>
				<h2 class="mb-5">Egalement en vente ce jour :</h2>
					<?php
					if( have_rows('details_de_la_vente') ):
						while( have_rows('details_de_la_vente') ) : the_row(); ?>
				<div class="row">
					<section>
						<div class="col-12">

							<h3><?php the_sub_field('nom_du_lot'); ?></h3>
							<p>Comprenant :</p>
							<ul>
							<?php
							if( have_rows('description_du_lot') ):
								while( have_rows('description_du_lot') ) : the_row();
									// Get sub value.
									?><li><?php the_sub_field('composition_du_lot'); ?></li><?php
								endwhile;
							endif;
							?>
							</ul>
							<p>Estimé à <?php the_sub_field('estimation'); ?> € </p> 
						</div>
						<div class="col-12">
						<?php 
							$image = get_sub_field('photo_du_lot');
							$url = $image['url'];
							$alt = $image['alt'];
							$desc = $image['description'];
						?>
							<a href="<?php echo($url); ?>" target="_blank">
								<img height="50" width="350" class="img-fluid img-vente" src="<?php echo($url); ?>" alt="<?php echo($alt); ?>" title="<?php echo($desc); ?>">
							</a>
						</div>
					</section>
						
				</div>
	<hr class="my-2">
							<?php
						endwhile;
					endif;
					?>
				
	</div>
</div>
<div class="boutonsLink text-center my-5">
<?php if($originalDate > $now){ ?>
	<a href="" class="btn <?php the_field('boutons-couleur', 'options'); ?> mb-1">Participer aux enchères</a>
<?php } ?>
	<a href="" class="btn <?php the_field('boutons-couleur', 'options'); ?> mb-1">Vendre un bien similaire</a>
</div>
<?php
	get_footer(); 
?>
 