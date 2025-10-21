<?php
get_header();

// Shared products array (same as shop). In production replace with WP/WooCommerce data.
$products = array(
  'mtb-pro-x1' => array(
    'title'=>'MTB Pro X1',
    'img'=>'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=1200',
    'excerpt'=>'Bicicleta de montaña de alto rendimiento diseñada para trail y cross-country exigente.',
    'description'=>'La MTB Pro X1 es la elección perfecta para ciclistas que buscan una bicicleta de montaña versátil y de alto rendimiento. Su cuadro de aluminio 6061 combina ligereza y resistencia, mientras que la suspensión FOX de 120mm garantiza un control excepcional en terrenos técnicos. Equipada con transmisión Shimano XT de 12 velocidades para cambios precisos y frenos hidráulicos que ofrecen máxima potencia de frenado.',
    'price'=>'S/ 2,799',
    'meta'=>'Envío 24-48h',
    'stock'=>'En stock',
    'category'=>'Montaña',
    'specs'=>array(
      'Cuadro'=>'Aluminio 6061 T6, geometría trail',
      'Horquilla'=>'FOX 34 Float Performance, 120mm de recorrido',
      'Transmisión'=>'Shimano XT M8100, 12 velocidades',
      'Frenos'=>'Shimano MT520, discos hidráulicos 180/180mm',
      'Ruedas'=>'DT Swiss M1900, 29 pulgadas',
      'Neumáticos'=>'Maxxis Rekon 29x2.4"',
      'Manillar'=>'Race Face Aeffect, 780mm',
      'Tija'=>'RockShox Reverb, dropper 150mm',
      'Peso'=>'12.8 kg (talla M)'
    ),
    'gallery'=>array(
      'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=1200',
      'https://images.unsplash.com/photo-1520975911516-7b2f4b0d8c8a?q=80&w=1200',
      'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1200'
    )
  ),
  'ruta-aero-s3' => array(
    'title'=>'Ruta Aero S3',
    'img'=>'https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=1200',
    'excerpt'=>'Bicicleta de carretera con cuadro de carbono diseñada para velocidad y eficiencia aerodinámica.',
    'description'=>'La Ruta Aero S3 es una máquina de competición diseñada para ciclistas exigentes que buscan el máximo rendimiento. Su cuadro de carbono UD de alto módulo ofrece una rigidez excepcional mientras mantiene un peso ultra ligero. Equipada con grupo completo Shimano 105 R7000, garantiza cambios suaves y precisos. Las ruedas de perfil aerodinámico reducen la resistencia al viento, permitiéndote alcanzar velocidades impresionantes con menos esfuerzo.',
    'price'=>'S/ 4,199',
    'meta'=>'Pre-orden · Disponible en 10 días',
    'stock'=>'Pre-orden',
    'category'=>'Carretera',
    'specs'=>array(
      'Cuadro'=>'Carbono UD T800, geometría racing',
      'Horquilla'=>'Carbono full, cónica 1.5"',
      'Transmisión'=>'Shimano 105 R7000, 2x11 velocidades',
      'Frenos'=>'Shimano 105 R7020, discos hidráulicos 160/160mm',
      'Ruedas'=>'Mavic Cosmic Elite UST, perfil 40mm',
      'Neumáticos'=>'Continental Grand Prix 5000, 700x28c',
      'Manillar'=>'FSA Energy Compact, 420mm',
      'Potencia'=>'FSA Energy, 100mm',
      'Peso'=>'8.4 kg (talla 54cm)'
    ),
    'gallery'=>array(
      'https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=1200',
      'https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=1200'
    )
  ),
  'gravel-adventurer' => array(
    'title'=>'Gravel Adventurer',
    'img'=>'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1200',
    'excerpt'=>'La bicicleta perfecta para aventuras off-road y cicloturismo en cualquier terreno.',
    'description'=>'La Gravel Adventurer es tu compañera ideal para explorar caminos sin asfaltar, rutas de grava y aventuras de bikepacking. Su geometría relajada proporciona comodidad en largas distancias, mientras que su construcción robusta te da confianza en terrenos variados. Múltiples puntos de anclaje para portabultos y bidones la hacen perfecta para viajes de varios días. Equipada con neumáticos anchos para tracción en cualquier superficie.',
    'price'=>'S/ 3,249',
    'meta'=>'En stock · Envío gratis',
    'stock'=>'En stock',
    'category'=>'Gravel',
    'specs'=>array(
      'Cuadro'=>'Aluminio 6061, geometría gravel específica',
      'Horquilla'=>'Carbono con monturas para portabultos',
      'Transmisión'=>'Shimano GRX 810, 2x11 velocidades',
      'Frenos'=>'Shimano GRX 810, discos hidráulicos 160/160mm',
      'Ruedas'=>'WTB KOM i23, tubeless ready, 700c',
      'Neumáticos'=>'WTB Venture 700x40c, tubeless',
      'Manillar'=>'Salsa Cowchipper, 440mm, flare 12°',
      'Extras'=>'Portabultos frontal/trasero, guardabarros',
      'Peso'=>'10.5 kg (talla M)'
    ),
    'gallery'=>array(
      'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1200',
      'https://images.unsplash.com/photo-1520975911516-7b2f4b0d8c8a?q=80&w=1200'
    )
  ),
  'urban-rider' => array(
    'title'=>'Urban Rider',
    'img'=>'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1200',
    'excerpt'=>'Bicicleta urbana moderna perfecta para desplazamientos diarios por la ciudad.',
    'description'=>'La Urban Rider combina estilo, practicidad y durabilidad para tus desplazamientos urbanos. Su diseño minimalista esconde componentes de calidad que garantizan un mantenimiento mínimo. Los frenos de disco proporcionan frenado fiable en cualquier condición climática, mientras que los neumáticos antipinchazos te dan tranquilidad en tu ruta diaria. Incluye guardabarros, portabultos trasero y luz LED recargable.',
    'price'=>'S/ 999',
    'meta'=>'En stock · Última unidad',
    'stock'=>'Últimas unidades',
    'category'=>'Urbana',
    'specs'=>array(
      'Cuadro'=>'Acero Hi-Ten, geometría urbana cómoda',
      'Horquilla'=>'Acero rígida con monturas para guardabarros',
      'Transmisión'=>'Shimano Tourney, 3x7 velocidades',
      'Frenos'=>'Tektro MD-M280, discos mecánicos 160/160mm',
      'Ruedas'=>'Alexrims DC19, 700c',
      'Neumáticos'=>'Schwalbe Marathon Plus 700x32c, antipinchazos',
      'Accesorios'=>'Guardabarros, portabultos, pata de cabra',
      'Luces'=>'Luz delantera LED recargable USB',
      'Peso'=>'14.2 kg'
    ),
    'gallery'=>array(
      'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1200'
    )
  ),
);

