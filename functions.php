<?php
function theme_enqueue_styles()
{
    wp_enqueue_script('wp-api');
    wp_enqueue_style('theme-style', get_stylesheet_uri(),array(),filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/main.js',array(), filemtime(get_template_directory() . '/assets/js/main.js'), true);
    wp_enqueue_script('js', get_template_directory_uri() . '/js/index.js', array(),filemtime(get_template_directory() . '/js/index.js'), true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


function theme_supports()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_supports');

function add_module_type_to_script($tag, $handle, $src)
{
    if ('js' === $handle) {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}

add_filter('script_loader_tag', 'add_module_type_to_script', 10, 3);

function create_post_type()
{
    register_post_type('service', array(
        'has_archive' => true,
        'labels' => array(
            'name' => 'Dịch vụ',
            'singular_name' => 'Dịch Vụ',
            'add_new_item' => 'Thêm mới dịch vụ',
            'edit_item' => 'Chỉnh sửa dịch vụ',
            'singular_name' => 'service',
        ),
        'public' => true,
        'rewrite' => array('slug' => 'dich-vu'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies' => array('service-category'),
        'show_in_rest'  => true
    ));

    register_post_type('hiring', array(
        'has_archive' => true,
        'labels' => array(
            'name' => 'Tuyển dụng',
            'singular_name' => 'Tuyển dụng',
            'add_new_item' => 'Thêm mới tuyển dụng',
            'edit_item' => 'Chỉnh sửa tuyển dụng',
            'singular_name' => 'hiring',
        ),
        'public' => true,
        'rewrite' => array('slug' => 'tuyen-dung'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'  => true
    ));

    register_post_type('project', array(
        'has_archive' => true,
        'labels' => array(
            'name' => 'Dự án',
            'singular_name' => 'Dự án',
            'add_new_item' => 'Thêm mới dự án',
            'edit_item' => 'Chỉnh sửa dự án',
            'singular_name' => 'project',
        ),
        'public' => true,
        'rewrite' => array('slug' => 'du-an'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'  => true
    ));
}

add_action('init', 'create_post_type');

function create_taxonomy()
{
    register_taxonomy('service-category', 'service', array(
        'labels' => array(
            'name' => 'Danh mục dịch vụ',
            'singular_name' => 'Danh mục dịch vụ',
            'add_new_item' => 'Thêm mới danh mục dịch vụ',
            'edit_item' => 'Chỉnh sửa danh mục dịch vụ',
            'singular_name' => 'serviceList',
        ),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'danh-muc-dich-vu'),
        'show_admin_column' => true,
    ));
}

add_action('init', 'create_taxonomy');


function create_custom_form_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_form_data';

    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id INT NOT NULL AUTO_INCREMENT,
        fullname VARCHAR(255) NOT NULL,
        mobile_phone VARCHAR(20) NOT NULL,
        email VARCHAR(255) NOT NULL,
        address TEXT NOT NULL,
        message_content TEXT NOT NULL,
        submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_setup_theme', 'create_custom_form_table');

function handle_custom_form_submission() {
    error_log('Form submission started.'); // Log start
    error_log('Raw POST Data: ' . print_r($_POST, true));
    if (isset($_POST['fullname'], $_POST['mobile_phone'], $_POST['email'], $_POST['address'], $_POST['message_content'])) {
        error_log('Form data received.');

        global $wpdb;
        $table_name = $wpdb->prefix . 'custom_form_data';

        $fullname = sanitize_text_field($_POST['fullname']);
        $mobile_phone = sanitize_text_field($_POST['mobile_phone']);
        $email = sanitize_email($_POST['email']);
        $address = sanitize_textarea_field($_POST['address']);
        $message_content = sanitize_textarea_field($_POST['message_content']);

        $insert_result = $wpdb->insert(
            $table_name,
            [
                'fullname' => $fullname,
                'mobile_phone' => $mobile_phone,
                'email' => $email,
                'address' => $address,
                'message_content' => $message_content,
            ],
            ['%s', '%s', '%s', '%s', '%s']
        );

        if ($insert_result === false) {
            error_log('Database insert failed: ' . $wpdb->last_error);
        } else {
            error_log('Database insert successful.');
        }

        // Redirect to a thank you page
        error_log('Redirecting to home page.');
        wp_redirect(home_url('/'));
        exit;
    } else {
        error_log('Missing form fields!');
        wp_redirect(home_url('/error/')); // Redirect to an error page
        exit;
    }
}

// Hook for logged-in users
add_action('admin_post_custom_form_submission', 'handle_custom_form_submission');
// Hook for guests (non-logged-in users)
add_action('admin_post_nopriv_custom_form_submission', 'handle_custom_form_submission');

function custom_form_admin_menu() {
    add_menu_page(
        'Form Submissions',
        'Form Data', 
        'manage_options', 
        'custom-form-submissions', 
        'display_custom_form_submissions',
        'dashicons-feedback', 
        20
    );
}
add_action('admin_menu', 'custom_form_admin_menu');

function display_custom_form_submissions() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_form_data';
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");

    echo '<div class="wrap"><h1>Form Submissions</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr>
        <th>ID</th>
        <th>Họ và tên</th>
        <th>SĐT</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Nội dung</th>
        <th>Gửi vào lúc</th>
    </tr></thead>';
    echo '<tbody>';

    if ($results) {
        date_default_timezone_set('Europe/London');
        $bangkok_time = new DateTimeZone('Asia/Bangkok');
        foreach ($results as $row) {
            $submitted_at = new DateTime($row->submitted_at);
            $submitted_at->setTimezone($bangkok_time);
            echo "<tr>
                <td>{$row->id}</td>
                <td>{$row->fullname}</td>
                <td>{$row->mobile_phone}</td>
                <td>{$row->email}</td>
                <td>{$row->address}</td>
                <td>{$row->message_content}</td>
                <td>{$submitted_at->format('d-m-Y H:i:s')}</td>
            </tr>";
        }
    } else {
        echo '<tr><td colspan="7">No submissions found.</td></tr>';
    }

    echo '</tbody></table></div>';
}
