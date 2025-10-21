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
        <img src="https://images.unsplash.com/photo-1518655048521-f130df041f66?q=80&w=1400&auto=format&fit=crop&s=abcdef" alt="Bicicleta carretera"/>
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

<!-- Categorías destacadas -->
<section>
  <div class="max-w-7xl">
    <h2 style="margin-bottom:12px;">Explora por categoría</h2>
    <p class="lead" style="margin-bottom:28px;">Encuentra la bicicleta perfecta para tu estilo de ciclismo</p>

    <div class="grid-3">
      <a href="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'montana'),home_url('/'))); ?>" class="category-card">
        <img src="https://images.unsplash.com/photo-1576435728678-68d0fbf94e91?q=80&w=800" alt="Montaña"/>
        <div class="category-content">
          <h3 style="font-size:24px;font-weight:800;margin-bottom:6px;">Montaña</h3>
          <p style="color:#cbd5da;font-size:14px;">Domina los senderos más exigentes</p>
        </div>
      </a>
      <a href="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'carretera'),home_url('/'))); ?>" class="category-card">
        <img src="https://images.unsplash.com/photo-1511994477422-b69e44bd4ea9?q=80&w=800" alt="Carretera"/>
        <div class="category-content">
          <h3 style="font-size:24px;font-weight:800;margin-bottom:6px;">Carretera</h3>
          <p style="color:#cbd5da;font-size:14px;">Velocidad y eficiencia en el asfalto</p>
        </div>
      </a>
      <a href="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'accesorios'),home_url('/'))); ?>" class="category-card">
        <img src="https://images.unsplash.com/photo-1507035895480-2b3156c31fc8?q=80&w=800" alt="Accesorios"/>
        <div class="category-content">
          <h3 style="font-size:24px;font-weight:800;margin-bottom:6px;">Accesorios</h3>
          <p style="color:#cbd5da;font-size:14px;">Todo lo que necesitas para rodar</p>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- Productos destacados -->
<section>
  <div class="max-w-7xl">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px;flex-wrap:wrap;gap:12px;">
      <div>
        <h2 style="margin-bottom:8px;">Productos destacados</h2>
        <p class="lead">Las mejores bicis al mejor precio</p>
      </div>
      <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" class="btn btn-ghost">Ver todo <i class="bi bi-arrow-right"></i></a>
    </div>

    <div class="carousel" aria-label="Productos destacados">
      <?php
      $items = array(
        array('title'=>'MTB Pro X1','img'=>'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=800','price'=>'S/ 2,799','desc'=>'Suspensión 120mm'),
        array('title'=>'Ruta Aero S3','img'=>'https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=800','price'=>'S/ 4,199','desc'=>'Cuadro carbono'),
        array('title'=>'Gravel Adventurer','img'=>'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800','price'=>'S/ 3,249','desc'=>'Versátil todo terreno'),
        array('title'=>'Urban Rider','img'=>'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=800','price'=>'S/ 999','desc'=>'Diseño urbano'),
        array('title'=>'E-Bike Power','img'=>'https://images.unsplash.com/photo-1571333250630-f0230c320b6d?q=80&w=800','price'=>'S/ 5,499','desc'=>'Motor eléctrico'),
        array('title'=>'BMX Street','img'=>'https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?q=80&w=800','price'=>'S/ 799','desc'=>'Trucos y estilo')
      );
      foreach($items as $it){
        echo '<article class="card">';
        echo '<img src="'.esc_url($it['img']).'" alt="'.esc_attr($it['title']).'"/>';
        echo '<div style="padding:16px;">';
        echo '<div style="font-weight:800;font-size:18px;">'.esc_html($it['title']).'</div>';
        echo '<div style="color:#9aa7ad;margin-top:4px;font-size:14px;">'.esc_html($it['desc']).'</div>';
        echo '<div style="display:flex;justify-content:space-between;align-items:center;margin-top:14px;">';
        echo '<div style="font-weight:800;font-size:20px;color:#0f766e;">'.esc_html($it['price']).'</div>';
        echo '<a href="'.esc_url(add_query_arg('view','shop', home_url('/'))).'" class="btn" style="background:#0f766e;color:#000;padding:8px 14px;font-size:14px;">Ver</a>';
        echo '</div></div></article>';
      }
      ?>
    </div>
  </div>
</section>

<!-- Estadísticas -->
<section style="background:linear-gradient(135deg, rgba(15,118,110,0.05), rgba(239,68,68,0.03));padding:50px 0;">
  <div class="max-w-7xl">
    <h2 style="text-align:center;margin-bottom:32px;">Confían en nosotros</h2>
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-number">2500+</div>
        <div style="color:#9aa7ad;font-size:14px;">Clientes satisfechos</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">15+</div>
        <div style="color:#9aa7ad;font-size:14px;">Años de experiencia</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">50+</div>
        <div style="color:#9aa7ad;font-size:14px;">Modelos disponibles</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">98%</div>
        <div style="color:#9aa7ad;font-size:14px;">Tasa de satisfacción</div>
      </div>
    </div>
  </div>
