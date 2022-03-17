<?php 
    $intHeightLogo = 30;
    $intWwidthLogo = 24;
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
    </head>
    
    <nav class="navbar sticky-top">
                <div class="container-fluid">
               
                <?php if (get_bloginfo('description', true)){?>
                    <a class="navbar-brand" href="<?php echo( home_url() ); ?>">
                        <?php the_custom_logo(); ?>
                        <?php echo(get_bloginfo('description')); ?>
                    </a>
                    <a class="navbar-brand" href="<?php echo( home_url() ); ?>">
                          <?php echo(get_bloginfo('name')); ?>
                    </a>
                <?php }else{ ?>
                  <a class="navbar-brand" href="<?php echo( home_url() ); ?>">
                        <?php the_custom_logo(); ?>
                  </a>
                      <a class="navbar-brand" href="<?php echo( home_url() ); ?>">
                          <?php echo(get_bloginfo('name')); ?>
                      </a>
                    <?php } ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php echo(get_bloginfo('name')); ?></h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        Accueil
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Link
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="#">Action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                
                </div>
            </nav>
            <body>
        <header>
        </header>
