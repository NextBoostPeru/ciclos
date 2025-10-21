  <footer style="background:rgba(0,0,0,0.3);backdrop-filter:blur(10px);border-top:1px solid rgba(255,255,255,0.06);padding:60px 0 24px;">
    <div class="max-w-7xl">
      <!-- Footer Grid -->
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:40px;margin-bottom:40px;">

        <!-- Columna 1: Info de la empresa -->
        <div>
          <div style="display:flex;gap:12px;align-items:center;margin-bottom:16px;">
            <div style="width:42px;height:42px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#0f766e,#ef4444);">
              <i class="bi bi-bicycle" style="color:white;font-size:18px"></i>
            </div>
            <div>
              <div style="font-weight:800;font-size:18px;">CICLOS QUERALT</div>
              <div style="color:#9aa7ad;font-size:12px;">Pasión por el ciclismo</div>
            </div>
          </div>
          <p style="color:#9aa7ad;font-size:14px;line-height:1.6;margin-bottom:16px;">
            Tu tienda especializada en bicicletas de montaña, carretera y accesorios. Más de 15 años al servicio de los ciclistas.
          </p>
          <div style="display:flex;gap:12px;">
            <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook" style="width:36px;height:36px;border-radius:8px;background:rgba(255,255,255,0.04);display:flex;align-items:center;justify-content:center;transition:all 0.3s;border:1px solid rgba(255,255,255,0.06);">
              <i class="bi bi-facebook" style="font-size:16px;color:#9aa7ad"></i>
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram" style="width:36px;height:36px;border-radius:8px;background:rgba(255,255,255,0.04);display:flex;align-items:center;justify-content:center;transition:all 0.3s;border:1px solid rgba(255,255,255,0.06);">
              <i class="bi bi-instagram" style="font-size:16px;color:#9aa7ad"></i>
            </a>
            <a href="https://wa.me/51999999999" target="_blank" rel="noopener" aria-label="WhatsApp" style="width:36px;height:36px;border-radius:8px;background:rgba(255,255,255,0.04);display:flex;align-items:center;justify-content:center;transition:all 0.3s;border:1px solid rgba(255,255,255,0.06);">
              <i class="bi bi-whatsapp" style="font-size:16px;color:#9aa7ad"></i>
            </a>
            <a href="https://youtube.com" target="_blank" rel="noopener" aria-label="YouTube" style="width:36px;height:36px;border-radius:8px;background:rgba(255,255,255,0.04);display:flex;align-items:center;justify-content:center;transition:all 0.3s;border:1px solid rgba(255,255,255,0.06);">
              <i class="bi bi-youtube" style="font-size:16px;color:#9aa7ad"></i>
            </a>
          </div>
        </div>

        <!-- Columna 2: Links rápidos -->
        <div>
          <h3 style="font-size:16px;font-weight:800;margin-bottom:16px;color:#fff;">Enlaces rápidos</h3>
          <ul style="list-style:none;padding:0;margin:0;">
            <li style="margin-bottom:10px;">
              <a href="<?php echo esc_url(home_url('/')); ?>" style="color:#9aa7ad;text-decoration:none;font-size:14px;transition:color 0.3s;display:flex;align-items:center;gap:6px;">
                <i class="bi bi-chevron-right" style="font-size:12px;"></i> Inicio
              </a>
            </li>
            <li style="margin-bottom:10px;">
              <a href="<?php echo esc_url(add_query_arg('view','shop',home_url('/'))); ?>" style="color:#9aa7ad;text-decoration:none;font-size:14px;transition:color 0.3s;display:flex;align-items:center;gap:6px;">
                <i class="bi bi-chevron-right" style="font-size:12px;"></i> Tienda
              </a>
            </li>
            <li style="margin-bottom:10px;">
              <a href="<?php echo esc_url(add_query_arg('view','nosotros',home_url('/'))); ?>" style="color:#9aa7ad;text-decoration:none;font-size:14px;transition:color 0.3s;display:flex;align-items:center;gap:6px;">
                <i class="bi bi-chevron-right" style="font-size:12px;"></i> Nosotros
              </a>
            </li>
            <li style="margin-bottom:10px;">
              <a href="<?php echo esc_url(add_query_arg('view','contacto',home_url('/'))); ?>" style="color:#9aa7ad;text-decoration:none;font-size:14px;transition:color 0.3s;display:flex;align-items:center;gap:6px;">
                <i class="bi bi-chevron-right" style="font-size:12px;"></i> Contacto
              </a>
            </li>
          </ul>
        </div>

        <!-- Columna 3: Contacto -->
        <div>
          <h3 style="font-size:16px;font-weight:800;margin-bottom:16px;color:#fff;">Contacto</h3>
          <div style="color:#9aa7ad;font-size:14px;line-height:1.8;">
            <div style="display:flex;gap:10px;margin-bottom:12px;">
              <i class="bi bi-geo-alt-fill" style="color:#0f766e;font-size:16px;flex-shrink:0;"></i>
              <div>Av. Principal 456, Lima<br/>Perú</div>
            </div>
            <div style="display:flex;gap:10px;margin-bottom:12px;">
              <i class="bi bi-telephone-fill" style="color:#0f766e;font-size:16px;flex-shrink:0;"></i>
              <div>(01) 234-5678<br/>+51 999 999 999</div>
            </div>
            <div style="display:flex;gap:10px;margin-bottom:12px;">
              <i class="bi bi-envelope-fill" style="color:#0f766e;font-size:16px;flex-shrink:0;"></i>
              <div>info@ciclosqueralt.com</div>
            </div>
            <div style="display:flex;gap:10px;">
              <i class="bi bi-clock-fill" style="color:#0f766e;font-size:16px;flex-shrink:0;"></i>
              <div>Lun-Vie: 9:00 - 19:00<br/>Sáb: 9:00 - 14:00</div>
            </div>
          </div>
        </div>

        <!-- Columna 4: Newsletter -->
        <div>
          <h3 style="font-size:16px;font-weight:800;margin-bottom:16px;color:#fff;">Newsletter</h3>
          <p style="color:#9aa7ad;font-size:14px;margin-bottom:16px;line-height:1.6;">
            Suscríbete para recibir ofertas especiales y novedades.
          </p>
          <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" style="display:flex;flex-direction:column;gap:10px;">
            <input type="hidden" name="action" value="cq_newsletter" />
            <input
              type="email"
              name="email"
              required
              placeholder="Tu correo electrónico"
              style="padding:12px;border-radius:10px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);color:inherit;font-size:14px;transition:all 0.3s;"
            />
            <button
              type="submit"
              class="btn btn-primary"
              style="padding:12px;width:100%;justify-content:center;font-size:14px;"
            >
              <i class="bi bi-envelope-check"></i> Suscribirme
            </button>
          </form>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div style="padding-top:24px;border-top:1px solid rgba(255,255,255,0.06);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;">
        <div style="color:#9aa7ad;font-size:14px;">
          © <?php echo date('Y'); ?> <strong>CICLOS QUERALT SL</strong>. Todos los derechos reservados.
        </div>
        <div style="display:flex;gap:20px;flex-wrap:wrap;">
          <a href="#" style="color:#9aa7ad;text-decoration:none;font-size:13px;transition:color 0.3s;">Términos y Condiciones</a>
          <a href="#" style="color:#9aa7ad;text-decoration:none;font-size:13px;transition:color 0.3s;">Política de Privacidad</a>
          <a href="#" style="color:#9aa7ad;text-decoration:none;font-size:13px;transition:color 0.3s;">Política de Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
