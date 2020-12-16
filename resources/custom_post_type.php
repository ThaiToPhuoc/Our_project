<?php
function create_post_type() {
    $bannerlabels = array (
    //BEGIN - Việt Hóa menu custom post type
    'name' => _x('banner','Tên nhiều banner'),
    'singular_name' => _x('banner','Tên một banner'),
    'add_new' => __ ('Thêm banner'),
    'add_new_item' => __('Thêm banner mới'),
    'edit_item' => __('Sửa banner'),
    'new_item' => __('Thêm banner mới'),
    'all_items' => __('Tất cả banner'),
    'view_item' => __('Xem banner'),
    'search_item' => __('Tìm banner'),
    'not_found' => __('Hiện tại chưa có banner nào'),
    'not_found_in_trash' => __('Không có banner nào trong sọt rác'),
    'menu_name' => 'banner'
    //END - Việt hóa menu custom post type
);
    $args = array(
        'labels' => $bannerlabels,
        'description' => 'Quản lý các banner trên blog',
        //Cho phép hiển thị menu trong WordPress Dashboard - line 22.
        'public' => true,
        'menu_position' => 3,
        'has_archive' => true,
        //Xác định những chức năng được hỗ trợ trong custom post type - line 25
        'supports' => array('title','editor','thumbnail','excerpt','comments'),
        'has_archive' => true,
    );
    register_post_type ('banner_code',$args);
}
add_action ('init','create_post_type');

function create_post_content() {
    $contentlabels = array (
    //BEGIN - Việt Hóa menu custom post type
    'name' => _x('content','Tên nhiều content'),
    'singular_name' => _x('content','Tên một content'),
    'add_new' => __ ('Thêm content'),
    'add_new_item' => __('Thêm content mới'),
    'edit_item' => __('Sửa content'),
    'new_item' => __('Thêm content mới'),
    'all_items' => __('Tất cả content'),
    'view_item' => __('Xem content'),
    'search_item' => __('Tìm content'),
    'not_found' => __('Hiện tại chưa có content nào'),
    'not_found_in_trash' => __('Không có content nào trong sọt rác'),
    'menu_name' => 'content'
    //END - Việt hóa menu custom post type
);
    $args = array(
        'labels' => $contentlabels,
        'description' => 'Quản lý các content trên blog',
        //Cho phép hiển thị menu trong WordPress Dashboard - line 22.
        'public' => true,
        'menu_position' => 3,
        'has_archive' => true,
        //Xác định những chức năng được hỗ trợ trong custom post type - line 25
        'supports' => array('title','editor','thumbnail','excerpt','comments'),
        'has_archive' => true,
    );
    register_post_type ('content_code',$args);
}
add_action ('init','create_post_content');


function create_post_info() {
    $infolabels = array (
    //BEGIN - Việt Hóa menu custom post type
    'name' => _x('info','Tên nhiều info'),
    'singular_name' => _x('content','Tên một info'),
    'add_new' => __ ('Thêm info'),
    'add_new_item' => __('Thêm info mới'),
    'edit_item' => __('Sửa info'),
    'new_item' => __('Thêm info mới'),
    'all_items' => __('Tất cả info'),
    'view_item' => __('Xem info'),
    'search_item' => __('Tìm info'),
    'not_found' => __('Hiện tại chưa có info nào'),
    'not_found_in_trash' => __('Không có info nào trong sọt rác'),
    'menu_name' => 'info'
    //END - Việt hóa menu custom post type
);
    $args = array(
        'labels' => $infolabels,
        'description' => 'Quản lý các content trên blog',
        //Cho phép hiển thị menu trong WordPress Dashboard - line 22.
        'public' => true,
        'menu_position' => 3,
        'has_archive' => true,
        //Xác định những chức năng được hỗ trợ trong custom post type - line 25
        'supports' => array('title','editor','thumbnail','excerpt','comments'),
        'has_archive' => true,
    );
    register_post_type ('info_code',$args);
}
add_action ('init','create_post_info');



