<!DOCTYPE html>
<html lang="en-us">
  <head>
	<meta name="generator" content="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php if ( is_home() ) { ?><title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title><?php } ?>
<?php if ( is_search() ) { ?><title>搜索结果 - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_single() ) { ?><title><?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')) { echo '-第'; echo get_query_var('page'); echo '页';}?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_page() ) { ?><title><?php echo trim(wp_title('',0)); ?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_category() ) { ?><title><?php single_cat_title(); ?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_month() ) { ?><title><?php the_time('F'); ?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><title><?php single_tag_title("", true); ?> - <?php bloginfo('name'); ?></title><?php } ?> <?php } ?>
<?php if ( is_author() ) {?><title><?php wp_title('');?>发表的所有文章 - <?php bloginfo('name'); ?></title><?php }?>
    <link href='<?php echo get_template_directory_uri(); ?>/style.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/highlight/styles/vs2015.min.css" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/highlight/highlight.min.js"></script>

  </head>

  <body>
    <nav>
    <ul class="menu">
      
    <?php wp_nav_menu( array(

'container' => 'false',

'theme_location' => 'top_menu', //这里的header_menu就是注册菜单中的key键名

'items_wrap' => '%3$s',

'fallback_cb' => '',

'depth' => '1'

) ); 

?>

    </ul>

    <hr>
    </nav>
