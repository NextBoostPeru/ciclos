<?php
// Router using absolute template paths to avoid locate_template issues.

$view = isset($_GET['view']) ? sanitize_text_field($_GET['view']) : '';
$product = isset($_GET['product']) ? sanitize_text_field($_GET['product']) : '';

$theme_dir = get_template_directory();

// If product param present, include product template directly if exists
if (!empty($product)) {
  $product_file = $theme_dir . '/page-product.php';
  if ( file_exists($product_file) ) {
    include $product_file;
    return;
  }
}

// Route by view using absolute paths
if ($view === 'contact') {
  $file = $theme_dir . '/page-contact.php';
  if ( file_exists($file) ) {
    include $file;
    return;
  }
}

if ($view === 'shop') {
  $file = $theme_dir . '/page-shop.php';
  if ( file_exists($file) ) {
    include $file;
    return;
  }
}

if ($view === 'nosotros') {
  $file = $theme_dir . '/page-about.php';
  if ( file_exists($file) ) {
    include $file;
    return;
  }
}

// Default behaviour: front-page or normal loop
if ( is_front_page() && file_exists( $theme_dir . '/front-page.php' ) ) {
  include $theme_dir . '/front-page.php';
  return;
}

get_header();

if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    the_content();
  endwhile;
else :
?>
  <main class="max-w-7xl" style="padding:48px 24px;">
    <h2 class="font-bold" style="font-size:28px">Bienvenido a CICLOS QUERALT</h2>
    <p style="color:#9aa7ad;margin-top:12px">Configura tu página de inicio desde el administrador o crea una plantilla 'Front Page'.</p>
  </main>
<?php
endif;

get_footer();
