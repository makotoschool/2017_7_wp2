<?php get_header();?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				
					<?php if(have_posts()):while(have_posts()):the_post();?>
						<article class="content_sentence">
							<h2 class="top_title"><?php the_title();?></h2>
							<div class="top_content"><?php the_content();?></div>
						</article>
						<?php
							previous_post_link('%link', '前の記事', TRUE);
							next_post_link('%link', '次の記事', TRUE);
						?>

					<?php endwhile;endif;?>
						

			</section>

			<?php get_sidebar();?>

		</div>

	</main>
<?php get_footer();?>

