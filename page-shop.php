<?php
get_header();

// Get category filter
$cat_slug = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : '';

// Get all categories
$categories = get_terms(array(
    'taxonomy' => 'cq_product_category',
    'hide_empty' => false,
));

// Query products
$args = array(
    'post_type' => 'cq_product',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'orderby' => 'menu_order title',
    'order' => 'ASC'
);

// Filter by category if selected
if ($cat_slug) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'cq_product_category',
            'field'    => 'slug',
            'terms'    => $cat_slug,
        ),
    );
}

$products_query = new WP_Query($args);
?>

<section style="padding:48px 24px;">
  <div class="max-w-7xl">
    <div style="display:flex;align-items:center;justify-content:space-between;gap:12px;margin-bottom:32px;flex-wrap:wrap;">
      <h1 style="margin:0;">Tienda</h1>
      <div style="display:flex;align-items:center;gap:12px;">
        <label style="color:#9aa7ad;">Categoría:</label>
        <select onchange="location.href=this.value" style="padding:10px 14px;border-radius:10px;background:rgba(255,255,255,0.03);border:2px solid rgba(255,255,255,0.08);color:inherit;min-width:150px;">
          <option value="<?php echo esc_url(add_query_arg('view','shop',home_url('/'))); ?>" <?php selected($cat_slug, ''); ?>>Todas las Categorías</option>
          <?php foreach ($categories as $cat): ?>
          <option value="<?php echo esc_url(add_query_arg(array('view'=>'shop','cat'=>$cat->slug),home_url('/'))); ?>" <?php selected($cat_slug, $cat->slug); ?>>
            <?php echo esc_html($cat->name); ?> (<?php echo $cat->count; ?>)
          </option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="products-grid">
      <?php if ($products_query->have_posts()) : ?>
        <?php while ($products_query->have_posts()) : $products_query->the_post(); ?>
          <?php
          $product_id = get_the_ID();
          $price = get_post_meta($product_id, '_cq_price', true);
          $stock_status = get_post_meta($product_id, '_cq_stock_status', true);
          $thumbnail_url = get_the_post_thumbnail_url($product_id, 'medium');
          if (!$thumbnail_url) {
              $thumbnail_url = 'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=800';
          }
          ?>
          <article class="card" role="article">
            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"/>
            <div style="padding:16px;">
              <div style="font-weight:800;font-size:18px;"><?php the_title(); ?></div>

              <?php if (has_excerpt()): ?>
              <div style="color:#cbd5da;margin-top:8px;font-size:14px;line-height:1.6;">
                <?php echo wp_trim_words(get_the_excerpt(), 12); ?>
              </div>
              <?php endif; ?>

              <?php if ($stock_status): ?>
              <div style="margin-top:10px;">
                <span style="padding:4px 10px;background:<?php echo ($stock_status=='En stock') ? 'rgba(15,118,110,0.15)' : 'rgba(239,68,68,0.15)'; ?>;border-radius:6px;font-size:12px;font-weight:600;color:<?php echo ($stock_status=='En stock') ? '#0f766e' : '#ef4444'; ?>;">
                  <?php echo esc_html($stock_status); ?>
                </span>
              </div>
              <?php endif; ?>

              <div style="display:flex;justify-content:space-between;align-items:center;margin-top:14px;padding-top:14px;border-top:1px solid rgba(255,255,255,0.06);">
                <div style="font-weight:800;font-size:20px;color:#fff;">
                  <?php echo esc_html($price ? $price : 'Consultar'); ?>
                </div>
                <div>
                  <a class="btn btn-ghost" href="<?php echo esc_url(add_query_arg(array('product'=>get_post_field('post_name', $product_id)), home_url('/'))); ?>" style="padding:8px 14px;font-size:14px;">
                    Ver Detalles
                  </a>
                </div>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
        <div style="grid-column:1/-1;text-align:center;padding:60px 20px;">
          <div style="font-size:48px;margin-bottom:16px;">🚲</div>
          <h3>No hay productos disponibles</h3>
          <p style="color:#9aa7ad;margin-top:12px;">
            <?php if (current_user_can('manage_options')): ?>
              Puedes agregar productos desde el
              <a href="<?php echo admin_url('post-new.php?post_type=cq_product'); ?>" style="color:#0f766e;">
                panel de administración
              </a>.
            <?php else: ?>
              Vuelve pronto para ver nuevos productos.
            <?php endif; ?>
          </p>
        </div>
      <?php endif; ?>
    </div>

    <?php if ($products_query->have_posts() && $products_query->found_posts > 0): ?>
    <div style="margin-top:40px;text-align:center;color:#9aa7ad;">
      <p>Mostrando <?php echo $products_query->found_posts; ?> producto(s)</p>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php
get_footer();
?>