<?php
get_header();
?>
<main class="max-w-7xl" style="padding:48px 24px;">
  <!-- Hero Section -->
  <div style="text-align:center;margin-bottom:48px;">
    <h1 style="font-size:42px;font-weight:800;line-height:1.2;">
      <span style="color:#0f766e">Contáctanos</span>
    </h1>
    <p style="color:#9aa7ad;margin-top:16px;font-size:18px;max-width:720px;margin-left:auto;margin-right:auto;">
      ¿Tienes dudas sobre nuestros productos o servicios? ¿Quieres agendar una prueba de manejo o una revisión técnica?
      Estamos aquí para ayudarte.
    </p>
  </div>

  <!-- Contact Grid -->
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:32px;margin-bottom:48px;">
    <!-- Contact Form -->
    <div>
      <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="glass" style="padding:32px;border-radius:16px;">
        <input type="hidden" name="action" value="cq_contact_form" />

        <h3 style="font-size:24px;font-weight:800;margin-bottom:20px;">Envíanos un mensaje</h3>

        <div style="margin-bottom:20px;">
          <label style="display:block;font-weight:600;margin-bottom:8px;color:#cbd5da;">
            <i class="bi bi-person" style="margin-right:6px;color:#0f766e;"></i>Nombre completo
          </label>
          <input required name="nombre" type="text"
                 style="width:100%;padding:12px 16px;border-radius:10px;background:rgba(255,255,255,0.05);border:1px solid rgba(15,118,110,0.2);color:white;font-size:15px;"
                 placeholder="Juan Pérez"/>
        </div>

        <div style="margin-bottom:20px;">
          <label style="display:block;font-weight:600;margin-bottom:8px;color:#cbd5da;">
            <i class="bi bi-envelope" style="margin-right:6px;color:#0f766e;"></i>Email o Teléfono
          </label>
          <input required name="contacto" type="text"
                 style="width:100%;padding:12px 16px;border-radius:10px;background:rgba(255,255,255,0.05);border:1px solid rgba(15,118,110,0.2);color:white;font-size:15px;"
                 placeholder="correo@ejemplo.com o +51 999 999 999"/>
        </div>

        <div style="margin-bottom:20px;">
          <label style="display:block;font-weight:600;margin-bottom:8px;color:#cbd5da;">
            <i class="bi bi-chat-dots" style="margin-right:6px;color:#0f766e;"></i>Mensaje
          </label>
          <textarea required name="mensaje" rows="5"
                    style="width:100%;padding:12px 16px;border-radius:10px;background:rgba(255,255,255,0.05);border:1px solid rgba(15,118,110,0.2);color:white;font-size:15px;resize:vertical;"
                    placeholder="Cuéntanos cómo podemos ayudarte..."></textarea>
        </div>

        <button type="submit"
                style="width:100%;padding:14px;border-radius:10px;background:linear-gradient(135deg,#0f766e,#14b8a6);color:white;font-weight:700;font-size:16px;border:none;cursor:pointer;transition:transform 0.2s;">
          <i class="bi bi-send" style="margin-right:6px;"></i>Enviar Mensaje
        </button>
      </form>
    </div>

    <!-- Contact Information -->
    <div>
      <!-- Location -->
      <div class="glass" style="padding:28px;border-radius:16px;margin-bottom:24px;">
        <div style="display:flex;align-items:start;gap:16px;">
          <div style="width:48px;height:48px;background:linear-gradient(135deg,#0f766e,#14b8a6);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="bi bi-geo-alt-fill" style="font-size:24px;color:white;"></i>
          </div>
          <div>
            <h3 style="font-weight:800;font-size:18px;margin-bottom:8px;">Nuestra Tienda</h3>
            <p style="color:#9aa7ad;line-height:1.6;">
              Av. Principal 456, Local 12<br/>
              San Isidro, Lima, Perú<br/>
              Ref: Frente al Parque Central
            </p>
          </div>
        </div>
      </div>

      <!-- Phone -->
      <div class="glass" style="padding:28px;border-radius:16px;margin-bottom:24px;">
        <div style="display:flex;align-items:start;gap:16px;">
          <div style="width:48px;height:48px;background:linear-gradient(135deg,#0f766e,#14b8a6);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="bi bi-telephone-fill" style="font-size:24px;color:white;"></i>
          </div>
          <div>
            <h3 style="font-weight:800;font-size:18px;margin-bottom:8px;">Teléfonos</h3>
            <p style="color:#9aa7ad;line-height:1.8;">
              <strong style="color:#0f766e;">Ventas:</strong> (01) 234-5678<br/>
              <strong style="color:#0f766e;">Taller:</strong> (01) 234-5679<br/>
              <strong style="color:#0f766e;">WhatsApp:</strong> +51 999 888 777
            </p>
          </div>
        </div>
      </div>

      <!-- Schedule -->
      <div class="glass" style="padding:28px;border-radius:16px;margin-bottom:24px;">
        <div style="display:flex;align-items:start;gap:16px;">
          <div style="width:48px;height:48px;background:linear-gradient(135deg,#0f766e,#14b8a6);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="bi bi-clock-fill" style="font-size:24px;color:white;"></i>
          </div>
          <div>
            <h3 style="font-weight:800;font-size:18px;margin-bottom:8px;">Horario de Atención</h3>
            <p style="color:#9aa7ad;line-height:1.8;">
              <strong style="color:#cbd5da;">Lunes a Viernes:</strong><br/>9:00 AM - 7:00 PM<br/>
              <strong style="color:#cbd5da;">Sábados:</strong><br/>9:00 AM - 2:00 PM<br/>
              <strong style="color:#cbd5da;">Domingos:</strong> Cerrado
            </p>
          </div>
        </div>
      </div>

      <!-- Social Media -->
      <div class="glass" style="padding:28px;border-radius:16px;">
        <h3 style="font-weight:800;font-size:18px;margin-bottom:16px;">Síguenos en Redes</h3>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:12px;">
          <a href="#" aria-label="Facebook"
             style="display:flex;flex-direction:column;align-items:center;padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;transition:all 0.3s;border:1px solid rgba(15,118,110,0.1);">
            <i class="bi bi-facebook" style="font-size:28px;color:#0f766e;margin-bottom:6px;"></i>
            <span style="font-size:12px;color:#9aa7ad;">Facebook</span>
          </a>
          <a href="#" aria-label="Instagram"
             style="display:flex;flex-direction:column;align-items:center;padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;transition:all 0.3s;border:1px solid rgba(15,118,110,0.1);">
            <i class="bi bi-instagram" style="font-size:28px;color:#0f766e;margin-bottom:6px;"></i>
            <span style="font-size:12px;color:#9aa7ad;">Instagram</span>
          </a>
          <a href="#" aria-label="WhatsApp"
             style="display:flex;flex-direction:column;align-items:center;padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;transition:all 0.3s;border:1px solid rgba(15,118,110,0.1);">
            <i class="bi bi-whatsapp" style="font-size:28px;color:#0f766e;margin-bottom:6px;"></i>
            <span style="font-size:12px;color:#9aa7ad;">WhatsApp</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Map Section -->
  <div style="background:rgba(15,118,110,0.05);padding:32px;border-radius:20px;">
    <h2 style="font-size:28px;font-weight:800;margin-bottom:16px;text-align:center;">
      <i class="bi bi-map" style="color:#0f766e;margin-right:8px;"></i>Encuéntranos
    </h2>
    <p style="color:#9aa7ad;text-align:center;margin-bottom:24px;">
      Estamos ubicados en una zona de fácil acceso, con estacionamiento disponible
    </p>
    <div style="border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.3);">
      <iframe src="https://www.google.com/maps?q=Lima,Peru&output=embed"
              style="width:100%;height:400px;border:0;display:block;"></iframe>
    </div>
  </div>

  <!-- CTA Section -->
  <div style="text-align:center;margin-top:48px;padding:40px 24px;background:linear-gradient(135deg,rgba(15,118,110,0.1),rgba(20,184,166,0.05));border-radius:20px;">
    <i class="bi bi-bicycle" style="font-size:48px;color:#0f766e;"></i>
    <h3 style="font-size:24px;font-weight:800;margin-top:16px;margin-bottom:12px;">
      ¿Listo para tu próxima aventura?
    </h3>
    <p style="color:#9aa7ad;margin-bottom:24px;">
      Visítanos en nuestra tienda y descubre la bicicleta perfecta para ti
    </p>
    <a href="<?php echo esc_url(add_query_arg('view','shop',home_url('/'))); ?>"
       style="display:inline-block;padding:14px 32px;background:linear-gradient(135deg,#0f766e,#14b8a6);color:white;font-weight:700;border-radius:10px;text-decoration:none;">
      <i class="bi bi-shop" style="margin-right:6px;"></i>Explorar Productos
    </a>
  </div>
</main>
<?php
get_footer();
?>