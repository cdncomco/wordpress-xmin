<?php
/**
 * @since xmin 1.0
 * 
 * @package xmin
 * @author 魔王
 * @version 1.0
 * @link https://echo.gg/
 */

 get_header(); 
 is_home();
?>
    <ul>
  
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li>
        <span class="date"><?php the_time('Y/m/d'); ?></span>
        <a style="margin-left: 2%;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endwhile; ?>
    <?php endif; ?>
    
    </ul>

<?php the_posts_pagination( array(
        'mid_size' => 5,
        'prev_text' =>'上一页',
        'next_text' =>'下一页',

        ) ); ?>

<?php get_footer(); ?>