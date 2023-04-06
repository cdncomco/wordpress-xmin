<?php get_header(); ?>
<?php is_single(); ?>

<div class="article-meta">
<h2><span class="title"><?php the_title(); ?></span></h2>

创建于 <?php the_time('Y/m/d'); ?> | 修改于 <?php the_modified_time('Y/m/d'); ?>
</div>

<article>
<p><?php the_content(); ?></p>
</article>

<p><?php the_tags(); ?></p>
<?php comments_template( '', true ); ?>


<?php get_footer(); ?>