<?php get_header(); ?>

    <!-- <div class="under_title">
        <div class="under_title_inner center">
            <h2>
                <img class="sp contents_title" src="../img/title_news_sp.svg" alt="アバウト">
                <img class="pc contents_title" src="../img/title_news_pc.svg" alt="アバウト">
            </h2>
        </div>
    </div> -->
<?php get_under_title('news', 'お知らせ'); ?>
		<section class="news">
				<?php if(have_posts()): ?>
					<?php while(have_posts()):the_post(); ?>
						<h3 class="page_title"><?php the_title(); ?></h3>
						<time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
						<div class="news_inner">
							<div class="news_contents">
								<?php the_content(); ?>
							</div>
							<a href="<?php echo home_url(); ?>" class="btn">TOPへ戻る</a>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>
    </section>
<?php get_footer(); ?>