<?php
/* Template Name: Liste ventes passées */

get_header();
?>
<h1 class="text-center py-5" style="background-image: url('<?php echo(get_template_directory_uri().'/img/background-archive-ventes.png'); ?>'); background-repeat: no-repeat; background-position: center;" >L'ensemble de nos ventes passées</h1>
<div class="container ml-0">
    <div class="row">
        <div class="col-12 col-md-8">
            <h2>Les ventes passées</h2>
            <ul class="ventes">
        <?php  
                    $args = array(
                        'post_type' => 'vente',
                        'posts_per_page' => 6,
                        'orderby' => 'RAND',
                        'order' => 'DESC',
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
                    <li class="mb-lg-3">
                        <a href="<?php the_permalink(); ?>">
                            <h3>
                                ( <?php echo($dateToDisplay->format('j M Y')); ?> ) 
                                <?php the_title(); ?> 
                            </h3>
                        </a>
                    </li>
				<?php   
                         
							} endwhile; endif;
					wp_reset_postdata(); ?>
            </ul>
        </div>
        <div class="col-6 col-md-4">
            <h2>Filtrer par catégories</h2>
            <ul class="ventes">
                <?php
                $cats = get_categories(); 

                foreach($cats as $cat) { ?>

                <li class="mb-3">
                    <a href="<?php echo (home_url().'/category/'. $cat->slug.'/'); ?>" class="iq-fw-5">
                        <?php echo ($cat->name); ?> 
                        <span>( <?php echo ($cat->count); ?> )</span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<?php
get_footer();