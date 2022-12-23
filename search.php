<?php get_header(); ?>
<?php is_search(); ?>
<form report-submit="false" id="search-form" action="<?php echo esc_url( home_url('/'))?>" style="text-align: center;">
<input type="search" placeholder="搜索..." name="s" id="search-input" value="">
<input class="screen-reader-text" type="submit" id="search-submit" value="Search">
<input type="submit" value="搜索" class="button transparent home_search">
</form>

<ul>
关键词“<?php the_search_query(); ?>”共有 <?php global $wp_query; echo $wp_query->found_posts; ?> 个搜索结果
</ul>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li>
        <span class="date"><?php the_time('Y/m/d'); ?></span>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endwhile; ?>
    <?php endif; ?>
    
<?php the_posts_pagination( array(
        'mid_size' => 5,
        'prev_text' =>'上一页',
        'next_text' =>'下一页',
        'before_page_number' => '<span class="meta-nav screen-reader-text"></span>',
        'after_page_number' => '<span class="meta-nav screen-reader-text"></span>',
        ) ); ?>
<?php get_footer(); ?>