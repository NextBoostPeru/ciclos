<?php
get_header();

// Shared products array (same as shop). In production replace with WP/WooCommerce data.
$products = array(
  'mtb-pro-x1' => array('title'=>'MTB Pro X1','img'=>'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=1200','excerpt'=>'Suspensión 120mm · Cambio 12v · Ruedas 29"','price'=>'S/ 2,799','meta'=>'Envío 24-48h','gallery'=>array(
    'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=1200',
    'https://images.unsplash.com/photo-1520975911516-7b2f4b0d8c8a?q=80&w=1200',
    'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1200'
  )),
  'ruta-aero-s3' => array('title'=>'Ruta Aero S3','img'=>'https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=1200','excerpt'=>'Cuadro carbono · Grupo 105','price'=>'S/ 4,199','meta'=>'Pre-orden','gallery'=>array(
    'https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=1200',
    'https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=1200'
  )),
  'gravel-adventurer' => array('title'=>'Gravel Adventurer','img'=>'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1200','excerpt'=>'Versátil · Ruedas 700c','price'=>'S/ 3,249','meta'=>'En stock','gallery'=>array(
    'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1200',
    'https://images.unsplash.com/photo-1520975911516-7b2f4b0d8c8a?q=80&w=1200'
  )),
  'urban-rider' => array('title'=>'Urban Rider','img'=>'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1200','excerpt'=>'Diseño urbano · Frenos disco','price'=>'S/ 999','meta'=>'En stock','gallery'=>array(
    'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1200'
  )),
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

<main class="max-w-7xl" style="padding:36px;">
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
      <h1><?php echo esc_html($p['title']); ?></h1>
      <div style="color:#9aa7ad;margin-top:6px;"><?php echo esc_html($p['excerpt']); ?></div>
      <div style="font-weight:800;font-size:22px;margin-top:12px;"><?php echo esc_html($p['price']); ?></div>
      <div style="color:#9aa7ad;font-size:13px;"><?php echo esc_html($p['meta']); ?></div>

      <div style="margin-top:14px;display:flex;gap:10px;">
        <a href="#" class="btn btn-primary">Comprar ahora</a>
        <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" class="btn btn-ghost">Volver</a>
      </div>

      <div style="margin-top:18px;">
        <h3>Especificaciones</h3>
        <div class="specs">
          <ul>
            <li>Cuadro: Aluminio / Carbono</li>
            <li>Cambio: 12 velocidades</li>
            <li>Frenos: Disco hidráulico</li>
            <li>Ruedas: 29" / 700c</li>
          </ul>
        </div>
      </div>

      <div style="margin-top:18px;">
        <h3>Productos relacionados</h3>
        <div style="display:flex;gap:8px;margin-top:8px;">
          <?php
            // show other products small
            foreach($products as $key=>$pp){
              if($key === $slug) continue;
              echo '<a href="'.esc_url(add_query_arg(array('product'=>$key), home_url('/'))).'" style="display:block;padding:6px 8px;background:rgba(255,255,255,0.02);border-radius:8px;color:#cbd5da;text-decoration:none;">'.esc_html($pp['title']).'</a>';
            }
          ?>
        </div>
      </div>
    </aside>
  </div>
</main>

<?php get_footer(); ?>
