<?php get_header();?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				
					<?php if(have_posts()):while(have_posts()):the_post();?>
						<article class="content_sentence">
							<h2 class="top_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
							<div class="top_content"><?php the_excerpt( );?></div>
						</article>
					<?php endwhile;endif;?>
						

			</section>

			<?php get_sidebar();?>

		</div>

	</main>
<?php get_footer();?>

