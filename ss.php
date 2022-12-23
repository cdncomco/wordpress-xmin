<?php
/*Template Name: sousuo*/
?>
<?php get_header(); ?>

<form report-submit="false" id="search-form" action="<?php echo esc_url( home_url('/'))?>" style="text-align: center;">
<input type="search" placeholder="搜索..." name="s" id="search-input" value="">
<input class="screen-reader-text" type="submit" id="search-submit" value="Search">
<input type="submit" value="搜索" class="button transparent home_search">
</form>

<h2>TAG标签云:</h2>


<aside class="tags"><?php wp_tag_cloud('smallest=12&largest=12&number=0&order=DESC&hide_empty=true'); ?></aside>


<?php get_footer(); ?>