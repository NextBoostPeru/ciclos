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

<section style="padding:40px 0;border-top:1px solid rgba(255,255,255,0.03);">
  <div class="max-w-7xl">
    <h2>Productos destacados</h2>
    <div class="carousel" aria-label="Productos destacados">
      <?php
      $items = array(
        array('title'=>'MTB Pro X1','img'=>'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=800','price'=>'S/ 2,799'),
        array('title'=>'Ruta Aero S3','img'=>'https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=800','price'=>'S/ 4,199'),
        array('title'=>'Gravel Adventurer','img'=>'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800','price'=>'S/ 3,249'),
        array('title'=>'Urban Rider','img'=>'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=800','price'=>'S/ 999')
      );
      foreach($items as $it){
        echo '<article class="card"><img src="'.esc_url($it['img']).'" alt="'.esc_attr($it['title']).'"/><div style="padding:12px;"><div style="font-weight:800">'.esc_html($it['title']).'</div><div style="color:#9aa7ad;margin-top:6px">'.esc_html($it['price']).'</div></div></article>';
      }
      ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>