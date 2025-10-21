<article class="card" role="article" aria-label="<?php echo esc_attr($title); ?>">
  <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($title); ?>" />
  <div style="padding:12px;">
    <div style="font-weight:700"><?php echo esc_html($title); ?></div>
    <div style="color:#9aa7ad;font-size:13px;margin-top:6px"><?php echo esc_html($excerpt); ?></div>
    <div style="display:flex;align-items:center;justify-content:space-between;margin-top:12px;">
      <div>
        <div style="font-weight:800"><?php echo esc_html($price); ?></div>
        <div style="font-size:12px;color:#9aa7ad"><?php echo esc_html($meta); ?></div>
      </div>
      <div style="display:flex;gap:8px;">
        <a class="btn" href="<?php echo esc_url($buy_link); ?>" style="background:#0f766e;color:#000;padding:8px 10px;border-radius:8px;">Añadir</a>
        <button aria-label="Favorito" class="btn" style="background:transparent;border:1px solid rgba(255,255,255,0.06);">❤</button>
      </div>
    </div>
  </div>
</article>
