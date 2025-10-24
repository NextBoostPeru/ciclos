<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- DEBUG: Template version 2.0 loaded at <?php echo date('Y-m-d H:i:s'); ?> -->
  <div style="position:fixed;top:10px;right:10px;background:#0f766e;color:#000;padding:8px 12px;border-radius:6px;font-size:11px;font-weight:700;z-index:9999;font-family:monospace;">
    v2.0 - <?php echo date('H:i:s'); ?>
  </div>
  <header>
    <div class="max-w-7xl header-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
        <div class="badge"><i class="bi bi-bicycle" style="color:white;font-size:20px"></i></div>
        <div>
          <h1 style="font-weight:800">CICLOS <span style="color:#0f766e">QUERALT</span> SL</h1>
          <p style="font-size:12px;color:#9aa7ad;margin-top:4px">Montaña · Carretera · Accesorios</p>
        </div>
      </a>

      <?php
      // Primary menu if exists
      if ( has_nav_menu('primary') ) {
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'nav',
        ));
      } else {
        // fallback simple menu linking to clean routes
        $home = esc_url(home_url('/'));
        $shop = esc_url(home_url('/tienda'));
        $nosotros = esc_url(home_url('/nosotros'));
        $contacto = esc_url(home_url('/contacto'));
        echo '<nav class="nav">';
        echo '<a href="'.$home.'">Inicio</a>';
        echo '<a href="'.$shop.'">Tienda</a>';
        echo '<a href="'.$nosotros.'">Nosotros</a>';
        echo '<a href="'.$contacto.'">Contacto</a>';
        echo '</nav>';
      }
      ?>

      <div id="mobileToggle" style="display:none">
        <button id="btnMenu" aria-label="Abrir menú"><i class="bi bi-list" style="font-size:20px"></i></button>
      </div>
    </div>

    <div id="mobileMenu" style="display:none;padding:10px 0;">
      <a href="#productos" style="display:block;padding:6px 0;">Productos</a>
      <a href="#categorias" style="display:block;padding:6px 0;">Categorías</a>
      <a href="#servicios" style="display:block;padding:6px 0;">Servicios</a>
      <a href="#contacto" style="display:block;padding:6px 0;">Contacto</a>
    </div>
  </header>
