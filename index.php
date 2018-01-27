<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="wrap">
	<a itemprop="url" style="color:#555" href="<?php the_permalink(); ?>">
		<article itemprop="blogPosts" itemtype="http://schema.org/BlogPosting">
			<h2 itemprop="headline"><?php the_title(); ?></h2>
			<figure itemprop="image"><?php the_post_thumbnail(mini); ?></figure>
			<blockquote itemprop="description"><?php the_excerpt(); ?></blockquote>
			<div style="clear:both"></div>
		</article>
	</a>
</div>
<?php endwhile; ?>
<?php endif; ?>
<div id="paging">
	<div style="float:left"><?php next_posts_link('&#8592; Ältere Artikel'); ?></div>
	<div style="float:right"><?php previous_posts_link('Neuere Artikel &#8594;'); ?></div>
</div>
<div style="clear:both"></div>
<?php get_footer(); ?>