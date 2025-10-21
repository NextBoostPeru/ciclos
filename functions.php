<?php
// functions.php - Ciclos Queralt (pure CSS version)

if (!function_exists('ciclos_queralt_setup')) {
  function ciclos_queralt_setup() {
    register_nav_menus([
      'primary' => __('Menú Principal', 'ciclos-queralt'),
    ]);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
  }
}
add_action('after_setup_theme', 'ciclos_queralt_setup');

function cq_enqueue_scripts() {
  // Bootstrap Icons (kept via CDN for icons)
  wp_enqueue_style('bootstrap-icons','https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css', array(), null);

  // Theme CSS (local)
  wp_enqueue_style('ciclos-style', get_template_directory_uri() . '/assets/css/styles.css', array(), wp_get_theme()->get('Version'));

  // JS propio
  wp_enqueue_script('ciclos-main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'cq_enqueue_scripts');



/**
 * On theme activation, create demo pages (Shop, Contact, Nosotros) and assign templates if they don't exist.
 */
function cq_create_demo_pages_on_activation() {
    // avoid running in non-WP environments
    if (!function_exists('wp_insert_post')) return;

    $pages = array(
        array('title' => 'Tienda', 'slug' => 'tienda', 'template' => 'page-shop.php'),
        array('title' => 'Contacto', 'slug' => 'contacto', 'template' => 'page-contact.php'),
        array('title' => 'Nosotros', 'slug' => 'nosotros', 'template' => 'page-about.php'),
    );

    foreach ($pages as $p) {
        // check if page exists by slug
        $existing = get_page_by_path($p['slug']);
        if ($existing) {
            // ensure template is set
            update_post_meta($existing->ID, '_wp_page_template', $p['template']);
            continue;
        }
        // create the page
        $post_id = wp_insert_post(array(
            'post_title' => wp_strip_all_tags($p['title']),
            'post_name' => $p['slug'],
            'post_content' => $p['title'] . ' (Página creada automáticamente)',
            'post_status' => 'publish',
            'post_type' => 'page',
        ));
        if (!is_wp_error($post_id) && $post_id) {
            update_post_meta($post_id, '_wp_page_template', $p['template']);
        }
    }

    // flush rewrite to ensure pages show
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'cq_create_demo_pages_on_activation');



/* Simple handlers for contact form and newsletter (demo).
   They redirect back with a query param and send email to admin_email.
*/
function cq_handle_contact_form() {
  if (!isset($_POST['nombre'])) wp_redirect( wp_get_referer() ?: home_url('/') );
  $name = sanitize_text_field($_POST['nombre']);
  $contact = sanitize_text_field($_POST['contacto']);
  $message = sanitize_textarea_field($_POST['mensaje']);
  $to = get_option('admin_email');
  $subject = 'Contacto desde web: ' . $name;
  $body = "Nombre: $name
Contacto: $contact

Mensaje:
$message";
  wp_mail($to, $subject, $body);
  wp_redirect( add_query_arg('cq_sent','1', wp_get_referer() ?: home_url('/') ) );
  exit;
}
add_action('admin_post_nopriv_cq_contact_form','cq_handle_contact_form');
add_action('admin_post_cq_contact_form','cq_handle_contact_form');

function cq_handle_newsletter(){
  if(!isset($_POST['email'])) wp_redirect( wp_get_referer() ?: home_url('/') );
  $email = sanitize_email($_POST['email']);
  // demo: send notification to admin. In production save to DB or integrate with provider.
  $to = get_option('admin_email');
  $subject = 'Nuevo suscriptor';
  $body = 'Email: ' . $email;
  wp_mail($to, $subject, $body);
  wp_redirect( add_query_arg('cq_news','1', wp_get_referer() ?: home_url('/') ) );
  exit;
}
add_action('admin_post_nopriv_cq_newsletter','cq_handle_newsletter');
add_action('admin_post_cq_newsletter','cq_handle_newsletter');


/* ========================================
   CUSTOM POST TYPE: PRODUCTOS
   ======================================== */

function cq_register_product_post_type() {
    $labels = array(
        'name'                  => 'Productos',
        'singular_name'         => 'Producto',
        'menu_name'             => 'Productos',
        'add_new'               => 'Añadir Producto',
        'add_new_item'          => 'Añadir Nuevo Producto',
        'edit_item'             => 'Editar Producto',
        'new_item'              => 'Nuevo Producto',
        'view_item'             => 'Ver Producto',
        'search_items'          => 'Buscar Productos',
        'not_found'             => 'No se encontraron productos',
        'not_found_in_trash'    => 'No hay productos en la papelera',
        'all_items'             => 'Todos los Productos',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_icon'             => 'dashicons-cart',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'               => array('slug' => 'producto'),
        'menu_position'         => 5,
    );

    register_post_type('cq_product', $args);

    // Registrar taxonomía de categorías de productos
    $cat_labels = array(
        'name'              => 'Categorías de Productos',
        'singular_name'     => 'Categoría',
        'search_items'      => 'Buscar Categorías',
        'all_items'         => 'Todas las Categorías',
        'parent_item'       => 'Categoría Padre',
        'parent_item_colon' => 'Categoría Padre:',
        'edit_item'         => 'Editar Categoría',
        'update_item'       => 'Actualizar Categoría',
        'add_new_item'      => 'Añadir Nueva Categoría',
        'new_item_name'     => 'Nombre de Nueva Categoría',
        'menu_name'         => 'Categorías',
    );

    register_taxonomy(
        'cq_product_category',
        'cq_product',
        array(
            'hierarchical'      => true,
            'labels'            => $cat_labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'categoria-producto'),
        )
    );
}
add_action('init', 'cq_register_product_post_type');

// Crear categorías por defecto al activar el tema
function cq_create_default_product_categories() {
    // Verificar si ya existen categorías
    $existing = get_terms(array('taxonomy' => 'cq_product_category', 'hide_empty' => false));
    if (!empty($existing)) return;

    $categories = array('Montaña', 'Carretera', 'Gravel', 'Urbana', 'Accesorios');
    foreach ($categories as $cat) {
        if (!term_exists($cat, 'cq_product_category')) {
            wp_insert_term($cat, 'cq_product_category');
        }
    }
}
add_action('after_switch_theme', 'cq_create_default_product_categories');


/* ========================================
   META BOXES PARA PRODUCTOS
   ======================================== */

function cq_add_product_meta_boxes() {
    add_meta_box(
        'cq_product_details',
        'Detalles del Producto',
        'cq_product_details_callback',
        'cq_product',
        'normal',
        'high'
    );

    add_meta_box(
        'cq_product_specs',
        'Especificaciones Técnicas',
        'cq_product_specs_callback',
        'cq_product',
        'normal',
        'high'
    );

    add_meta_box(
        'cq_product_gallery',
        'Galería de Imágenes',
        'cq_product_gallery_callback',
        'cq_product',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'cq_add_product_meta_boxes');

// Callback para detalles del producto
function cq_product_details_callback($post) {
    wp_nonce_field('cq_save_product_details', 'cq_product_details_nonce');

    $price = get_post_meta($post->ID, '_cq_price', true);
    $stock_status = get_post_meta($post->ID, '_cq_stock_status', true);
    $stock_meta = get_post_meta($post->ID, '_cq_stock_meta', true);
    $description = get_post_meta($post->ID, '_cq_description', true);

    ?>
    <style>
        .cq-meta-box { margin-bottom: 20px; }
        .cq-meta-box label { display: block; margin-bottom: 5px; font-weight: bold; }
        .cq-meta-box input[type="text"],
        .cq-meta-box input[type="number"],
        .cq-meta-box textarea,
        .cq-meta-box select { width: 100%; padding: 8px; }
        .cq-meta-box textarea { min-height: 100px; }
        .cq-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    </style>

    <div class="cq-meta-grid">
        <div class="cq-meta-box">
            <label for="cq_price">Precio (ej: S/ 2,799)</label>
            <input type="text" id="cq_price" name="cq_price" value="<?php echo esc_attr($price); ?>" placeholder="S/ 0,000" />
        </div>

        <div class="cq-meta-box">
            <label for="cq_stock_status">Estado de Stock</label>
            <select id="cq_stock_status" name="cq_stock_status">
                <option value="En stock" <?php selected($stock_status, 'En stock'); ?>>En stock</option>
                <option value="Pre-orden" <?php selected($stock_status, 'Pre-orden'); ?>>Pre-orden</option>
                <option value="Últimas unidades" <?php selected($stock_status, 'Últimas unidades'); ?>>Últimas unidades</option>
                <option value="Agotado" <?php selected($stock_status, 'Agotado'); ?>>Agotado</option>
            </select>
        </div>
    </div>

    <div class="cq-meta-box">
        <label for="cq_stock_meta">Información de Envío (ej: Envío 24-48h)</label>
        <input type="text" id="cq_stock_meta" name="cq_stock_meta" value="<?php echo esc_attr($stock_meta); ?>" placeholder="Envío 24-48h" />
    </div>

    <div class="cq-meta-box">
        <label for="cq_description">Descripción Detallada</label>
        <textarea id="cq_description" name="cq_description" placeholder="Descripción completa del producto..."><?php echo esc_textarea($description); ?></textarea>
        <p style="color: #666; font-size: 12px; margin-top: 5px;">Esta descripción aparecerá en la página del producto además del extracto.</p>
    </div>
    <?php
}

// Callback para especificaciones técnicas
function cq_product_specs_callback($post) {
    wp_nonce_field('cq_save_product_specs', 'cq_product_specs_nonce');

    $specs = get_post_meta($post->ID, '_cq_specs', true);
    if (!is_array($specs)) {
        $specs = array(
            array('label' => 'Cuadro', 'value' => ''),
            array('label' => 'Horquilla', 'value' => ''),
            array('label' => 'Transmisión', 'value' => ''),
            array('label' => 'Frenos', 'value' => ''),
            array('label' => 'Ruedas', 'value' => ''),
            array('label' => 'Neumáticos', 'value' => ''),
            array('label' => 'Peso', 'value' => ''),
        );
    }
    ?>
    <div id="cq-specs-container">
        <?php foreach ($specs as $index => $spec): ?>
        <div class="cq-spec-row" style="display: grid; grid-template-columns: 1fr 2fr 50px; gap: 10px; margin-bottom: 10px;">
            <input type="text" name="cq_specs[<?php echo $index; ?>][label]" value="<?php echo esc_attr($spec['label']); ?>" placeholder="Etiqueta (ej: Cuadro)" />
            <input type="text" name="cq_specs[<?php echo $index; ?>][value]" value="<?php echo esc_attr($spec['value']); ?>" placeholder="Valor (ej: Aluminio 6061)" />
            <button type="button" class="button cq-remove-spec">Eliminar</button>
        </div>
        <?php endforeach; ?>
    </div>

    <button type="button" class="button" id="cq-add-spec">+ Añadir Especificación</button>

    <script>
    jQuery(document).ready(function($) {
        var specIndex = <?php echo count($specs); ?>;

        $('#cq-add-spec').on('click', function() {
            var html = '<div class="cq-spec-row" style="display: grid; grid-template-columns: 1fr 2fr 50px; gap: 10px; margin-bottom: 10px;">';
            html += '<input type="text" name="cq_specs[' + specIndex + '][label]" placeholder="Etiqueta" />';
            html += '<input type="text" name="cq_specs[' + specIndex + '][value]" placeholder="Valor" />';
            html += '<button type="button" class="button cq-remove-spec">Eliminar</button>';
            html += '</div>';
            $('#cq-specs-container').append(html);
            specIndex++;
        });

        $(document).on('click', '.cq-remove-spec', function() {
            $(this).closest('.cq-spec-row').remove();
        });
    });
    </script>
    <?php
}

// Callback para galería de imágenes
function cq_product_gallery_callback($post) {
    wp_nonce_field('cq_save_product_gallery', 'cq_product_gallery_nonce');

    $gallery_ids = get_post_meta($post->ID, '_cq_gallery', true);
    if (!is_array($gallery_ids)) {
        $gallery_ids = array();
    }
    ?>
    <div id="cq-gallery-container">
        <div id="cq-gallery-images" style="margin-bottom: 10px;">
            <?php foreach ($gallery_ids as $img_id): ?>
                <?php $img_url = wp_get_attachment_image_url($img_id, 'thumbnail'); ?>
                <?php if ($img_url): ?>
                <div class="cq-gallery-item" style="display: inline-block; margin: 5px; position: relative;">
                    <img src="<?php echo esc_url($img_url); ?>" style="max-width: 80px; height: auto;" />
                    <input type="hidden" name="cq_gallery[]" value="<?php echo esc_attr($img_id); ?>" />
                    <button type="button" class="button cq-remove-gallery-img" style="position: absolute; top: 0; right: 0; padding: 2px 6px; font-size: 10px;">×</button>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <button type="button" class="button" id="cq-add-gallery-images">+ Añadir Imágenes</button>
        <p style="color: #666; font-size: 12px; margin-top: 10px;">
            Estas imágenes aparecerán en la galería del producto. La imagen destacada será la imagen principal.
        </p>
    </div>

    <script>
    jQuery(document).ready(function($) {
        var mediaUploader;

        $('#cq-add-gallery-images').on('click', function(e) {
            e.preventDefault();

            if (mediaUploader) {
                mediaUploader.open();
                return;
            }

            mediaUploader = wp.media({
                title: 'Seleccionar Imágenes de Galería',
                button: { text: 'Añadir a Galería' },
                multiple: true
            });

            mediaUploader.on('select', function() {
                var attachments = mediaUploader.state().get('selection').toJSON();
                attachments.forEach(function(attachment) {
                    var html = '<div class="cq-gallery-item" style="display: inline-block; margin: 5px; position: relative;">';
                    html += '<img src="' + attachment.sizes.thumbnail.url + '" style="max-width: 80px; height: auto;" />';
                    html += '<input type="hidden" name="cq_gallery[]" value="' + attachment.id + '" />';
                    html += '<button type="button" class="button cq-remove-gallery-img" style="position: absolute; top: 0; right: 0; padding: 2px 6px; font-size: 10px;">×</button>';
                    html += '</div>';
                    $('#cq-gallery-images').append(html);
                });
            });

            mediaUploader.open();
        });

        $(document).on('click', '.cq-remove-gallery-img', function() {
            $(this).closest('.cq-gallery-item').remove();
        });
    });
    </script>
    <?php
}

// Guardar meta boxes
function cq_save_product_meta_boxes($post_id) {
    // Verificar nonce y permisos
    if (!isset($_POST['cq_product_details_nonce']) || !wp_verify_nonce($_POST['cq_product_details_nonce'], 'cq_save_product_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // Guardar detalles del producto
    if (isset($_POST['cq_price'])) {
        update_post_meta($post_id, '_cq_price', sanitize_text_field($_POST['cq_price']));
    }
    if (isset($_POST['cq_stock_status'])) {
        update_post_meta($post_id, '_cq_stock_status', sanitize_text_field($_POST['cq_stock_status']));
    }
    if (isset($_POST['cq_stock_meta'])) {
        update_post_meta($post_id, '_cq_stock_meta', sanitize_text_field($_POST['cq_stock_meta']));
    }
    if (isset($_POST['cq_description'])) {
        update_post_meta($post_id, '_cq_description', sanitize_textarea_field($_POST['cq_description']));
    }

    // Guardar especificaciones
    if (isset($_POST['cq_specs']) && is_array($_POST['cq_specs'])) {
        $specs = array();
        foreach ($_POST['cq_specs'] as $spec) {
            if (!empty($spec['label']) || !empty($spec['value'])) {
                $specs[] = array(
                    'label' => sanitize_text_field($spec['label']),
                    'value' => sanitize_text_field($spec['value'])
                );
            }
        }
        update_post_meta($post_id, '_cq_specs', $specs);
    }

    // Guardar galería
    if (isset($_POST['cq_gallery']) && is_array($_POST['cq_gallery'])) {
        $gallery_ids = array_map('intval', $_POST['cq_gallery']);
        update_post_meta($post_id, '_cq_gallery', $gallery_ids);
    } else {
        delete_post_meta($post_id, '_cq_gallery');
    }
}
add_action('save_post_cq_product', 'cq_save_product_meta_boxes');


/* ========================================
   PÁGINA DE CONFIGURACIÓN DE IMÁGENES
   ======================================== */

function cq_add_images_settings_page() {
    add_theme_page(
        'Configuración de Imágenes',
        'Imágenes del Sitio',
        'manage_options',
        'cq-images-settings',
        'cq_images_settings_page_html'
    );
}
add_action('admin_menu', 'cq_add_images_settings_page');

function cq_images_settings_page_html() {
    if (!current_user_can('manage_options')) return;

    // Guardar cambios
    if (isset($_POST['cq_save_images'])) {
        check_admin_referer('cq_images_settings');

        $image_fields = array(
            'cq_hero_image',
            'cq_about_team_1',
            'cq_about_team_2',
            'cq_about_team_3',
            'cq_about_team_4',
            'cq_about_team_5',
            'cq_about_team_6'
        );

        foreach ($image_fields as $field) {
            if (isset($_POST[$field])) {
                update_option($field, intval($_POST[$field]));
            }
        }

        echo '<div class="notice notice-success"><p>Imágenes guardadas correctamente.</p></div>';
    }

    // Obtener valores actuales
    $hero_image = get_option('cq_hero_image', '');
    ?>
    <div class="wrap">
        <h1>Configuración de Imágenes del Sitio</h1>
        <p>Gestiona las imágenes que aparecen en diferentes secciones de tu sitio web.</p>

        <form method="post" action="">
            <?php wp_nonce_field('cq_images_settings'); ?>

            <h2>Página Principal</h2>
            <table class="form-table">
                <tr>
                    <th scope="row">Imagen Hero Principal</th>
                    <td>
                        <?php cq_image_uploader_field('cq_hero_image', $hero_image); ?>
                        <p class="description">Imagen principal de la sección hero en la página de inicio.</p>
                    </td>
                </tr>
            </table>

            <h2>Página Sobre Nosotros - Equipo</h2>
            <table class="form-table">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <?php $field_name = 'cq_about_team_' . $i; ?>
                    <?php $field_value = get_option($field_name, ''); ?>
                    <tr>
                        <th scope="row">Foto Miembro del Equipo <?php echo $i; ?></th>
                        <td>
                            <?php cq_image_uploader_field($field_name, $field_value); ?>
                        </td>
                    </tr>
                <?php endfor; ?>
            </table>

            <?php submit_button('Guardar Imágenes', 'primary', 'cq_save_images'); ?>
        </form>
    </div>

    <script>
    jQuery(document).ready(function($) {
        $('.cq-upload-image-button').on('click', function(e) {
            e.preventDefault();
            var button = $(this);
            var fieldId = button.data('field');

            var mediaUploader = wp.media({
                title: 'Seleccionar Imagen',
                button: { text: 'Usar esta imagen' },
                multiple: false
            });

            mediaUploader.on('select', function() {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#' + fieldId).val(attachment.id);
                $('#' + fieldId + '_preview').html('<img src="' + attachment.url + '" style="max-width: 200px; height: auto;" />');
            });

            mediaUploader.open();
        });

        $('.cq-remove-image-button').on('click', function(e) {
            e.preventDefault();
            var fieldId = $(this).data('field');
            $('#' + fieldId).val('');
            $('#' + fieldId + '_preview').html('');
        });
    });
    </script>
    <?php
}

function cq_image_uploader_field($field_name, $field_value) {
    $image_url = '';
    if ($field_value) {
        $image_url = wp_get_attachment_image_url($field_value, 'medium');
    }
    ?>
    <div>
        <input type="hidden" id="<?php echo esc_attr($field_name); ?>" name="<?php echo esc_attr($field_name); ?>" value="<?php echo esc_attr($field_value); ?>" />
        <div id="<?php echo esc_attr($field_name); ?>_preview" style="margin-bottom: 10px;">
            <?php if ($image_url): ?>
                <img src="<?php echo esc_url($image_url); ?>" style="max-width: 200px; height: auto;" />
            <?php endif; ?>
        </div>
        <button type="button" class="button cq-upload-image-button" data-field="<?php echo esc_attr($field_name); ?>">Seleccionar Imagen</button>
        <button type="button" class="button cq-remove-image-button" data-field="<?php echo esc_attr($field_name); ?>">Eliminar Imagen</button>
    </div>
    <?php
}
