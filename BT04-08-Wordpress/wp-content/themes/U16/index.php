<!-- php code to get HTML from header.php and footer.php -->
<?php get_header(); ?>
<div class="row">
	<div class="large-9 columns" role="content">
	
		<!-- use php to loop thru existing blog posts on WP -->
		<?php while(have_posts()) :the_post(); ?>
			<article>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<h6>Written by <?php the_author_posts_link(); ?> on <?php the_time('l, F jS, Y, g:i:s A T'); ?></h6>
				
				<div class="row">
					<div class="large-6 columns">
						<?php the_content(__('(more)')); ?>
					</div>
					<div class="large-6 columns">
						<?php the_post_thumbnail('full'); ?>
					</div>
				</div>
			</article>
		
		<?php endwhile; ?>
 		
	</div>
<!-- no ending div for this row because content continues with sidebar.php -->
<?php get_footer(); ?>