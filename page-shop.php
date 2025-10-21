<?php
get_header();
?>
<!-- Hero Shop -->
<section style="padding:50px 0 30px;background:linear-gradient(135deg, rgba(15,118,110,0.05), rgba(239,68,68,0.03));">
  <div class="max-w-7xl">
    <h1 style="font-size:clamp(28px,4vw,40px);font-weight:800;margin-bottom:12px;">Nuestra <span class="gradient-text">Tienda</span></h1>
    <p class="lead">Encuentra la bicicleta perfecta para tu estilo y presupuesto</p>
  </div>
</section>

<section style="padding:40px 0;">
  <div class="max-w-7xl">
    <!-- Filtros -->
    <div style="display:flex;align-items:center;justify-content:space-between;gap:16px;margin-bottom:32px;flex-wrap:wrap;">
      <div style="display:flex;align-items:center;gap:12px;">
        <label style="color:#cbd5da;font-weight:600;">Filtrar por:</label>
        <select onchange="location.href=this.value" style="padding:10px 16px;border-radius:10px;background:rgba(255,255,255,0.03);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.08);color:inherit;font-weight:600;cursor:pointer;">
          <?php
          $current_cat = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : '';
          ?>
          <option value="<?php echo esc_url(add_query_arg('view','shop',home_url('/'))); ?>" <?php echo $current_cat === '' ? 'selected' : ''; ?>>Todas las categorías</option>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'montana'),home_url('/'))); ?>" <?php echo $current_cat === 'montana' ? 'selected' : ''; ?>>Montaña</option>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'carretera'),home_url('/'))); ?>" <?php echo $current_cat === 'carretera' ? 'selected' : ''; ?>>Carretera</option>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'gravel'),home_url('/'))); ?>" <?php echo $current_cat === 'gravel' ? 'selected' : ''; ?>>Gravel</option>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'urbana'),home_url('/'))); ?>" <?php echo $current_cat === 'urbana' ? 'selected' : ''; ?>>Urbana</option>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'electrica'),home_url('/'))); ?>" <?php echo $current_cat === 'electrica' ? 'selected' : ''; ?>>Eléctrica</option>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'accesorios'),home_url('/'))); ?>" <?php echo $current_cat === 'accesorios' ? 'selected' : ''; ?>>Accesorios</option>
        </select>
      </div>

      <div style="color:#9aa7ad;font-size:14px;">
        <i class="bi bi-info-circle"></i> Envío gratis en compras superiores a S/ 500
      </div>
    </div>

    <!-- Grid de productos -->
    <div class="products-grid">
      <?php
      // Amplio catálogo de productos
      $products = array(
        // Montaña
        array('slug'=>'mtb-pro-x1','title'=>'MTB Pro X1','img'=>'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=800','excerpt'=>'Suspensión 120mm · Shimano Deore 12v','price'=>'S/ 2,799','cat'=>'montana','badge'=>'Popular'),
        array('slug'=>'mtb-trail-beast','title'=>'Trail Beast 29','img'=>'https://images.unsplash.com/photo-1576435728678-68d0fbf94e91?q=80&w=800','excerpt'=>'Full suspension · Rock Shox','price'=>'S/ 4,999','cat'=>'montana','badge'=>'Premium'),
        array('slug'=>'mtb-enduro-king','title'=>'Enduro King','img'=>'https://images.unsplash.com/photo-1571333250630-f0230c320b6d?q=80&w=800','excerpt'=>'160mm recorrido · Fox 36','price'=>'S/ 6,799','cat'=>'montana','badge'=>''),
        array('slug'=>'mtb-xc-racer','title'=>'XC Racer Carbon','img'=>'https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?q=80&w=800','excerpt'=>'Cuadro carbono · 100mm · 10.2kg','price'=>'S/ 8,499','cat'=>'montana','badge'=>'Top'),

        // Carretera
        array('slug'=>'ruta-aero-s3','title'=>'Aero Road S3','img'=>'https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=800','excerpt'=>'Cuadro carbono · Shimano 105 R7000','price'=>'S/ 4,199','cat'=>'carretera','badge'=>'Bestseller'),
        array('slug'=>'ruta-speed-pro','title'=>'Speed Pro Elite','img'=>'https://images.unsplash.com/photo-1511994477422-b69e44bd4ea9?q=80&w=800','excerpt'=>'Ultegra Di2 · Ruedas carbono','price'=>'S/ 9,999','cat'=>'carretera','badge'=>'Premium'),
        array('slug'=>'ruta-classic','title'=>'Classic Road','img'=>'https://images.unsplash.com/photo-1507035895480-2b3156c31fc8?q=80&w=800','excerpt'=>'Aluminio · Claris 8v · Entrada','price'=>'S/ 1,899','cat'=>'carretera','badge'=>''),
        array('slug'=>'ruta-endurance','title'=>'Endurance Confort','img'=>'https://images.unsplash.com/photo-1518655048521-f130df041f66?q=80&w=800','excerpt'=>'Geometría confort · 105 11v','price'=>'S/ 3,699','cat'=>'carretera','badge'=>''),

        // Gravel
        array('slug'=>'gravel-adventurer','title'=>'Gravel Adventurer','img'=>'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800','excerpt'=>'Todo terreno · GRX 11v · 700c','price'=>'S/ 3,249','cat'=>'gravel','badge'=>'Versátil'),
        array('slug'=>'gravel-explorer','title'=>'Explorer GRX','img'=>'https://images.unsplash.com/photo-1475666675596-cca2035b3d79?q=80&w=800','excerpt'=>'Gravel racing · Carbono · GRX 810','price'=>'S/ 5,499','cat'=>'gravel','badge'=>''),

        // Urbana
        array('slug'=>'urban-rider','title'=>'Urban Rider','img'=>'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=800','excerpt'=>'Diseño urbano · Frenos disco · 7v','price'=>'S/ 999','cat'=>'urbana','badge'=>'Económica'),
        array('slug'=>'urban-commuter','title'=>'City Commuter','img'=>'https://images.unsplash.com/photo-1523032666022-8faa8d8e2eae?q=80&w=800','excerpt'=>'Perfecta ciudad · Portaequipaje','price'=>'S/ 1,299','cat'=>'urbana','badge'=>''),
        array('slug'=>'urban-fixie','title'=>'Fixie Style','img'=>'https://images.unsplash.com/photo-1485965120184-e220f721d03e?q=80&w=800','excerpt'=>'Fixed gear · Minimalista · Ligera','price'=>'S/ 899','cat'=>'urbana','badge'=>''),

        // Eléctrica
        array('slug'=>'ebike-power','title'=>'E-Bike Power 500W','img'=>'https://images.unsplash.com/photo-1571333250630-f0230c320b6d?q=80&w=800','excerpt'=>'Motor 500W · Batería 48V 15Ah','price'=>'S/ 5,499','cat'=>'electrica','badge'=>'Nuevo'),
        array('slug'=>'ebike-city','title'=>'E-City Smart','img'=>'https://images.unsplash.com/photo-1559348349-86f1f65817fe?q=80&w=800','excerpt'=>'Urbana eléctrica · 350W · 80km','price'=>'S/ 3,999','cat'=>'electrica','badge'=>''),
        array('slug'=>'ebike-mtb','title'=>'E-MTB Trail','img'=>'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=800','excerpt'=>'MTB eléctrica · 750W · Full','price'=>'S/ 8,999','cat'=>'electrica','badge'=>'Premium'),

        // Accesorios
        array('slug'=>'casco-pro','title'=>'Casco Pro Aero','img'=>'https://images.unsplash.com/photo-1557682260-96773eb01377?q=80&w=800','excerpt'=>'Aerodinámico · MIPS · Ventilado','price'=>'S/ 399','cat'=>'accesorios','badge'=>''),
        array('slug'=>'pedales-clipless','title'=>'Pedales Clipless','img'=>'https://images.unsplash.com/photo-1571333250630-f0230c320b6d?q=80&w=800','excerpt'=>'SPD compatibles · Aluminio','price'=>'S/ 249','cat'=>'accesorios','badge'=>''),
        array('slug'=>'luces-led','title'=>'Set Luces LED','img'=>'https://images.unsplash.com/photo-1573152143286-0c422b4d2175?q=80&w=800','excerpt'=>'Recargables USB · 1000 lúmenes','price'=>'S/ 159','cat'=>'accesorios','badge'=>''),
      );

      $cat = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : '';
      $count = 0;

      foreach($products as $p){
        if($cat && $p['cat'] !== $cat) continue;
        $count++;

        echo '<article class="card" role="article">';
        echo '<div style="position:relative;">';
        echo '<img src="'.esc_url($p['img']).'" alt="'.esc_attr($p['title']).'"/>';
        if($p['badge']) {
          echo '<div style="position:absolute;top:12px;right:12px;background:linear-gradient(135deg,#0f766e,#ef4444);color:#fff;padding:6px 12px;border-radius:20px;font-size:12px;font-weight:700;box-shadow:0 4px 12px rgba(0,0,0,0.3);">'.esc_html($p['badge']).'</div>';
        }
        echo '</div>';
        echo '<div style="padding:16px;">';
        echo '<h3 style="font-weight:800;font-size:18px;margin-bottom:6px;">'.esc_html($p['title']).'</h3>';
        echo '<p style="color:#9aa7ad;font-size:14px;line-height:1.5;margin-bottom:12px;">'.esc_html($p['excerpt']).'</p>';
        echo '<div style="display:flex;justify-content:space-between;align-items:center;margin-top:14px;">';
        echo '<div style="font-weight:800;font-size:22px;color:#0f766e;">'.esc_html($p['price']).'</div>';
        echo '<a class="btn" href="'.esc_url(add_query_arg('view','contact', home_url('/'))).'" style="background:#ef4444;color:#fff;padding:10px 16px;border-radius:10px;text-decoration:none;font-size:14px;"><i class="bi bi-cart-plus"></i> Consultar</a>';
        echo '</div></div></article>';
      }

      if($count === 0) {
        echo '<div style="grid-column:1/-1;text-align:center;padding:60px 20px;">';
        echo '<i class="bi bi-inbox" style="font-size:48px;color:#9aa7ad;margin-bottom:16px;display:block;"></i>';
        echo '<p style="color:#cbd5da;font-size:18px;">No hay productos en esta categoría</p>';
        echo '</div>';
      }
      ?>
    </div>

    <!-- Información adicional -->
    <div style="margin-top:60px;background:linear-gradient(135deg, rgba(15,118,110,0.05), rgba(239,68,68,0.03));padding:40px;border-radius:18px;text-align:center;">
      <h3 style="font-size:24px;font-weight:800;margin-bottom:16px;">¿No encuentras lo que buscas?</h3>
      <p class="lead" style="margin-bottom:20px;">Contamos con más modelos en tienda física y podemos conseguir el producto que necesites</p>
      <a href="<?php echo esc_url(add_query_arg('view','contact', home_url('/'))); ?>" class="btn btn-primary"><i class="bi bi-chat-dots"></i> Contáctanos</a>
    </div>
  </div>
</section>
<?php
get_footer();
?>