</section>

<!-- Servicios -->
<section>
  <div class="max-w-7xl">
    <h2 style="margin-bottom:12px;">Nuestros servicios</h2>
    <p class="lead" style="margin-bottom:28px;">Todo lo que necesitas para mantener tu bici en perfecto estado</p>

    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="bi bi-tools"></i></div>
        <h3 style="font-size:18px;font-weight:700;margin-bottom:8px;">Mantenimiento</h3>
        <p style="color:#cbd5da;font-size:14px;line-height:1.6;">Servicio técnico completo, afinaciones y revisiones preventivas</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="bi bi-gear-fill"></i></div>
        <h3 style="font-size:18px;font-weight:700;margin-bottom:8px;">Personalización</h3>
        <p style="color:#cbd5da;font-size:14px;line-height:1.6;">Upgrades, cambio de componentes y ajustes a medida</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="bi bi-truck"></i></div>
        <h3 style="font-size:18px;font-weight:700;margin-bottom:8px;">Envío gratis</h3>
        <p style="color:#cbd5da;font-size:14px;line-height:1.6;">Delivery sin costo en compras superiores a S/ 500</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="bi bi-people-fill"></i></div>
        <h3 style="font-size:18px;font-weight:700;margin-bottom:8px;">Asesoría</h3>
        <p style="color:#cbd5da;font-size:14px;line-height:1.6;">Expertos te ayudan a elegir la bici perfecta para ti</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonios -->
<section>
  <div class="max-w-7xl">
    <h2 style="margin-bottom:12px;">Lo que dicen nuestros clientes</h2>
    <p class="lead" style="margin-bottom:28px;">Experiencias reales de ciclistas como tú</p>

    <div class="grid-3">
      <div class="testimonial">
        <p style="color:#cbd5da;margin-bottom:16px;position:relative;z-index:1;">"Excelente atención y conocimiento técnico. Me ayudaron a elegir mi MTB y quedé muy satisfecho con la compra."</p>
        <div style="display:flex;align-items:center;gap:12px;">
          <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=100" alt="Cliente" style="width:48px;height:48px;border-radius:50%;object-fit:cover;"/>
          <div>
            <div style="font-weight:700;">Carlos Mendoza</div>
            <div style="color:#9aa7ad;font-size:13px;">Ciclista MTB</div>
          </div>
        </div>
      </div>

      <div class="testimonial">
        <p style="color:#cbd5da;margin-bottom:16px;position:relative;z-index:1;">"El servicio de mantenimiento es impecable. Siempre dejan mi bici como nueva y los precios son justos."</p>
        <div style="display:flex;align-items:center;gap:12px;">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=100" alt="Cliente" style="width:48px;height:48px;border-radius:50%;object-fit:cover;"/>
          <div>
            <div style="font-weight:700;">Ana García</div>
            <div style="color:#9aa7ad;font-size:13px;">Ciclista de ruta</div>
          </div>
        </div>
      </div>

      <div class="testimonial">
        <p style="color:#cbd5da;margin-bottom:16px;position:relative;z-index:1;">"Compré mi primera bici aquí y la experiencia fue increíble. Me explicaron todo con paciencia."</p>
        <div style="display:flex;align-items:center;gap:12px;">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=100" alt="Cliente" style="width:48px;height:48px;border-radius:50%;object-fit:cover;"/>
          <div>
            <div style="font-weight:700;">Jorge Ramírez</div>
            <div style="color:#9aa7ad;font-size:13px;">Ciclista urbano</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Final -->
<section style="background:linear-gradient(135deg, rgba(15,118,110,0.08), rgba(239,68,68,0.05));padding:70px 0;">
  <div class="max-w-7xl" style="text-align:center;">
    <h2 style="font-size:clamp(24px,3vw,36px);margin-bottom:16px;">¿Listo para tu próxima aventura?</h2>
    <p class="lead" style="margin-bottom:28px;max-width:680px;margin-left:auto;margin-right:auto;">Visita nuestra tienda o contáctanos para una asesoría personalizada. Te ayudamos a encontrar la bici perfecta.</p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" class="btn btn-primary" style="font-size:16px;"><i class="bi bi-shop"></i> Ir a la tienda</a>
      <a href="<?php echo esc_url(add_query_arg('view','contact', home_url('/'))); ?>" class="btn btn-ghost" style="font-size:16px;"><i class="bi bi-chat-dots"></i> Contáctanos</a>
    </div>
  </div>
</section>

<?php
get_footer();
?>