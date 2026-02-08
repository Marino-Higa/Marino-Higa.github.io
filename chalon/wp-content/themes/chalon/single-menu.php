<?php get_header(); ?>
<?php get_under_title('menu','メニュー'); ?>
	<section class="menu_single">
		<div class="menu_single_inner">
			<?php if(have_posts()): ?>
				<?php while(have_posts()):the_post(); ?>
					<h3 class="page_title"><?php the_title(); ?></h3>
					<div class="menu_single_box">


					<?php get_thumbnail(); ?>
					<div>
						<dl>
							<dt>価格</dt>
							<dd>
								<?php
								$price = SCF::get('price')!==''?SCF::get('price').'円':'-'; echo $price;
								?>
							</dd>
						</dl>
						<dl>
							<dt>カロリー</dt>
							<dd>
								<?php
								$cal = SCF::get('cal')!==''?SCF::get('cal').'kcal':'-'; echo $cal;
								?>
							</dd>
						</dl>
						<dl>
							<dt>アレルギー</dt>
							<dd>
								<?php
								$alg = SCF::get('alg');
								$alg_str = $alg?implode('、',$alg):'-';
								echo $alg_str;
								?>
							</dd>
						</dl>
					</div>
				</div>
				<a class="btn" href="<?php echo get_post_type_archive_link('menu'); ?>">メニュー一覧へ</a>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>