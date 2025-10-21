<?php
get_header();
?>
<!-- Hero About -->
<section style="padding:60px 0 40px;background:linear-gradient(135deg, rgba(15,118,110,0.05), rgba(239,68,68,0.03));">
  <div class="max-w-7xl">
    <div style="max-width:800px;margin:0 auto;text-align:center;">
      <h1 style="font-size:clamp(28px,4vw,42px);font-weight:800;margin-bottom:16px;">Sobre <span class="gradient-text">Ciclos Queralt</span></h1>
      <p class="lead" style="font-size:18px;">Más de 15 años impulsando la pasión por el ciclismo en Perú. Somos más que una tienda, somos una comunidad de ciclistas.</p>
    </div>
  </div>
</section>

<main class="max-w-7xl" style="padding:60px 24px;">

  <!-- Historia -->
  <section style="margin-bottom:60px;">
    <div style="display:grid;grid-template-columns:1fr;gap:32px;align-items:center;">
      <div style="grid-column:1;">
        <h2 style="font-size:28px;font-weight:800;margin-bottom:16px;">Nuestra Historia</h2>
        <p style="color:#cbd5da;margin-bottom:14px;line-height:1.8;">
          CICLOS QUERALT SL nació en 2008 con una visión clara: ofrecer bicicletas de alta calidad y servicio técnico especializado a todos los ciclistas del Perú. Lo que comenzó como un pequeño taller se ha convertido en una de las tiendas de referencia en Lima.
        </p>
        <p style="color:#cbd5da;margin-bottom:14px;line-height:1.8;">
          Nuestro compromiso siempre ha sido el mismo: ayudar a cada ciclista a encontrar la bicicleta perfecta y mantenerla en las mejores condiciones. Ya sea que estés comenzando tu aventura en el ciclismo o seas un profesional buscando optimizar tu equipo, tenemos la experiencia y pasión para ayudarte.
        </p>
        <div style="margin-top:24px;">
          <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" class="btn btn-primary">Explora nuestros productos</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Misión, Visión, Valores -->
  <section style="margin-bottom:60px;">
    <div class="grid-3" style="gap:24px;">
      <div class="glass" style="padding:28px;">
        <div style="width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,rgba(15,118,110,0.2),rgba(239,68,68,0.1));display:flex;align-items:center;justify-content:center;margin-bottom:16px;font-size:28px;">
          <i class="bi bi-bullseye"></i>
        </div>
        <h3 style="font-weight:800;font-size:20px;margin-bottom:12px;">Nuestra Misión</h3>
        <p style="color:#cbd5da;line-height:1.7;">
          Proveer equipamiento de calidad, servicio técnico experto y asesoría personalizada que permita a cada ciclista disfrutar al máximo de su pasión por las dos ruedas.
        </p>
      </div>

      <div class="glass" style="padding:28px;">
        <div style="width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,rgba(15,118,110,0.2),rgba(239,68,68,0.1));display:flex;align-items:center;justify-content:center;margin-bottom:16px;font-size:28px;">
          <i class="bi bi-eye-fill"></i>
        </div>
        <h3 style="font-weight:800;font-size:20px;margin-bottom:12px;">Nuestra Visión</h3>
        <p style="color:#cbd5da;line-height:1.7;">
          Ser la tienda de bicicletas más confiable y respetada del país, reconocida por nuestra excelencia en servicio y nuestra contribución al crecimiento del ciclismo en Perú.
        </p>
      </div>

      <div class="glass" style="padding:28px;">
        <div style="width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,rgba(15,118,110,0.2),rgba(239,68,68,0.1));display:flex;align-items:center;justify-content:center;margin-bottom:16px;font-size:28px;">
          <i class="bi bi-heart-fill"></i>
        </div>
        <h3 style="font-weight:800;font-size:20px;margin-bottom:12px;">Nuestros Valores</h3>
        <ul style="color:#cbd5da;line-height:1.7;">
          <li>Pasión por el ciclismo</li>
          <li>Excelencia en el servicio</li>
          <li>Integridad y honestidad</li>
          <li>Compromiso con la comunidad</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Nuestro Equipo -->
  <section style="margin-bottom:60px;">
    <h2 style="font-size:28px;font-weight:800;margin-bottom:12px;text-align:center;">Nuestro Equipo</h2>
    <p class="lead" style="text-align:center;margin-bottom:32px;">Ciclistas apasionados y expertos técnicos a tu servicio</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:24px;">
      <div class="glass" style="text-align:center;padding:24px;">
        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=400" alt="María López" style="width:120px;height:120px;border-radius:50%;object-fit:cover;margin:0 auto 16px;border:4px solid rgba(15,118,110,0.3);"/>
        <h3 style="font-weight:800;font-size:18px;margin-bottom:6px;">María López</h3>
        <div style="color:#0f766e;font-size:14px;font-weight:600;margin-bottom:12px;">Jefa de Taller</div>
        <p style="color:#9aa7ad;font-size:14px;line-height:1.6;">15 años de experiencia en mecánica de bicicletas. Especialista en suspensiones y transmisiones de alta gama.</p>
      </div>

      <div class="glass" style="text-align:center;padding:24px;">
        <img src="https://images.unsplash.com/photo-1545996124-1f821d5f5f83?q=80&w=400" alt="Carlos Ruiz" style="width:120px;height:120px;border-radius:50%;object-fit:cover;margin:0 auto 16px;border:4px solid rgba(239,68,68,0.3);"/>
        <h3 style="font-weight:800;font-size:18px;margin-bottom:6px;">Carlos Ruiz</h3>
        <div style="color:#ef4444;font-size:14px;font-weight:600;margin-bottom:12px;">Gerente de Ventas</div>
        <p style="color:#9aa7ad;font-size:14px;line-height:1.6;">Ciclista competitivo con más de 10 años asesorando a clientes. Conoce cada modelo al detalle.</p>
      </div>

      <div class="glass" style="text-align:center;padding:24px;">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400" alt="Jorge Vega" style="width:120px;height:120px;border-radius:50%;object-fit:cover;margin:0 auto 16px;border:4px solid rgba(15,118,110,0.3);"/>
        <h3 style="font-weight:800;font-size:18px;margin-bottom:6px;">Jorge Vega</h3>
        <div style="color:#0f766e;font-size:14px;font-weight:600;margin-bottom:12px;">Especialista en MTB</div>
        <p style="color:#9aa7ad;font-size:14px;line-height:1.6;">Guía de montaña certificado. Experto en configuración de geometría y ajustes personalizados.</p>
      </div>

      <div class="glass" style="text-align:center;padding:24px;">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=400" alt="Ana Torres" style="width:120px;height:120px;border-radius:50%;object-fit:cover;margin:0 auto 16px;border:4px solid rgba(239,68,68,0.3);"/>
        <h3 style="font-weight:800;font-size:18px;margin-bottom:6px;">Ana Torres</h3>
        <div style="color:#ef4444;font-size:14px;font-weight:600;margin-bottom:12px;">Atención al Cliente</div>
        <p style="color:#9aa7ad;font-size:14px;line-height:1.6;">Siempre lista para ayudarte a encontrar la bici perfecta. Organiza nuestras rodadas grupales.</p>
      </div>
    </div>
  </section>

  <!-- Por qué elegirnos -->
  <section style="margin-bottom:60px;background:linear-gradient(135deg, rgba(15,118,110,0.05), rgba(239,68,68,0.03));padding:50px 32px;border-radius:20px;">
    <h2 style="font-size:28px;font-weight:800;margin-bottom:32px;text-align:center;">¿Por qué elegirnos?</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:28px;">
      <div style="display:flex;gap:16px;">
        <div style="flex-shrink:0;">
          <div style="width:48px;height:48px;border-radius:10px;background:linear-gradient(135deg,#0f766e,#ef4444);display:flex;align-items:center;justify-content:center;">
            <i class="bi bi-award-fill" style="font-size:24px;"></i>
          </div>
        </div>
        <div>
          <h3 style="font-weight:700;font-size:16px;margin-bottom:6px;">Marcas certificadas</h3>
          <p style="color:#cbd5da;font-size:14px;line-height:1.6;">Representantes oficiales de las mejores marcas internacionales con garantía completa.</p>
        </div>
      </div>

      <div style="display:flex;gap:16px;">
        <div style="flex-shrink:0;">
          <div style="width:48px;height:48px;border-radius:10px;background:linear-gradient(135deg,#0f766e,#ef4444);display:flex;align-items:center;justify-content:center;">
            <i class="bi bi-tools" style="font-size:24px;"></i>
          </div>
        </div>
        <div>
          <h3 style="font-weight:700;font-size:16px;margin-bottom:6px;">Taller especializado</h3>
          <p style="color:#cbd5da;font-size:14px;line-height:1.6;">Equipo con certificación internacional y herramientas profesionales.</p>
        </div>
      </div>

      <div style="display:flex;gap:16px;">
        <div style="flex-shrink:0;">
          <div style="width:48px;height:48px;border-radius:10px;background:linear-gradient(135deg,#0f766e,#ef4444);display:flex;align-items:center;justify-content:center;">
            <i class="bi bi-people-fill" style="font-size:24px;"></i>
          </div>
        </div>
        <div>
          <h3 style="font-weight:700;font-size:16px;margin-bottom:6px;">Comunidad activa</h3>
          <p style="color:#cbd5da;font-size:14px;line-height:1.6;">Rodadas grupales semanales y eventos para conectar con otros ciclistas.</p>
        </div>
      </div>

      <div style="display:flex;gap:16px;">
        <div style="flex-shrink:0;">
          <div style="width:48px;height:48px;border-radius:10px;background:linear-gradient(135deg,#0f766e,#ef4444);display:flex;align-items:center;justify-content:center;">
            <i class="bi bi-clock-fill" style="font-size:24px;"></i>
          </div>
        </div>
        <div>
          <h3 style="font-weight:700;font-size:16px;margin-bottom:6px;">Atención personalizada</h3>
          <p style="color:#cbd5da;font-size:14px;line-height:1.6;">Tiempo dedicado a entender tus necesidades y encontrar la solución perfecta.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section style="text-align:center;">
    <h2 style="font-size:clamp(24px,3vw,32px);margin-bottom:16px;">¿Quieres conocer más?</h2>
    <p class="lead" style="margin-bottom:24px;max-width:600px;margin-left:auto;margin-right:auto;">Visítanos en nuestra tienda o contáctanos. Estaremos encantados de ayudarte.</p>
    <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url(add_query_arg('view','contact', home_url('/'))); ?>" class="btn btn-primary"><i class="bi bi-geo-alt-fill"></i> Visítanos</a>
      <a href="<?php echo esc_url(add_query_arg('view','shop', home_url('/'))); ?>" class="btn btn-ghost"><i class="bi bi-shop"></i> Ver productos</a>
    </div>
  </section>

</main>
<?php
get_footer();
?>