<?php

register_nav_menus( array(
    'top_menu' => '顶部导航',
    
));

//nav_menus删除class
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
return is_array($var) ? array_intersect($var, array('current-menu-item','current-post-ancestor','current-menu-ancestor','current-menu-parent')) : '';
}

//删除head无用功能
// Remove junk from head
remove_action( 'wp_head', 'rsd_link' ); //删除XML-RPC RSD链接
remove_action( 'wp_head', 'wp_generator' ); //删除wordpress版本号
remove_action( 'wp_head', 'feed_links', 2 ); //删除XML
remove_action( 'wp_head', 'index_rel_link' ); //
remove_action( 'wp_head', 'wlwmanifest_link' ); //删除 WLW Manifest 链接
remove_action( 'wp_head', 'feed_links_extra', 3 ); //删除XML
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); //
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); //
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); //
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //删除短链接
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); //
remove_action( 'wp_head', 'wp_resource_hints', 2 ); //删除 DNS 预取链接
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 ); //删除 REST API 链接
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 ); //删除 oEmbed 链接
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 ); //删除 REST API
remove_action('wp_head', 'print_emoji_detection_script', 7); //删除表情符号脚本和样式
remove_action('wp_print_styles', 'print_emoji_styles'); //删除表情符号脚本和样式
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' ); //删除额外的 global-styles-inline-css
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' ); //删除额外的 global-styles-inline-css
//删除 Gutenberg 默认样式
add_action('wp_print_styles', function (): void {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
});
add_action( 'wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20 );
function mywptheme_child_deregister_styles() {
    wp_dequeue_style( 'classic-theme-styles' );

} //删除 classic-themes.min.css



/* 彩色静态标签云 Color Tag Cloud 
/* -------------------------------- */
/*function colorCloud($text) {
  $text = preg_replace_callback('|<a (.+?)>|i', 'colorCloudCallback', $text);
  $text=preg_replace('/<a /','<a ',$text);
  return $text;
}
function colorCloudCallback($matches) {
  $text = $matches[1];
//这里定义我们背景色的范围，如果不想设置背景色的输出范围我们可以使用
//$color = dechex(rand(0,16777215));从所有颜色中随机出一个
  $a = array('8D7EEA','F99FB2','AEE05B','E8D368','F75D78','55DCAB','F75DB1','ABABAF','7EA8EA');
  $co = array_rand($a,2);
  $color = $a[$co[0]];
//随机颜色代码结束，下面开始吧颜色赋值给每个标签生成背景色
  $pattern = '/style=(\'|\")(.*)(\'|\")/i';
  $text = preg_replace($pattern, "style=\"background:#{$color};\"", $text);
  return "<a $text>";
}
//把php代码挂载到wp_tag_cloud钩子上
add_filter('wp_tag_cloud', 'colorCloud', 1);
*/