<?php
get_header();
?>
<main class="max-w-7xl" style="padding:48px 24px;">
  <!-- Hero Section -->
  <div style="text-align:center;max-width:700px;margin:0 auto 60px;">
    <h1>Contacta con Nosotros</h1>
    <p class="lead" style="margin-top:20px;">
      ¿Tienes dudas sobre productos o servicios? ¿Quieres agendar una prueba de manejo o servicio técnico?
      Estamos aquí para ayudarte. Escríbenos y te responderemos en menos de 24 horas.
    </p>
  </div>

  <!-- Contact Methods -->
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px;margin-bottom:60px;">
    <div class="glass" style="padding:28px;text-align:center;">
      <div style="width:56px;height:56px;border-radius:50%;background:linear-gradient(135deg,#0f766e,#0d6b61);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;box-shadow:0 10px 25px rgba(15,118,110,0.25);">
        <i class="bi bi-telephone-fill" style="font-size:24px;color:#fff;"></i>
      </div>
      <h4>Llámanos</h4>
      <p style="color:#cbd5da;margin-top:8px;font-size:15px;">Lun-Vie: 10:00 - 20:30</p>
      <a href="tel:+34934567890" style="color:#0f766e;font-weight:600;font-size:18px;text-decoration:none;margin-top:8px;display:block;">+34 934 567 890</a>
    </div>

    <div class="glass" style="padding:28px;text-align:center;">
      <div style="width:56px;height:56px;border-radius:50%;background:linear-gradient(135deg,#0f766e,#0d6b61);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;box-shadow:0 10px 25px rgba(15,118,110,0.25);">
        <i class="bi bi-envelope-fill" style="font-size:24px;color:#fff;"></i>
      </div>
      <h4>Escríbenos</h4>
      <p style="color:#cbd5da;margin-top:8px;font-size:15px;">Respuesta en 24h</p>
      <a href="mailto:info@ciclosqueralt.es" style="color:#0f766e;font-weight:600;font-size:15px;text-decoration:none;margin-top:8px;display:block;">info@ciclosqueralt.es</a>
    </div>

    <div class="glass" style="padding:28px;text-align:center;">
      <div style="width:56px;height:56px;border-radius:50%;background:linear-gradient(135deg,#25D366,#128C7E);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;box-shadow:0 10px 25px rgba(37,211,102,0.25);">
        <i class="bi bi-whatsapp" style="font-size:24px;color:#fff;"></i>
      </div>
      <h4>WhatsApp</h4>
      <p style="color:#cbd5da;margin-top:8px;font-size:15px;">Atención inmediata</p>
      <a href="https://wa.me/34934567890" style="color:#25D366;font-weight:600;font-size:18px;text-decoration:none;margin-top:8px;display:block;">Chatear ahora</a>
    </div>
  </div>

  <!-- Form & Info Grid -->
  <div style="display:grid;grid-template-columns:1fr;gap:40px;margin-bottom:60px;">
    <div style="display:grid;grid-template-columns:1fr;gap:40px;">

      <!-- Contact Form -->
      <div>
        <h2 style="margin-bottom:20px;">Envíanos un Mensaje</h2>
        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="glass" style="padding:32px;">
          <input type="hidden" name="action" value="cq_contact_form" />

          <div style="margin-bottom:20px;">
            <label style="display:block;font-weight:600;margin-bottom:8px;color:#fff;">Nombre Completo *</label>
            <input required name="nombre" type="text" placeholder="Juan Pérez" />
          </div>

          <div style="margin-bottom:20px;">
            <label style="display:block;font-weight:600;margin-bottom:8px;color:#fff;">Email *</label>
            <input required name="email" type="email" placeholder="tu@email.com" />
          </div>

          <div style="margin-bottom:20px;">
            <label style="display:block;font-weight:600;margin-bottom:8px;color:#fff;">Teléfono</label>
            <input name="telefono" type="tel" placeholder="+34 600 000 000" />
          </div>

          <div style="margin-bottom:20px;">
            <label style="display:block;font-weight:600;margin-bottom:8px;color:#fff;">Asunto</label>
            <select name="asunto" style="width:100%;padding:14px 16px;border-radius:12px;background:rgba(255,255,255,0.03);border:2px solid rgba(255,255,255,0.08);color:inherit;font-size:0.95rem;">
              <option>Consulta sobre productos</option>
              <option>Servicio técnico</option>
              <option>Agendar prueba de manejo</option>
              <option>Bikefitting</option>
              <option>Garantía y devoluciones</option>
              <option>Otro</option>
            </select>
          </div>

          <div style="margin-bottom:20px;">
            <label style="display:block;font-weight:600;margin-bottom:8px;color:#fff;">Mensaje *</label>
            <textarea required name="mensaje" placeholder="Cuéntanos cómo podemos ayudarte..." style="min-height:160px;"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
            <i class="bi bi-send-fill"></i>
            Enviar Mensaje
          </button>

          <p style="color:#9aa7ad;font-size:13px;margin-top:16px;text-align:center;">
            Al enviar este formulario aceptas nuestra política de privacidad
          </p>
        </form>
      </div>

      <!-- Visit Us Info -->
      <div>
        <h2 style="margin-bottom:20px;">Visítanos en Tienda</h2>
        <div class="glass" style="padding:32px;">

          <div style="margin-bottom:28px;">
            <div style="display:flex;align-items:start;gap:16px;">
              <div style="width:48px;height:48px;border-radius:12px;background:rgba(15,118,110,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <i class="bi bi-geo-alt-fill" style="font-size:22px;color:#0f766e;"></i>
              </div>
              <div>
                <h4 style="margin-bottom:8px;">Dirección</h4>
                <p style="color:#cbd5da;line-height:1.7;">
                  Carrer de Balmes, 156<br>
                  08008 Barcelona, España
                </p>
                <a href="https://maps.google.com/?q=Carrer+de+Balmes+156+Barcelona" target="_blank" style="color:#0f766e;font-size:14px;text-decoration:none;margin-top:8px;display:inline-block;">
                  Abrir en Google Maps <i class="bi bi-box-arrow-up-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div style="margin-bottom:28px;padding-top:28px;border-top:1px solid rgba(255,255,255,0.06);">
            <div style="display:flex;align-items:start;gap:16px;">
              <div style="width:48px;height:48px;border-radius:12px;background:rgba(15,118,110,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <i class="bi bi-clock-fill" style="font-size:22px;color:#0f766e;"></i>
              </div>
              <div>
                <h4 style="margin-bottom:8px;">Horario de Atención</h4>
                <div style="color:#cbd5da;line-height:1.9;">
                  <div><strong style="color:#fff;font-weight:600;">Lunes - Viernes:</strong> 10:00 - 14:00 y 17:00 - 20:30</div>
                  <div><strong style="color:#fff;font-weight:600;">Sábado:</strong> 10:00 - 14:00</div>
                  <div><strong style="color:#fff;font-weight:600;">Domingo:</strong> Cerrado</div>
                </div>
                <div style="margin-top:12px;padding:10px;background:rgba(239,68,68,0.1);border-radius:8px;border:1px solid rgba(239,68,68,0.2);">
                  <p style="color:#ef4444;font-size:13px;font-weight:600;">
                    <i class="bi bi-info-circle-fill"></i> Para servicio técnico se recomienda cita previa
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div style="padding-top:28px;border-top:1px solid rgba(255,255,255,0.06);">
            <h4 style="margin-bottom:12px;">Síguenos en Redes</h4>
            <div style="display:flex;gap:12px;">
              <a href="#" aria-label="Facebook" style="width:44px;height:44px;border-radius:10px;background:rgba(59,89,152,0.15);border:1px solid rgba(59,89,152,0.3);display:flex;align-items:center;justify-content:center;transition:all 0.3s;">
                <i class="bi bi-facebook" style="font-size:20px;color:#3B5998"></i>
              </a>
              <a href="#" aria-label="Instagram" style="width:44px;height:44px;border-radius:10px;background:rgba(225,48,108,0.15);border:1px solid rgba(225,48,108,0.3);display:flex;align-items:center;justify-content:center;transition:all 0.3s;">
                <i class="bi bi-instagram" style="font-size:20px;color:#E1306C"></i>
              </a>
              <a href="#" aria-label="WhatsApp" style="width:44px;height:44px;border-radius:10px;background:rgba(37,211,102,0.15);border:1px solid rgba(37,211,102,0.3);display:flex;align-items:center;justify-content:center;transition:all 0.3s;">
                <i class="bi bi-whatsapp" style="font-size:20px;color:#25D366"></i>
              </a>
              <a href="#" aria-label="YouTube" style="width:44px;height:44px;border-radius:10px;background:rgba(255,0,0,0.15);border:1px solid rgba(255,0,0,0.3);display:flex;align-items:center;justify-content:center;transition:all 0.3s;">
                <i class="bi bi-youtube" style="font-size:20px;color:#FF0000"></i>
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <!-- Map -->
  <div style="margin-bottom:60px;">
    <h2 style="margin-bottom:20px;">Ubicación</h2>
    <div style="border-radius:20px;overflow:hidden;border:1px solid rgba(255,255,255,0.08);">
      <iframe src="https://www.google.com/maps?q=Carrer+de+Balmes+156+Barcelona&output=embed" style="width:100%;height:450px;border:0"></iframe>
    </div>
  </div>

  <!-- FAQ Section -->
  <div>
    <h2 style="text-align:center;margin-bottom:40px;">Preguntas Frecuentes</h2>
    <div style="max-width:900px;margin:0 auto;display:grid;gap:16px;">

      <details class="glass" style="padding:24px;cursor:pointer;">
        <summary style="font-weight:700;font-size:16px;color:#fff;list-style:none;display:flex;align-items:center;justify-content:space-between;">
          <span>¿Hacen envíos a toda España?</span>
          <i class="bi bi-chevron-down" style="color:#0f766e;"></i>
        </summary>
        <p style="color:#cbd5da;margin-top:16px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.06);line-height:1.7;">
          Sí, realizamos envíos a toda la península. Las bicicletas se entregan montadas y ajustadas profesionalmente.
          El tiempo de entrega es de 3-5 días laborables. Los gastos de envío varían según el destino y se calculan
          en el momento de la compra.
        </p>
      </details>

      <details class="glass" style="padding:24px;cursor:pointer;">
        <summary style="font-weight:700;font-size:16px;color:#fff;list-style:none;display:flex;align-items:center;justify-content:space-between;">
          <span>¿Puedo probar la bicicleta antes de comprarla?</span>
          <i class="bi bi-chevron-down" style="color:#0f766e;"></i>
        </summary>
        <p style="color:#cbd5da;margin-top:16px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.06);line-height:1.7;">
          ¡Por supuesto! Recomendamos agendar una cita para que uno de nuestros asesores te acompañe en la prueba.
          Así podremos ajustar la bicicleta a tu medida y resolver todas tus dudas. Las pruebas suelen durar entre
          30-60 minutos.
        </p>
      </details>

      <details class="glass" style="padding:24px;cursor:pointer;">
        <summary style="font-weight:700;font-size:16px;color:#fff;list-style:none;display:flex;align-items:center;justify-content:space-between;">
          <span>¿Qué incluye el servicio de mantenimiento?</span>
          <i class="bi bi-chevron-down" style="color:#0f766e;"></i>
        </summary>
        <p style="color:#cbd5da;margin-top:16px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.06);line-height:1.7;">
          Nuestro servicio de mantenimiento básico incluye: limpieza completa, lubricación de transmisión, ajuste
          de cambios y frenos, revisión de ruedas y neumáticos, y check general de componentes. Servicios más
          específicos como suspensiones o cambio de componentes se cotizan por separado.
        </p>
      </details>

      <details class="glass" style="padding:24px;cursor:pointer;">
        <summary style="font-weight:700;font-size:16px;color:#fff;list-style:none;display:flex;align-items:center;justify-content:space-between;">
          <span>¿Ofrecen financiación?</span>
          <i class="bi bi-chevron-down" style="color:#0f766e;"></i>
        </summary>
        <p style="color:#cbd5da;margin-top:16px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.06);line-height:1.7;">
          Sí, trabajamos con entidades financieras para ofrecer planes de pago fraccionado en compras superiores
          a 500€. Puedes financiar hasta en 24 meses con condiciones muy competitivas. Consulta las opciones
          disponibles en tienda o contáctanos para más información.
        </p>
      </details>

      <details class="glass" style="padding:24px;cursor:pointer;">
        <summary style="font-weight:700;font-size:16px;color:#fff;list-style:none;display:flex;align-items:center;justify-content:space-between;">
          <span>¿Cuál es la política de garantía?</span>
          <i class="bi bi-chevron-down" style="color:#0f766e;"></i>
        </summary>
        <p style="color:#cbd5da;margin-top:16px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.06);line-height:1.7;">
          Todas nuestras bicicletas y componentes cuentan con garantía oficial del fabricante (generalmente 2 años
          en cuadros y horquillas, 1 año en componentes). Además, ofrecemos 30 días de garantía de satisfacción:
          si no estás contento con tu compra, puedes cambiarla por otro modelo o recibir un reembolso completo.
        </p>
      </details>

      <details class="glass" style="padding:24px;cursor:pointer;">
        <summary style="font-weight:700;font-size:16px;color:#fff;list-style:none;display:flex;align-items:center;justify-content:space-between;">
          <span>¿Realizan bikefitting?</span>
          <i class="bi bi-chevron-down" style="color:#0f766e;"></i>
        </summary>
        <p style="color:#cbd5da;margin-top:16px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.06);line-height:1.7;">
          Sí, contamos con servicio de bikefitting profesional. Realizamos un análisis biomecánico completo para
          optimizar tu posición en la bicicleta, mejorando rendimiento y previniendo lesiones. El servicio incluye
          ajustes de altura de sillín, retroceso, altura de manillar, longitud de potencia y ángulos de calas.
          Precio: 299€ (sesión de 2 horas aproximadamente).
        </p>
      </details>

    </div>
  </div>

</main>
<?php
get_footer();
?>