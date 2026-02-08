<?php get_header(); ?>
<?php get_under_title('menu', 'メニュー'); ?>
	<section class="menu">
	<h3 class="page_title">メニュー一覧</h3>
	<section class="menu_cake">
		<div class="menu_cake_inner center">
			<h4 class="contents_title">ケーキ</h4>
			<div class="menu_cake_text">
				<p>CHALONのケーキは、国産の美味しくて安全な食材を使っています。スポンジケーキには、その日の朝にとれた卵を使っているので、卵の味が優しくしっかりしています。また、記念日のケーキなどもお受けしていますので店員にご相談ください。
				</p>
			</div>
			<div class="menu_cake_img">
				<?php
					$cake_query = new WP_Query([
						'post_type'=>'menu',
						'posts_per_page'=>-1,
						'order'=>'ASC',
						'tax_query'=> [
							[
								'taxonomy'=>'kind',
								'field'=>'slug',
								'terms'=>'cake'
							]
						]
					]);
				?>
				<?php if($cake_query->have_posts()): ?>
					<?php while($cake_query->have_posts()):$cake_query->the_post(); ?>
					<?php get_template_part('template/loop','menu'); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

			<section class="menu_other">
					<div class="menu_other_inner center">
							<h4 class="contents_title">焼き菓子・その他</h4>
							<div class="menu_other_text">
									<p>ケーキ以外にも、クッキーやマカロン、ゼリーなどもご用意しております。一つ一つ個包装になっているので、お友達などとシェアしやすくなっています。焼き菓子といえど、食材の新鮮さにはこだわっています。
									</p>
							</div>
							<div class="menu_other_img">
								<?php
								$other_query = new WP_Query([
									'post_type'=>'menu',
									'posts_per_page'=>-1,
									'order'=>'ASC',
									'tax_query'=> [
										[
											'taxonomy'=>'kind',
											'field'=>'slug',
											'terms'=>'other'
										]
									]
								]);
								?>
								<?php if($other_query->have_posts()): ?>
									<?php while($other_query->have_posts()):$other_query->the_post(); ?>
									<?php get_template_part('template/loop','menu'); ?>
									<?php endwhile; ?>
								<?php endif; ?>

							</div>
					</div>
			</section>

			<section class="menu_drink">
					<div class="menu_drink_inner center">
							<h4 class="contents_title">ドリンク</h4>
							<div class="menu_drink_text">
									<p>ケーキをなるべく早く、美味しく召し上がって頂く為にイートインスペースを作りました。イートインスペースでのみ、ドリンクをご用意しています。ケーキと一緒に是非召し上がってください。</p>
							</div>
							<div class="menu_drink_img">
								<?php
								$drink_query = new WP_Query([
									'post_type'=>'menu',
									'posts_per_page'=>-1,
									'order'=>'ASC',
									'tax_query'=> [
										[
											'taxonomy'=>'kind',
											'field'=>'slug',
											'terms'=>'drink'
										]
									]
								]);
								?>
								<?php if($drink_query->have_posts()): ?>
									<?php while($drink_query->have_posts()):$drink_query->the_post(); ?>
									<?php get_template_part('template/loop','menu'); ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
					</div>
			</section>
	</section>
<?php get_footer(); ?>