<?php get_header();?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				
					<?php if(have_posts()):while(have_posts()):the_post();?>
						<article class="content_sentence">
							<h2 class="top_title"><?php the_title();?></h2>
							<div class="top_content"><?php the_content();?></div>
						</article>
						<?php previous_post_link('&laquo;%link', '%title', TRUE);?>&nbsp;&nbsp;
						<?php next_post_link('%link', '%title&raquo', TRUE);?>

					<?php endwhile;endif;?>
						

			</section>
			<?php 
				//カテゴリーによって採用するサイドバーを変える
				if(in_category('blog')):
					get_sidebar('blog');
				elseif(in_category('web')):
					get_sidebar('web');
				elseif(in_category('dtp')):
					get_sidebar('dtp');
				else:
					get_sidebar();
				endif;


			?>


			<!--<?php get_sidebar();?>-->

		</div>

	</main>
<?php get_footer();?>

