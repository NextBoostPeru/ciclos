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
      $logo1_url = $logo1_id ? wp_get_attachment_image_url($logo1_id, 'full') : '';
      $logo2_url = $logo2_id ? wp_get_attachment_image_url($logo2_id, 'full') : '';

      // Debug info visible en la página
      echo '<div style="background:#1a1a1a;border:2px solid #0f766e;padding:12px;border-radius:8px;margin:16px 0;font-family:monospace;font-size:11px;color:#0f766e;">';
      echo '<strong>DEBUG INFO (Versión: ' . date('Y-m-d H:i:s') . ')</strong><br>';
      echo 'Logo 1 ID: ' . ($logo1_id ? $logo1_id : 'No configurado') . '<br>';
      echo 'Logo 1 URL: ' . ($logo1_url ? $logo1_url : 'No encontrado') . '<br>';
      echo 'Logo 2 ID: ' . ($logo2_id ? $logo2_id : 'No configurado') . '<br>';
      echo 'Logo 2 URL: ' . ($logo2_url ? $logo2_url : 'No encontrado') . '<br>';
      echo 'Template: footer.php v2.0<br>';
      echo '</div>';

      if ($logo1_url || $logo2_url): ?>
      <div style="display:flex;gap:24px;align-items:center;justify-content:center;padding:20px 0;flex-wrap:wrap;">
        <?php if ($logo1_url): ?>
          <div style="background:rgba(255,255,255,0.05);padding:12px;border-radius:8px;">
            <img src="<?php echo esc_url($logo1_url); ?>" alt="Logo 1" style="max-height:60px;max-width:180px;height:auto;width:auto;object-fit:contain;display:block;" />
          </div>
        <?php endif; ?>
        <?php if ($logo2_url): ?>
          <div style="background:rgba(255,255,255,0.05);padding:12px;border-radius:8px;">
            <img src="<?php echo esc_url($logo2_url); ?>" alt="Logo 2" style="max-height:60px;max-width:180px;height:auto;width:auto;object-fit:contain;display:block;" />
          </div>
        <?php endif; ?>
      </div>
      <?php else: ?>
      <div style="background:rgba(239,68,68,0.1);border:1px solid #ef4444;padding:12px;border-radius:8px;margin:16px 0;text-align:center;color:#ef4444;">
        <strong>⚠️ Logos no configurados</strong><br>
        Ve a <strong>Apariencia → Imágenes del Sitio</strong> para agregar logos al footer
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
