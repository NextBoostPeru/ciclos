<?php
// functions.php - Ciclos Queralt (pure CSS version)

if (!function_exists('ciclos_queralt_setup')) {
  function ciclos_queralt_setup() {
    register_nav_menus([
      'primary' => __('Menú Principal', 'ciclos-queralt'),
    ]);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
  }
}
add_action('after_setup_theme', 'ciclos_queralt_setup');

function cq_enqueue_scripts() {
  // Bootstrap Icons (kept via CDN for icons)
  wp_enqueue_style('bootstrap-icons','https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css', array(), null);

  // Theme CSS (local)
  wp_enqueue_style('ciclos-style', get_template_directory_uri() . '/assets/css/styles.css', array(), wp_get_theme()->get('Version'));

  // JS propio
  wp_enqueue_script('ciclos-main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'cq_enqueue_scripts');



/**
 * On theme activation, create demo pages (Shop, Contact, Nosotros) and assign templates if they don't exist.
 */
function cq_create_demo_pages_on_activation() {
    // avoid running in non-WP environments
    if (!function_exists('wp_insert_post')) return;

    $pages = array(
        array('title' => 'Tienda', 'slug' => 'tienda', 'template' => 'page-shop.php'),
        array('title' => 'Contacto', 'slug' => 'contacto', 'template' => 'page-contact.php'),
        array('title' => 'Nosotros', 'slug' => 'nosotros', 'template' => 'page-about.php'),
    );

    foreach ($pages as $p) {
        // check if page exists by slug
        $existing = get_page_by_path($p['slug']);
        if ($existing) {
            // ensure template is set
            update_post_meta($existing->ID, '_wp_page_template', $p['template']);
            continue;
        }
        // create the page
        $post_id = wp_insert_post(array(
            'post_title' => wp_strip_all_tags($p['title']),
            'post_name' => $p['slug'],
            'post_content' => $p['title'] . ' (Página creada automáticamente)',
            'post_status' => 'publish',
            'post_type' => 'page',
        ));
        if (!is_wp_error($post_id) && $post_id) {
            update_post_meta($post_id, '_wp_page_template', $p['template']);
        }
    }

    // flush rewrite to ensure pages show
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'cq_create_demo_pages_on_activation');



/* Simple handlers for contact form and newsletter (demo).
   They redirect back with a query param and send email to admin_email.
*/
function cq_handle_contact_form() {
  if (!isset($_POST['nombre'])) wp_redirect( wp_get_referer() ?: home_url('/') );
  $name = sanitize_text_field($_POST['nombre']);
  $contact = sanitize_text_field($_POST['contacto']);
  $message = sanitize_textarea_field($_POST['mensaje']);
  $to = get_option('admin_email');
  $subject = 'Contacto desde web: ' . $name;
  $body = "Nombre: $name
Contacto: $contact

Mensaje:
$message";
  wp_mail($to, $subject, $body);
  wp_redirect( add_query_arg('cq_sent','1', wp_get_referer() ?: home_url('/') ) );
  exit;
}
add_action('admin_post_nopriv_cq_contact_form','cq_handle_contact_form');
add_action('admin_post_cq_contact_form','cq_handle_contact_form');

function cq_handle_newsletter(){
  if(!isset($_POST['email'])) wp_redirect( wp_get_referer() ?: home_url('/') );
  $email = sanitize_email($_POST['email']);
  // demo: send notification to admin. In production save to DB or integrate with provider.
  $to = get_option('admin_email');
  $subject = 'Nuevo suscriptor';
  $body = 'Email: ' . $email;
  wp_mail($to, $subject, $body);
  wp_redirect( add_query_arg('cq_news','1', wp_get_referer() ?: home_url('/') ) );
  exit;
}
add_action('admin_post_nopriv_cq_newsletter','cq_handle_newsletter');
add_action('admin_post_cq_newsletter','cq_handle_newsletter');