// Determine slug
$slug = '';
if ( isset($_GET['product']) ) {
  $slug = sanitize_text_field($_GET['product']);
}
if ( !$slug || !isset($products[$slug]) ) {
  echo '<main class="max-w-7xl" style="padding:36px;"><h2 style="font-size:22px;font-weight:800">Producto no encontrado</h2><p style="color:#9aa7ad">El producto solicitado no existe.</p></main>';
  get_footer();
  return;
}
$p = $products[$slug];
?>

<main class="max-w-7xl" style="padding:48px 24px;">
  <!-- Breadcrumb -->
  <div style="margin-bottom:24px;color:#9aa7ad;font-size:14px;">
    <a href="<?php echo esc_url(home_url('/')); ?>" style="color:#9aa7ad;text-decoration:none;">Inicio</a>
    <span style="margin:0 8px;">/</span>
    <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" style="color:#9aa7ad;text-decoration:none;">Tienda</a>
    <span style="margin:0 8px;">/</span>
    <span style="color:#fff;"><?php echo esc_html($p['title']); ?></span>
  </div>

  <div class="product-detail">
    <div>
      <div class="card card-shadow">
        <img id="mainImage" src="<?php echo esc_url($p['img']); ?>" alt="<?php echo esc_attr($p['title']); ?>" />
      </div>

      <?php if(!empty($p['gallery'])): ?>
      <div class="gallery">
        <div class="thumbs">
          <?php foreach($p['gallery'] as $g){ echo '<img class="thumb" src="'.esc_url($g).'" alt="" onclick="document.getElementById(\'mainImage\').src=this.src"/>'; } ?>
        </div>
      </div>
      <?php endif; ?>

    </div>

    <aside>
      <!-- Category badge -->
      <?php if(isset($p['category'])): ?>
      <div class="badge" style="margin-bottom:12px;">
        <i class="bi bi-tag-fill"></i>
        <?php echo esc_html($p['category']); ?>
      </div>
      <?php endif; ?>

      <h1><?php echo esc_html($p['title']); ?></h1>

      <div style="color:#cbd5da;margin-top:12px;line-height:1.7;font-size:16px;">
        <?php echo esc_html($p['excerpt']); ?>
      </div>

      <div style="display:flex;align-items:center;gap:16px;margin-top:20px;padding:20px 0;border-top:1px solid rgba(255,255,255,0.06);border-bottom:1px solid rgba(255,255,255,0.06);">
        <div>
          <div style="color:#9aa7ad;font-size:13px;margin-bottom:4px;">Precio</div>
          <div style="font-weight:800;font-size:32px;color:#fff;"><?php echo esc_html($p['price']); ?></div>
        </div>
        <?php if(isset($p['stock'])): ?>
        <div style="margin-left:auto;">
          <div style="padding:8px 16px;background:<?php echo ($p['stock']=='En stock') ? 'rgba(15,118,110,0.15)' : 'rgba(239,68,68,0.15)'; ?>;border-radius:8px;font-size:13px;font-weight:600;color:<?php echo ($p['stock']=='En stock') ? '#0f766e' : '#ef4444'; ?>;">
            <?php echo esc_html($p['stock']); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>

      <div style="margin-top:20px;display:flex;gap:12px;flex-wrap:wrap;">
        <a href="<?php echo esc_url(add_query_arg('view','contact', home_url('/'))); ?>" class="btn btn-primary" style="flex:1;min-width:200px;justify-content:center;">
          <i class="bi bi-cart-fill"></i>
          Consultar disponibilidad
        </a>
        <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" class="btn btn-ghost">
          <i class="bi bi-arrow-left"></i>
          Volver a la tienda
        </a>
      </div>

      <?php if(isset($p['meta'])): ?>
      <div style="margin-top:16px;padding:16px;background:rgba(15,118,110,0.08);border-radius:12px;border:1px solid rgba(15,118,110,0.2);">
        <div style="display:flex;align-items:center;gap:10px;color:#cbd5da;font-size:14px;">
          <i class="bi bi-truck" style="font-size:20px;color:#0f766e;"></i>
          <span><?php echo esc_html($p['meta']); ?></span>
        </div>
      </div>
      <?php endif; ?>

      <!-- Description -->
      <?php if(isset($p['description'])): ?>
      <div style="margin-top:32px;">
        <h3>Descripción</h3>
        <p style="color:#cbd5da;margin-top:12px;line-height:1.8;">
          <?php echo esc_html($p['description']); ?>
        </p>
      </div>
      <?php endif; ?>

      <!-- Specifications -->
      <div style="margin-top:32px;">
        <h3>Especificaciones Técnicas</h3>
        <div class="specs" style="margin-top:14px;">
          <?php if(isset($p['specs']) && is_array($p['specs'])): ?>
            <table style="width:100%;border-spacing:0;">
              <?php foreach($p['specs'] as $label => $value): ?>
              <tr style="border-bottom:1px solid rgba(255,255,255,0.04);">
                <td style="padding:12px 12px 12px 0;font-weight:600;color:#fff;width:40%;"><?php echo esc_html($label); ?></td>
                <td style="padding:12px 0;color:#cbd5da;"><?php echo esc_html($value); ?></td>
              </tr>
              <?php endforeach; ?>
            </table>
          <?php else: ?>
            <ul>
              <li>Cuadro: Aluminio / Carbono</li>
              <li>Cambio: 12 velocidades</li>
              <li>Frenos: Disco hidráulico</li>
              <li>Ruedas: 29" / 700c</li>
            </ul>
          <?php endif; ?>
        </div>
      </div>

      <!-- Related products -->
      <div style="margin-top:32px;">
        <h3>Productos Relacionados</h3>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:10px;margin-top:14px;">
          <?php
            foreach($products as $key=>$pp){
              if($key === $slug) continue;
              echo '<a href="'.esc_url(add_query_arg(array('product'=>$key), home_url('/'))).'" class="glass" style="text-decoration:none;color:inherit;padding:12px;text-align:center;transition:all 0.3s;">
                <div style="font-weight:600;font-size:14px;color:#fff;">'.esc_html($pp['title']).'</div>
                <div style="color:#0f766e;font-size:13px;margin-top:6px;">'.esc_html($pp['price']).'</div>
              </a>';
            }
          ?>
        </div>
      </div>
    </aside>
  </div>
</main>

<?php get_footer(); ?>
