<?php 
	$previousURL = wp_get_referer();
	$currentURL = get_permalink(); 
?>
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8"/>
        <!--meta google-->
        <meta name="robots" content="noindex, nofollow"/>
        <!--indication taille de l'ecran vise-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--style de la page-->
      <?php wp_head(); ?>
	    <style>
            .banniere-header{
                background-image: url("<?php the_field('banniere'); ?>");
                height: 30rem;
                width: 100%;
            }
			:root{
				--main-bg-color: <?php the_field('nav_bar_color', 'options'); ?>;
				--main-color: black;
				--h1-size: 10rem;
				--h2-size: 8rem;
				--h3-size: 6rem;
				--h4-size: 4rem;
				--h5-size: 2rem;
				--h6-size: 1rem;

				--h1-color: red;
				--h2-color: red;
				--h3-color: red;
				--h4-color: red;
				--h5-color: red;
				--h6-color: red;

				--bg-toggler: <?php the_field('couleur_bouton_nav', 'options'); ?>;

				--nav-bar-brand: white;
				--nav-bar-hover: <?php the_field('navbar-hover', 'options'); ?>;
			}
        </style>
    </head>
            <body>
    <nav class="navbar navbar-expand-lg text-uppercase sticky-top">
      <div class="container">
          <a class="navbar-brand" href="<?php echo home_url()?>">Auctiolive</a>
          <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded navbar-boutton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="<?php echo(the_permalink('164')); ?>">Estimer un bien</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="<?php the_permalink('179'); ?>">Venir aux prochaines ventes</a></li>
				<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="<?php the_permalink('195'); ?>">Blog</a></li>
              </ul>
          </div>
      </div>
    </nav>

        <header>
        <?php if(is_page( array( 179, 176, 3) ) OR is_single()) { ?>
            <div class="d-flex justify-content-center mt-2">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <a href="<?php echo home_url()?>">Accueil</a> </li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title()?></li>
                    </ol>
                </nav>
            </div>
        <?php }elseif(is_category()){ ?>
            <div class="d-flex justify-content-center mt-2">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <a href="<?php echo home_url(); ?>">Accueil</a> </li>
						<?php  
						if($previousURL == "https://www.wplearning.fr/final/julie/ventes-a-venir/"){ ?>
                        <li class="breadcrumb-item"> <a href="https://www.wplearning.fr/final/julie/ventes-a-venir/">Liste des ventes à venir</a> </li>
						<?php }elseif($previousURL == "https://www.wplearning.fr/final/julie/ventes-passees/"){ ?>
						<li class="breadcrumb-item"> <a href="https://www.wplearning.fr/final/julie/ventes-passees/">Liste des ventes passées</a> </li>
						<?php } ?>

                        <li class="breadcrumb-item active" aria-current="page">
						<?php 
							if(is_category('antiquites')){ 
								echo('Antiquités');
							}elseif(is_category('vehicules')){ 
								echo('Véhicules'); 
							}elseif(is_category('art')){ 
								echo('Art');
							}elseif(is_category('mobilier')){
								echo('Mobilier');
							}else{
								echo('Nom de la catégorie');
							}
						?>
						</li>
                    </ol>
                </nav>
            </div>
            <?php } ?>
        </header>
