<?php
get_header();

// Get product by slug from URL
$product_slug = '';
if (isset($_GET['product'])) {
    $product_slug = sanitize_text_field($_GET['product']);
}

if (!$product_slug) {
    echo '<main class="max-w-7xl" style="padding:48px 24px;"><h2>Producto no especificado</h2><p style="color:#9aa7ad">Por favor selecciona un producto.</p></main>';
    get_footer();
    return;
}

// Try to get product from WordPress first
$product_query = new WP_Query(array(
    'post_type' => 'cq_product',
    'name' => $product_slug,
    'posts_per_page' => 1,
    'post_status' => 'publish'
));

// If product exists in WordPress, use it
if ($product_query->have_posts()) {
    $product_query->the_post();
    $product_id = get_the_ID();

    // Get all product meta
    $price = get_post_meta($product_id, '_cq_price', true);
    $stock_status = get_post_meta($product_id, '_cq_stock_status', true);
    $stock_meta = get_post_meta($product_id, '_cq_stock_meta', true);
    $description = get_post_meta($product_id, '_cq_description', true);
    $specs = get_post_meta($product_id, '_cq_specs', true);
    $gallery_ids = get_post_meta($product_id, '_cq_gallery', true);

    // Get product category
    $terms = get_the_terms($product_id, 'cq_product_category');
    $category = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : '';

    // Get thumbnail and gallery
    $main_image = get_the_post_thumbnail_url($product_id, 'large');
    if (!$main_image) {
        $main_image = 'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=1200';
    }

    $gallery = array();
    if (is_array($gallery_ids)) {
        foreach ($gallery_ids as $img_id) {
            $img_url = wp_get_attachment_image_url($img_id, 'large');
            if ($img_url) {
                $gallery[] = $img_url;
            }
        }
    }
    // If no gallery images, use main image
    if (empty($gallery)) {
        $gallery[] = $main_image;
    }

    $product_data = array(
        'title' => get_the_title(),
        'excerpt' => get_the_excerpt(),
        'description' => $description ? $description : get_the_content(),
        'price' => $price ? $price : 'Consultar',
        'stock' => $stock_status ? $stock_status : 'Consultar',
        'meta' => $stock_meta ? $stock_meta : '',
        'category' => $category,
        'img' => $main_image,
        'gallery' => $gallery,
        'specs' => is_array($specs) ? $specs : array()
    );

    wp_reset_postdata();

} else {
    // Fallback to hardcoded products array for backwards compatibility
    // Shared products array (same as shop). In production replace with WP/WooCommerce data.
$products = array(
  'mtb-pro-x1' => array(
    'title'=>'MTB Pro X1',
    'img'=>'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=1200',
    'excerpt'=>'Bicicleta de montaña de alto rendimiento diseñada para trail y cross-country exigente.',
    'description'=>'La MTB Pro X1 es la elección perfecta para ciclistas que buscan una bicicleta de montaña versátil y de alto rendimiento. Su cuadro de aluminio 6061 combina ligereza y resistencia, mientras que la suspensión FOX de 120mm garantiza un control excepcional en terrenos técnicos. Equipada con transmisión Shimano XT de 12 velocidades para cambios precisos y frenos hidráulicos que ofrecen máxima potencia de frenado.',
    'price'=>'€2,799',
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
    'price'=>'€4,199',
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
    'price'=>'€3,249',
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
    'price'=>'€999',
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

// Determine slug - fallback logic
if (!isset($products[$product_slug])) {
  echo '<main class="max-w-7xl" style="padding:48px 24px;"><h2>Producto no encontrado</h2><p style="color:#9aa7ad">El producto solicitado no existe.</p><p style="margin-top:16px;"><a href="'.esc_url(home_url('/tienda')).'" class="btn btn-primary">Volver a la Tienda</a></p></main>';
  get_footer();
  return;
}

$fallback_product = $products[$product_slug];
$product_data = array(
    'title' => $fallback_product['title'],
    'excerpt' => $fallback_product['excerpt'],
    'description' => $fallback_product['description'],
    'price' => $fallback_product['price'],
    'stock' => $fallback_product['stock'],
    'meta' => $fallback_product['meta'],
    'category' => $fallback_product['category'],
    'img' => $fallback_product['img'],
    'gallery' => $fallback_product['gallery'],
    'specs' => array()
);

// Convert old specs format to new format
if (isset($fallback_product['specs']) && is_array($fallback_product['specs'])) {
    foreach ($fallback_product['specs'] as $label => $value) {
        $product_data['specs'][] = array('label' => $label, 'value' => $value);
    }
}
}

// At this point, $product_data contains all product information
$p = $product_data;
?>

<main class="max-w-7xl" style="padding:48px 24px;">
  <!-- Breadcrumb -->
  <div style="margin-bottom:24px;color:#9aa7ad;font-size:14px;">
    <a href="<?php echo esc_url(home_url('/')); ?>" style="color:#9aa7ad;text-decoration:none;">Inicio</a>
    <span style="margin:0 8px;">/</span>
    <a href="<?php echo esc_url(home_url('/tienda')); ?>" style="color:#9aa7ad;text-decoration:none;">Tienda</a>
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
        <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="btn btn-primary" style="flex:1;min-width:200px;justify-content:center;">
          <i class="bi bi-cart-fill"></i>
          Consultar disponibilidad
        </a>
        <a href="<?php echo esc_url(home_url('/tienda')); ?>" class="btn btn-ghost">
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
          <?php if(!empty($p['specs']) && is_array($p['specs'])): ?>
            <table style="width:100%;border-spacing:0;">
              <?php foreach($p['specs'] as $spec): ?>
                <?php if(isset($spec['label']) && isset($spec['value']) && ($spec['label'] || $spec['value'])): ?>
                <tr style="border-bottom:1px solid rgba(255,255,255,0.04);">
                  <td style="padding:12px 12px 12px 0;font-weight:600;color:#fff;width:40%;">
                    <?php echo esc_html($spec['label']); ?>
                  </td>
                  <td style="padding:12px 0;color:#cbd5da;">
                    <?php echo esc_html($spec['value']); ?>
                  </td>
                </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </table>
          <?php else: ?>
            <p style="color:#9aa7ad;font-style:italic;">No hay especificaciones disponibles.</p>
          <?php endif; ?>
        </div>
      </div>

      <!-- Related products -->
      <div style="margin-top:32px;">
        <h3>Productos Relacionados</h3>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:10px;margin-top:14px;">
          <?php
            // Get related products from same category or just other products
            $related_args = array(
                'post_type' => 'cq_product',
                'posts_per_page' => 4,
                'post__not_in' => array(isset($product_id) ? $product_id : 0),
                'orderby' => 'rand'
            );

            // If we have a category, get products from same category
            if (!empty($category)) {
                $related_args['tax_query'] = array(
                    array(
                        'taxonomy' => 'cq_product_category',
                        'field'    => 'name',
                        'terms'    => $category,
                    ),
                );
            }

            $related_query = new WP_Query($related_args);

            if ($related_query->have_posts()):
                while ($related_query->have_posts()): $related_query->the_post();
                    $rel_price = get_post_meta(get_the_ID(), '_cq_price', true);
                    $rel_slug = get_post_field('post_name', get_the_ID());
                    echo '<a href="'.esc_url(add_query_arg(array('product'=>$rel_slug), home_url('/'))).'" class="glass" style="text-decoration:none;color:inherit;padding:12px;text-align:center;transition:all 0.3s;">
                      <div style="font-weight:600;font-size:14px;color:#fff;">'.esc_html(get_the_title()).'</div>
                      <div style="color:#0f766e;font-size:13px;margin-top:6px;">'.esc_html($rel_price ? $rel_price : 'Consultar').'</div>
                    </a>';
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p style="color:#9aa7ad;font-size:14px;grid-column:1/-1;">No hay productos relacionados disponibles.</p>';
            endif;
          ?>
        </div>
      </div>
    </aside>
  </div>
</main>

<?php get_footer(); ?>
