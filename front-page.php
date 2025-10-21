<?php
get_header();
?>
<section class="hero">
  <div class="max-w-7xl hero-grid">
    <div>
      <div style="display:inline-flex;align-items:center;gap:10px;background:linear-gradient(90deg, rgba(15,118,110,0.12), rgba(239,68,68,0.08));padding:8px;border-radius:999px;font-size:14px;color:#cbd5da;">
        <i class="bi bi-lightning-charge-fill" style="color:#ffd166"></i>
        <span>Nuevas llegadas · Envío y montaje</span>
      </div>

      <h1 style="margin-top:18px;">Domina la ruta — <span style="color:#ef4444">Rendimiento</span> y <span style="color:#0f766e">confianza</span></h1>
      <p class="lead" style="margin-top:14px;max-width:620px;">Bicicletas y accesorios seleccionados para quienes viven la pasión del pedaleo. Servicio técnico profesional y asesoría personalizada.</p>

      <div style="margin-top:22px;display:flex;gap:12px;flex-wrap:wrap;">
        <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" class="btn btn-primary">Ver productos</a>
        <a href="<?php echo esc_url(add_query_arg('view','contact', home_url('/'))); ?>" class="btn btn-ghost">Contáctanos</a>
      </div>

      <div style="margin-top:24px;display:grid;grid-template-columns:1fr 1fr;gap:12px;max-width:520px;">
        <div class="glass">
          <strong>Marcas certificadas</strong>
          <div style="color:#cbd5da;font-size:13px;margin-top:6px;">Componentes y garantía oficial</div>
        </div>
        <div class="glass">
          <strong>Taller especializado</strong>
          <div style="color:#cbd5da;font-size:13px;margin-top:6px;">Afinaciones, suspensiones y puesta a punto</div>
        </div>
      </div>
    </div>

    <div style="max-width:520px;margin-left:auto;">
      <div class="card card-shadow">
        <?php
        // Get hero image from WordPress options or use default
        $hero_image_id = get_option('cq_hero_image', '');
        $hero_image_url = $hero_image_id ? wp_get_attachment_image_url($hero_image_id, 'large') : 'https://images.unsplash.com/photo-1518655048521-f130df041f66?q=80&w=1400&auto=format&fit=crop&s=abcdef';
        ?>
        <img src="<?php echo esc_url($hero_image_url); ?>" alt="Bicicleta carretera"/>
      </div>

      <div style="margin-top:12px;display:flex;align-items:center;gap:12px;background:linear-gradient(90deg, rgba(0,0,0,0.7), transparent);padding:12px;border-radius:12px;margin-left:6px;">
        <div>
          <div style="font-size:12px;color:#9aa7ad">Precio desde</div>
          <div style="font-weight:800;font-size:20px">S/ 1,499</div>
        </div>
        <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" class="btn" style="background:#0f766e;color:#000;margin-left:auto;">Comprar</a>
      </div>
    </div>
  </div>
</section>

<section style="padding:60px 0;border-top:1px solid rgba(255,255,255,0.04);">
  <div class="max-w-7xl">
    <div style="text-align:center;max-width:700px;margin:0 auto 50px;">
      <h2>Nuestros Servicios</h2>
      <p class="lead" style="margin-top:16px;">
        Más que una tienda, somos tu taller especializado con todo lo que necesitas para mantener tu bicicleta en perfecto estado.
      </p>
    </div>

    <div class="grid-3">
      <div class="service-card">
        <div class="service-icon">
          <i class="bi bi-tools"></i>
        </div>
        <h3 style="margin-bottom:12px;">Mantenimiento Integral</h3>
        <p style="color:#cbd5da;line-height:1.7;">
          Desde ajustes básicos hasta revisiones completas. Nuestros técnicos certificados cuidan cada detalle para que tu bici funcione perfectamente.
        </p>
        <div style="margin-top:16px;font-size:14px;color:#0f766e;font-weight:600;">
          Desde S/ 89
        </div>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="bi bi-lightning-charge-fill"></i>
        </div>
        <h3 style="margin-bottom:12px;">Puesta a Punto</h3>
        <p style="color:#cbd5da;line-height:1.7;">
          Optimiza el rendimiento de tu bicicleta. Ajuste de suspensiones, cambios, frenos y geometría personalizada según tu estilo de conducción.
        </p>
        <div style="margin-top:16px;font-size:14px;color:#0f766e;font-weight:600;">
          Desde S/ 149
        </div>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="bi bi-diagram-3-fill"></i>
        </div>
        <h3 style="margin-bottom:12px;">Suspensiones</h3>
        <p style="color:#cbd5da;line-height:1.7;">
          Servicio especializado de horquillas y amortiguadores FOX, RockShox y DT Swiss. Cambios de aceite, retenes y ajustes profesionales.
        </p>
        <div style="margin-top:16px;font-size:14px;color:#0f766e;font-weight:600;">
          Desde S/ 199
        </div>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="bi bi-person-check-fill"></i>
        </div>
        <h3 style="margin-bottom:12px;">Bikefitting</h3>
        <p style="color:#cbd5da;line-height:1.7;">
          Análisis biomecánico completo para ajustar tu bicicleta a tu anatomía. Mejora tu rendimiento y previene lesiones con una posición óptima.
        </p>
        <div style="margin-top:16px;font-size:14px;color:#0f766e;font-weight:600;">
          S/ 299
        </div>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="bi bi-box-seam"></i>
        </div>
        <h3 style="margin-bottom:12px;">Montaje Premium</h3>
        <p style="color:#cbd5da;line-height:1.7;">
          Montaje profesional de bicicletas nuevas o componentes. Incluye ajuste fino, verificación de torque y entrega lista para rodar.
        </p>
        <div style="margin-top:16px;font-size:14px;color:#0f766e;font-weight:600;">
          S/ 179
        </div>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="bi bi-gear-wide-connected"></i>
        </div>
        <h3 style="margin-bottom:12px;">Upgrade de Componentes</h3>
        <p style="color:#cbd5da;line-height:1.7;">
          Te asesoramos y instalamos mejoras para tu bicicleta: grupos de transmisión, ruedas, frenos, potencias y más componentes de alta gama.
        </p>
        <div style="margin-top:16px;font-size:14px;color:#0f766e;font-weight:600;">
          Consultar
        </div>
      </div>
    </div>

    <div style="text-align:center;margin-top:40px;">
      <a href="<?php echo esc_url(add_query_arg('view','contact', home_url('/'))); ?>" class="btn btn-primary">
        <i class="bi bi-calendar-check"></i>
        Agendar Servicio
      </a>
    </div>
  </div>
