<?php
get_header();
?>
<main class="max-w-7xl" style="padding:48px 24px;">
  <!-- Hero Section -->
  <div style="text-align:center;max-width:800px;margin:0 auto 60px;">
    <h1>Sobre Nosotros</h1>
    <p class="lead" style="margin-top:20px;">
      CICLOS QUERALT SL es tu tienda especializada en bicicletas de montaña, carretera y gravel.
      Desde 2010, combinamos pasión por el ciclismo con experiencia técnica para ofrecer el mejor
      servicio a nuestra comunidad de ciclistas.
    </p>
  </div>

  <!-- Historia -->
  <section style="margin-bottom:80px;">
    <div class="glass" style="padding:40px;">
      <h2>Nuestra Historia</h2>
      <div style="color:#cbd5da;line-height:1.8;margin-top:16px;">
        <p>
          Fundada en 2010 en Barcelona, CICLOS QUERALT nació de la pasión de un grupo de ciclistas
          que soñaban con crear un espacio donde la calidad, el servicio personalizado y el amor por
          el ciclismo fueran lo más importante.
        </p>
        <p style="margin-top:16px;">
          Empezamos como un pequeño taller de reparaciones y con el tiempo hemos crecido hasta
          convertirnos en una de las tiendas de referencia en Barcelona para ciclistas exigentes.
          Hoy contamos con un equipo de 8 profesionales especializados y ofrecemos desde bicicletas
          de alta gama hasta un servicio técnico completo.
        </p>
        <p style="margin-top:16px;">
          Nuestro compromiso sigue siendo el mismo: ayudar a cada ciclista a encontrar su bicicleta
          perfecta y mantenerla en las mejores condiciones para que disfrute cada kilómetro.
        </p>
      </div>
    </div>
  </section>

  <!-- Misión y Visión -->
  <section style="margin-bottom:80px;">
    <h2 style="text-align:center;margin-bottom:40px;">Misión y Visión</h2>
    <div style="display:grid;grid-template-columns:1fr;gap:24px;">
      <div class="glass" style="padding:32px;">
        <div style="font-size:32px;margin-bottom:16px;">🎯</div>
        <h3>Nuestra Misión</h3>
        <p style="color:#cbd5da;margin-top:12px;line-height:1.7;">
          Proveer equipamiento de calidad y servicios profesionales que permitan a cada ciclista,
          desde principiantes hasta profesionales, disfrutar al máximo de sus rutas. Nos comprometemos
          a ofrecer asesoría experta y personalizada para que tomes las mejores decisiones.
        </p>
      </div>
      <div class="glass" style="padding:32px;">
        <div style="font-size:32px;margin-bottom:16px;">🚴</div>
        <h3>Nuestra Visión</h3>
        <p style="color:#cbd5da;margin-top:12px;line-height:1.7;">
          Ser la tienda de ciclismo de referencia en Barcelona, reconocida por nuestra excelencia
          en servicio técnico, la calidad de nuestros productos y nuestro compromiso con la comunidad
          ciclista. Queremos inspirar a más personas a descubrir la libertad y la pasión del ciclismo.
        </p>
      </div>
    </div>
  </section>

  <!-- Equipo -->
  <section style="margin-bottom:80px;">
    <h2 style="text-align:center;margin-bottom:40px;">Nuestro Equipo</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:24px;">
      <?php
      // Array de miembros del equipo
      $team_members = array(
        array('name' => 'María López', 'role' => 'Jefa de Taller', 'bio' => '15 años de experiencia en mecánica de bicicletas. Especialista en suspensiones y transmisiones de alta gama.', 'option' => 'cq_about_team_1', 'default' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=400'),
        array('name' => 'Carlos Ruiz', 'role' => 'Director Comercial', 'bio' => 'Ciclista profesional retirado con 10 años en el sector retail. Experto en asesoría de producto y bikefitting.', 'option' => 'cq_about_team_2', 'default' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=400'),
        array('name' => 'Javier Martínez', 'role' => 'Técnico de Suspensiones', 'bio' => 'Certificado por FOX y RockShox. Especializado en puesta a punto de suspensiones para competición y enduro.', 'option' => 'cq_about_team_3', 'default' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400'),
        array('name' => 'Ana García', 'role' => 'Asesora de Ventas', 'bio' => 'Apasionada del gravel y cicloturismo. Ayuda a encontrar la bicicleta perfecta para cada tipo de ciclista.', 'option' => 'cq_about_team_4', 'default' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=400'),
        array('name' => 'Roberto Sánchez', 'role' => 'Técnico de Montaje', 'bio' => '8 años de experiencia en montaje y mantenimiento. Especialista en sistemas electrónicos de cambio.', 'option' => 'cq_about_team_5', 'default' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=400'),
        array('name' => 'Laura Fernández', 'role' => 'Gerente de Tienda', 'bio' => 'MBA y ciclista amateur. Coordina operaciones y garantiza la mejor experiencia para nuestros clientes.', 'option' => 'cq_about_team_6', 'default' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=400'),
      );

      foreach ($team_members as $member):
        // Get image from WordPress options or use default
        $image_id = get_option($member['option'], '');
        $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'medium') : $member['default'];
      ?>
      <div class="team-card">
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($member['name']); ?>"/>
        <h4><?php echo esc_html($member['name']); ?></h4>
        <div style="color:#0f766e;font-size:14px;font-weight:600;margin-bottom:8px;">
          <?php echo esc_html($member['role']); ?>
        </div>
        <p style="color:#9aa7ad;font-size:14px;line-height:1.6;">
          <?php echo esc_html($member['bio']); ?>
        </p>
      </div>
      <?php endforeach; ?>

    </div>
  </section>

  <!-- Valores -->
  <section style="margin-bottom:80px;">
    <h2 style="text-align:center;margin-bottom:40px;">Nuestros Valores</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;">

      <div class="glass" style="padding:28px;">
        <div style="font-size:36px;margin-bottom:12px;">⭐</div>
        <h4>Calidad y Confianza</h4>
        <p style="color:#cbd5da;margin-top:10px;line-height:1.6;">
          Solo trabajamos con marcas certificadas y componentes originales. Cada bicicleta que sale de
          nuestra tienda cuenta con garantía oficial y nuestro respaldo técnico.
        </p>
      </div>

      <div class="glass" style="padding:28px;">
        <div style="font-size:36px;margin-bottom:12px;">🎓</div>
        <h4>Asesoría Personalizada</h4>
        <p style="color:#cbd5da;margin-top:10px;line-height:1.6;">
          Cada ciclista es único. Nos tomamos el tiempo de entender tus necesidades, nivel y objetivos
          para recomendarte el equipamiento que mejor se adapte a ti.
        </p>
      </div>

      <div class="glass" style="padding:28px;">
        <div style="font-size:36px;margin-bottom:12px;">🔧</div>
        <h4>Servicio Profesional</h4>
        <p style="color:#cbd5da;margin-top:10px;line-height:1.6;">
          Nuestro taller está equipado con las mejores herramientas y nuestros técnicos reciben
          formación continua de las principales marcas del sector.
        </p>
      </div>

      <div class="glass" style="padding:28px;">
        <div style="font-size:36px;margin-bottom:12px;">🌱</div>
        <h4>Compromiso Ambiental</h4>
        <p style="color:#cbd5da;margin-top:10px;line-height:1.6;">
          Promovemos el ciclismo como medio de transporte sostenible. Reciclamos materiales y trabajamos
          con proveedores comprometidos con el medio ambiente.
        </p>
      </div>

      <div class="glass" style="padding:28px;">
        <div style="font-size:36px;margin-bottom:12px;">👥</div>
        <h4>Comunidad Ciclista</h4>
        <p style="color:#cbd5da;margin-top:10px;line-height:1.6;">
          Organizamos salidas grupales, talleres de mantenimiento y eventos para fortalecer la comunidad
          ciclista local. Aquí encontrarás más que una tienda, encontrarás amigos.
        </p>
      </div>

      <div class="glass" style="padding:28px;">
        <div style="font-size:36px;margin-bottom:12px;">💯</div>
        <h4>Pasión por el Ciclismo</h4>
        <p style="color:#cbd5da;margin-top:10px;line-height:1.6;">
          Somos ciclistas atendiendo a ciclistas. Compartimos tu pasión y entendemos perfectamente
          lo que buscas porque nosotros también vivimos sobre dos ruedas.
        </p>
      </div>

    </div>
  </section>

  <!-- Certificaciones -->
  <section style="margin-bottom:60px;">
    <div class="glass" style="padding:40px;text-align:center;">
      <h3>Certificaciones y Colaboraciones</h3>
      <p style="color:#cbd5da;margin-top:16px;line-height:1.7;max-width:700px;margin-left:auto;margin-right:auto;">
        Somos distribuidores oficiales de las principales marcas del sector y nuestros técnicos
        están certificados por: <strong style="color:#0f766e;">Shimano</strong>,
        <strong style="color:#0f766e;">SRAM</strong>, <strong style="color:#0f766e;">FOX</strong>,
        <strong style="color:#0f766e;">RockShox</strong>, <strong style="color:#0f766e;">DT Swiss</strong>
        y <strong style="color:#0f766e;">Continental</strong>.
      </p>
      <div style="margin-top:24px;">
        <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="btn btn-primary">
          Visítanos en Tienda
        </a>
      </div>
    </div>
  </section>

</main>
<?php
get_footer();
?>