<?php get_header(); ?>
<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="<?php echo (home_url()); ?>">Accueil</a> >
                <a href="<?php the_permalink()?>"><?php the_title()?></a>
            </div>
            
            <div class="row">
           <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'orderby' => 'RAND',
                    'order' => 'ASC'
                );
                $my_query = new WP_Query($args);
                if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post(); ?>
                
            
                <div class="col-md-4">
                    <img src="<?php the_post_thumbnail_url()?>" style="max-width:400px;" />
                    <h1><?php the_title()?></h1>
                    <div>
                        <?php the_excerpt()?>
                    </div>
                    <div><a class="btn btn-danger" href="<?php the_permalink()?>">Lire l'article</a></div>
                </div>
             
            

                <?php                          
                endwhile;
                endif;
                wp_reset_postdata(); ?>
                </div> 
        </div>
    </div>
</div>

<?php get_footer();