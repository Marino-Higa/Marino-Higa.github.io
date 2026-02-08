<?php
global $wp_query;
$postID = $wp_query->post->ID;
//get_post_meta(記事ID,'フィールド名',true);
//trueを入れると配列じゃない形で取得できる
$menu_text = get_post_meta($postID,'menu_text',true);
$lesson_text = get_post_meta($postID,'lesson_text',true);
$img = get_post_meta($postID,'img',true);
$img_url =  wp_get_attachment_url($img);
?>

<?php get_header(); ?>

	<div class="key_title">
		<div class="key_title_inner">
			<img src="<?php echo get_template_directory_uri(); ?>/img/key_lead.svg" alt="洋菓子店CHALON">
		</div>
	</div>
	<div class="concept">
		<div class="concept_inner center">
			<div id="concept_text" class="concept_text">
				<p>
					当店は、今年でオープンして２０年が経ちました。<br>
					振りかえれば長い道のりでした。
				</p>
				<p>
					それは、お客さまのよろこぶ顔を、<br>
					思い浮かべながら進んできた<br>
					一歩一歩の積みかさね。
				</p>
				<p>
					変わらない、味とこだわり。
				</p>
				<p>
					進化しつづける、お客様へのサービス。
				</p>
				<p>
					どちらも大切にしてきました。
				</p>
				<p>
					少しでも品質が良くて美味しく、<br>
					安全な食材を、<br>
					店主自ら全国の産地に足を運んで、<br>
					仕入れています。
				</p>
				<p>
					また、お菓子作りの楽しさを少しでも知っていただく為、<br>
					定期的にお菓子教室を開催しています。
				</p>
				<p>
					これからもCHALONは、<br>
					お客様の心に懐かしく残る様な、<br>
					そんな洋菓子店であり続けます。
				</p>
			</div>
			<div class="concept_img">
				<?php get_picture_from_theme('top_shop','CHALONの店舗'); ?>
			</div>
		</div>
	</div>
	<section class="menu">
		<div class="menu_inner">
			<?php top_title('menu', 'メニュー', '67.27', '134.54'); ?>

			<ul class="slider">
				<?php
					$menu_query = new WP_Query([
						'post_type'=>'menu',
						'posts_per_page'=>'-1',
						'order'=>'ASC'
					]);
				?>
				<?php if($menu_query->have_posts()): ?>
					<?php while($menu_query->have_posts()):$menu_query->the_post(); ?>
						<li>
							<?php get_thumbnail(); ?>
						</li>
					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<p class="menu_text">
					<?php echo nl2br($menu_text); ?>
				</p>
			<a href="<?php echo get_post_type_archive_link('menu'); ?>" class="btn">メニュー一覧</a>
		</div>
	</section>
	<section class="lesson">
		<div class="lesson_inner center">
			<?php top_title('lesson', 'お菓子教室', '67.78', '135.56'); ?>
			<p class="lesson_text">
				<?php echo nl2br($lesson_text); ?>
			</p>
			<?php get_picture_from_theme('top_lesson','お菓子教室イメージ画像',['lesson_img']); ?>
			
			<a class="btn" href="lesson/">お菓子教室についてもっと見る</a>
		</div>
	</section>
	<div id="bg_placeholder" class="bg_placeholder"></div>
	<section class="news">
		<div class="news_inner">
		<?php top_title('news', 'お知らせ', '67.73', '135.46'); ?>
			<?php
				$news_query = new WP_Query([
					'post_type'=>'news',
					'posts_per_page'=>5
				]);
			?>
			<?php if($news_query->have_posts()): ?>
				<?php while($news_query->have_posts()):$news_query->the_post(); ?>
					<dl>
						<dt><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time></dt>
						<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					</dl>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>

		<div class="mv">
		<div class="mv_inner">
			<video class="sp" src="<?php echo get_template_directory_uri(); ?>/movie/sp.mp4" autoplay muted loop playsinline></video>
			<video class="pc" src="<?php echo get_template_directory_uri(); ?>/movie/pc.mp4" autoplay muted loop playsinline></video>
		</div>
	</div>
	<?php if(empty($img_url)): ?>
		<div id="bg" class="bg"></div>
	<?php else: ?>
		<div id="bg" class="bg" style="background-image:url(<?php echo $img_url; ?>)"></div>
	<?php endif; ?>
	<div class="scroll_down">
		<span class="arrow_down"></span>
	</div>

<?php get_footer(); ?>