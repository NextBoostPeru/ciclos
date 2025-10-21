<?php
get_header();
?>
<section style="padding:36px 0;">
  <div class="max-w-7xl">
    <div style="display:flex;align-items:center;justify-content:space-between;gap:12px;margin-bottom:18px;">
      <h2 style="font-size:26px;font-weight:800;margin:0;">Tienda</h2>
      <div>
        <label style="color:#9aa7ad;margin-right:8px;">Categoría</label>
        <select onchange="location.href=this.value" style="padding:8px;border-radius:8px;background:transparent;border:1px solid rgba(255,255,255,0.06);color:inherit;">
          <option value="<?php echo esc_url(add_query_arg('view','shop',home_url('/'))); ?>">Todas</option>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'montana'),home_url('/'))); ?>">Montaña</option>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'carretera'),home_url('/'))); ?>">Carretera</option>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>'accesorios'),home_url('/'))); ?>">Accesorios</option>
        </select>
      </div>
    </div>

    <div class="products-grid">
      <?php
      // products placeholder with category
      $products = array(
        array('slug'=>'mtb-pro-x1','title'=>'MTB Pro X1','img'=>'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=800','excerpt'=>'Suspensión 120mm · Cambio 12v','price'=>'S/ 2,799','cat'=>'montana'),
        array('slug'=>'ruta-aero-s3','title'=>'Ruta Aero S3','img'=>'https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=800','excerpt'=>'Cuadro carbono · Grupo 105','price'=>'S/ 4,199','cat'=>'carretera'),
        array('slug'=>'gravel-adventurer','title'=>'Gravel Adventurer','img'=>'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800','excerpt'=>'Versátil · Ruedas 700c','price'=>'S/ 3,249','cat'=>'montana'),
        array('slug'=>'urban-rider','title'=>'Urban Rider','img'=>'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=800','excerpt'=>'Diseño urbano · Frenos disco','price'=>'S/ 999','cat'=>'accesorios'),
      );

      $cat = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : '';

      foreach($products as $p){
        if($cat && $p['cat'] !== $cat) continue;
        echo '<article class="card" role="article"><img src="'.esc_url($p['img']).'" alt="'.esc_attr($p['title']).'"/><div style="padding:12px;"><div style="font-weight:800">'.esc_html($p['title']).'</div><div style="color:#9aa7ad;margin-top:6px">'.esc_html($p['excerpt']).'</div><div style="display:flex;justify-content:space-between;align-items:center;margin-top:10px;"><div style="font-weight:800">'.esc_html($p['price']).'</div><div><a class="btn" href="'.esc_url(add_query_arg(array('product'=>$p['slug']), home_url('/'))).'" style="background:#0f766e;color:#000;padding:8px 10px;border-radius:8px;text-decoration:none;">Ver</a></div></div></div></article>';
      }
      ?>
    </div>
  </div>
</section>
<?php
get_footer();
?>