</section>

<section style="padding:60px 0;border-top:1px solid rgba(255,255,255,0.04);">
  <div class="max-w-7xl">
    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;">
      <h2>Productos Destacados</h2>
      <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" class="btn btn-ghost" style="padding:10px 16px;font-size:14px;">
        Ver Todos <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    <div class="carousel" aria-label="Productos destacados">
      <?php
      // Get featured products from WordPress
      $featured_args = array(
          'post_type' => 'cq_product',
          'posts_per_page' => 6,
          'post_status' => 'publish',
          'orderby' => 'rand'
      );

      $featured_query = new WP_Query($featured_args);

      if ($featured_query->have_posts()):
          while ($featured_query->have_posts()): $featured_query->the_post();
              $feat_id = get_the_ID();
              $feat_price = get_post_meta($feat_id, '_cq_price', true);
              $feat_slug = get_post_field('post_name', $feat_id);
              $feat_img = get_the_post_thumbnail_url($feat_id, 'medium');
              if (!$feat_img) {
                  $feat_img = 'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=800';
              }
              ?>
              <article class="card">
                  <a href="<?php echo esc_url(add_query_arg(array('product'=>$feat_slug), home_url('/'))); ?>" style="text-decoration:none;color:inherit;">
                      <img src="<?php echo esc_url($feat_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"/>
                      <div style="padding:14px;">
                          <div style="font-weight:800;font-size:16px;color:#fff;"><?php the_title(); ?></div>
                          <?php if (has_excerpt()): ?>
                          <div style="color:#9aa7ad;margin-top:6px;font-size:13px;">
                              <?php echo wp_trim_words(get_the_excerpt(), 8); ?>
                          </div>
                          <?php endif; ?>
                          <div style="color:#0f766e;font-weight:700;margin-top:10px;">
                              <?php echo esc_html($feat_price ? $feat_price : 'Consultar'); ?>
                          </div>
                      </div>
                  </a>
              </article>
              <?php
          endwhile;
          wp_reset_postdata();
      else:
          // Fallback to placeholder items if no products
          $items = array(
            array('title'=>'MTB Pro X1','img'=>'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=800','price'=>'S/ 2,799','slug'=>'mtb-pro-x1'),
            array('title'=>'Ruta Aero S3','img'=>'https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=800','price'=>'S/ 4,199','slug'=>'ruta-aero-s3'),
            array('title'=>'Gravel Adventurer','img'=>'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800','price'=>'S/ 3,249','slug'=>'gravel-adventurer'),
            array('title'=>'Urban Rider','img'=>'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=800','price'=>'S/ 999','slug'=>'urban-rider')
          );
          foreach($items as $it){
            echo '<article class="card"><a href="'.esc_url(add_query_arg(array('product'=>$it['slug']), home_url('/'))).'" style="text-decoration:none;color:inherit;"><img src="'.esc_url($it['img']).'" alt="'.esc_attr($it['title']).'"/><div style="padding:14px;"><div style="font-weight:800;font-size:16px;color:#fff;">'.esc_html($it['title']).'</div><div style="color:#0f766e;font-weight:700;margin-top:10px;">'.esc_html($it['price']).'</div></div></a></article>';
          }
      endif;
      ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>