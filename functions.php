<?php
//desactivation de la librairie de compression
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

//ajout des fichiers javascript
function api_js() {
    wp_enqueue_script('boostrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), false, false); 
}
//instruction d'utilisation des fichiers Javascript
add_action('wp_enqueue_scripts', 'api_js');
//ajout des fichiers de CSS
function api_css() {
    //Exemple - Params : ID du fichier, chemin, version, media (all, screen...)
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('nav-css', get_template_directory_uri().'/css/style-index.css', array(), null);

}
//instruction d'utilisation des fichiers CSS
add_action('wp_enqueue_scripts', 'api_css');

//fonction de recuperation du logo pour la barre de navigation
    function projetjulie_custom_logo_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 200,
            'flex-height'          => false,
            'flex-width'           => false,
            'header-text'          => array( 'site-title', 'site-description'
                                        ),
            'unlink-homepage-logo' => true, 
        );
    
        add_theme_support( 'custom-logo', $defaults );
    }
//fonction d'image pour les articles en page d'accueil
//set_post_thumbnail_size( 400, 300, true );
//ajustement de la taille de l'apercu
function change_length() {
    return 25;
}
add_filter('excerpt_length','change_length');

add_action( 'after_setup_theme', 'projetjulie_custom_logo_setup' );
/* Activation des fonctions du theme*/
    //fonction des images mises en avant
    add_theme_support('post-thumbnails');

    //fonction de récupération des titres des posts
    add_theme_support('title-tag');
    
/*desactivation de la librarie de compression*/
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

//Ajout de taxonomies
function api_post_type() {
    register_post_type(
        'vente', array
        (
            'label' => 'vente',
            'labels' => array(
                'name' => 'Ventes',
                'singular_name' => 'Vente'),
            'public' => true,
            'supports' => array('title', 'editor','thumbnail', 'excerpt'),
            'taxonomies' => array('category', 'post_tag'),
            'rewrite'  => array( 'slug' => 'vente' ),
            'has_archive' => false,
            'menu_icon' => 'dashicons-bank'
        )
    );
}
//Initialisation de la function
add_action('init', 'api_post_type');

//Ajout du panneau d'options 

//Verification présence de l'extension ACF
if( function_exists('acf_add_options_page') ) {
	//Ajout de l'onglet dans la barre wp
	acf_add_options_page(array(
		'page_title' 	=> 'Configuration',
		'menu_title'	=> 'Theme config',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'	=> true
	));
        //ajout de la section design
        acf_add_options_sub_page(array(
		'page_title' 	=> 'Design',
		'menu_title'	=> 'Design',
		'parent_slug'	=> 'options',
	));
        //ajout de la section réseaux sociaux
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Réseaux sociaux',
		'menu_title'	=> 'Réseaux sociaux',
		'parent_slug'	=> 'options',
	));
}





















/*
function api_scripts() {
	
    //Exemple - Params : ID du fichier, chemin, dependance, version, in_footer
    //Mettre le plus possible le dernier parametre sur TRUE
    wp_enqueue_script('monfichierjs', 'monfichierjs.js', array(), false, false); 
    
}
add_action('wp_enqueue_scripts', 'api_scripts');



*/





/*****
 * Fichiers CSS
 *****/ 
/*function api_styles() {
    
    //Exemple - Params : ID du fichier, chemin, version, media (alln, screen...)
    wp_enqueue_style('moncss', 'moncss.css', array(), null);
}
add_action('wp_enqueue_scripts', 'api_styles');
*/
/*
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );


//Params : Localisation, nom du theme
register_nav_menus( array(
    'Header' => __( 'Header', 'api-studio' ),
) );
*/