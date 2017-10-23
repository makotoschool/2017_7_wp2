<?php get_header('top');?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				<article class="content_sentence">
					<?php if(have_posts()):while(have_posts()):the_post();?>
							<h2 class="top_title"><?php the_title();?></h2>
							<div class="top_content"><?php the_content();?></div>
					<?php endwhile;endif;?>
				</article>		

			</section>

			<?php get_sidebar('top');?>

		</div>
		<section class="content_fullwidth clearfix">
			<h2>新着記事</h2>
			<ul>
				<?php
					//クエリを発行
					$posts=get_posts(array(
							'posts_per_page'=>4
					
							));
					//$postsの中に結果のデータが配列で入ってる
				foreach($posts as $post)://配列があるだけ繰り返す
						setup_postdata($post);//取り出したデータをwp用に加工

				?>
					<li class="post_prev">
						<h3 class="post_prev_title"><?php the_title();?></h3>
						<div class="post_prev_content"><?php the_excerpt();?></div>
					</li>
				<?php endforeach;
					wp_reset_postdata();
				?>

			</ul>
		</section>
		<section class="content_fullwidth">
		
			<article class="content_sentence_fullwidth">
				<?php 
					$greeding=get_post(41);
					/*
					echo '<pre>';
					var_dump($greeding);
					echo '</pre>';
*/
				?>
				<h2 class="top_satatic_title"><?php echo $greeding->post_title;?></h2>
				<div class="top_satatic_content">
					<?php echo $greeding->post_content;?>
				</div>
				<!--
				<h3 class="top_satatic_title">ダミータイトル</h3>
				<div class="top_satatic_content">
					<p>
					吾輩は猫である。
名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。
吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始であろう。この時妙なものだと思った感じが今でも残っている。第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。
その後猫にもだいぶ逢ったがこんな片輪には一度も出会わした事がない。
のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙を吹く。どうも咽せぽくて実に弱った。これが人間の飲む煙草というものである事はようやくこの頃知った。吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。
吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始であろう。この時妙なものだと思った感じが今でも残っている。第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。その後猫にもだいぶ逢ったがこんな片輪には一
					</p>

				</div>
				-->
			</article>			
		</section>
	</main>
<?php get_footer();?>

