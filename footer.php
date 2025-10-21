  <footer>
    <div class="max-w-7xl" style="display:flex;flex-direction:column;gap:18px;align-items:center;">
      <div style="display:flex;gap:16px;align-items:center;width:100%;justify-content:space-between;">
        <div>
          <strong style="font-size:18px;">CICLOS QUERALT SL</strong>
          <div style="color:#9aa7ad;margin-top:6px;">Montaña · Carretera · Accesorios</div>
        </div>
        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" style="display:flex;gap:8px;align-items:center;">
          <input type="hidden" name="action" value="cq_newsletter" />
          <input type="email" name="email" required placeholder="Tu correo" style="padding:8px;border-radius:8px;background:transparent;border:1px solid rgba(255,255,255,0.06);color:inherit" />
          <button type="submit" style="padding:10px 14px;border-radius:10px;background:#ef4444;color:#fff;font-weight:700">Suscribirme</button>
        </form>
      </div>

      <div style="display:flex;gap:12px;">
        <a href="#" aria-label="Facebook"><i class="bi bi-facebook" style="font-size:18px;color:#9aa7ad"></i></a>
        <a href="#" aria-label="Instagram"><i class="bi bi-instagram" style="font-size:18px;color:#9aa7ad"></i></a>
        <a href="#" aria-label="WhatsApp"><i class="bi bi-whatsapp" style="font-size:18px;color:#9aa7ad"></i></a>
      </div>

      <?php
      // Get footer logos
      $logo1_id = get_option('cq_footer_logo_1', '');
      $logo2_id = get_option('cq_footer_logo_2', '');
      $logo1_url = $logo1_id ? wp_get_attachment_image_url($logo1_id, 'medium') : '';
      $logo2_url = $logo2_id ? wp_get_attachment_image_url($logo2_id, 'medium') : '';

      if ($logo1_url || $logo2_url): ?>
      <div style="display:flex;gap:24px;align-items:center;justify-content:center;padding:16px 0;">
        <?php if ($logo1_url): ?>
          <img src="<?php echo esc_url($logo1_url); ?>" alt="Logo 1" style="max-height:50px;max-width:150px;height:auto;width:auto;object-fit:contain;" />
        <?php endif; ?>
        <?php if ($logo2_url): ?>
          <img src="<?php echo esc_url($logo2_url); ?>" alt="Logo 2" style="max-height:50px;max-width:150px;height:auto;width:auto;object-fit:contain;" />
        <?php endif; ?>
      </div>
      <?php endif; ?>

      <div style="text-align:center;color:#9aa7ad;font-size:14px;">
        © <?php echo date('Y'); ?> CICLOS QUERALT SL · Carrer de Balmes, 156, 08008 Barcelona · Tel: +34 934 567 890
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
