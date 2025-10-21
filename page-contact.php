<?php
get_header();
?>
<main class="max-w-7xl" style="padding:36px;">
  <div style="display:grid;grid-template-columns:1fr;gap:18px;">
    <h1 style="font-size:28px;font-weight:800;">Contacto</h1>
    <p style="color:#9aa7ad">¿Tienes dudas o quieres agendar una prueba? Escríbenos y te responderemos pronto.</p>

    <div style="display:grid;grid-template-columns:1fr;gap:18px;">
      <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="glass" style="padding:18px;max-width:680px;">
        <input type="hidden" name="action" value="cq_contact_form" />
        <label>Nombre</label>
        <input required name="nombre" type="text" />
        <label style="margin-top:10px;display:block">Teléfono / Email</label>
        <input required name="contacto" type="text" />
        <label style="margin-top:10px;display:block">Mensaje</label>
        <textarea required name="mensaje"></textarea>
        <button type="submit" style="margin-top:12px;width:100%;padding:12px;border-radius:10px;background:#0f766e;color:#000;font-weight:700">Enviar</button>
      </form>

      <div style="padding:18px;">
        <h3 style="font-weight:800">Visítanos</h3>
        <p style="color:#9aa7ad;margin-top:8px">Calle Ejemplo 123, Ciudad</p>
        <h3 style="font-weight:800;margin-top:12px">Teléfono</h3>
        <p style="color:#9aa7ad;margin-top:8px">(01) 234-5678</p>

        <h3 style="font-weight:800;margin-top:12px">Horario</h3>
        <p style="color:#9aa7ad;margin-top:8px">Lun-Vie 9:00 - 19:00 · Sáb 9:00 - 14:00</p>

        <div style="margin-top:16px;">
          <h4 style="font-weight:700">Síguenos</h4>
          <div style="display:flex;gap:8px;margin-top:8px;">
            <a href="#" aria-label="Facebook"><i class="bi bi-facebook" style="font-size:18px;color:#9aa7ad"></i></a>
            <a href="#" aria-label="Instagram"><i class="bi bi-instagram" style="font-size:18px;color:#9aa7ad"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="bi bi-whatsapp" style="font-size:18px;color:#9aa7ad"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div style="margin-top:12px;">
      <h3 style="font-weight:800">Dónde estamos</h3>
      <div style="margin-top:8px;border-radius:10px;overflow:hidden;">
        <!-- Map placeholder: replace with real embed if needed -->
        <iframe src="https://www.google.com/maps?q=Lima&output=embed" style="width:100%;height:300px;border:0"></iframe>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
?>