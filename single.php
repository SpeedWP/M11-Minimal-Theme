<?php get_header(); ?>
<article itemprop="blogPosts" itemtype="http://schema.org/BlogPosting">
	<h1 itemprop="headline"><?php the_title(); ?></h1>
	<time datetime="<?php the_date('c'); ?>" itemprop="datePublished" pubdate>Gepostet am <?php the_time('j. F Y') ?> in <?php the_category(', '); ?></time>
	<div style="margin:0 0 10px"></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
</article>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>