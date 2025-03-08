<?php
function theme_enqueue_styles()
{
    wp_enqueue_script('wp-api');
    wp_enqueue_style('theme-style', get_stylesheet_uri(),array(),filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/main.js', array(), filemtime(get_template_directory_uri() . '/assets/js/main.js'), true);
    wp_enqueue_script('js', get_template_directory_uri() . '/js/index.js', array('wp-api'),filemtime(get_template_directory_uri() . '/js/index.js'), true);
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
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
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
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
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
