<?php get_header(); ?>
<?php get_under_title('lesson', 'お菓子教室') ?>
    <section class="lesson">
        <h3 class="page_title">お菓子作りで<br>楽しい思い出を</h3>
				<?php get_picture_from_theme('lesson_top','カップケーキの写真',['lesson_top_img','center']) ?>
        <section class="lesson_feature">
            <div class="lesson_feature_inner center">
                <h4 class="contents_title">CHALONの<br>お菓子教室の特徴</h4>
                <div class="lesson_feature_box_wrap">
                    <div class="lesson_feature_box">
												<?php get_picture_from_theme('lesson_01','子供の写真') ?>
                        <h5>ご家族で参加OK!</h5>
                        <p>CHALONのお菓子教室なら、お子さんとご一緒にお菓子作りを楽しめます。</p>
                    </div>
                    <div class="lesson_feature_box">
												<?php get_picture_from_theme('lesson_02','大人二人の写真') ?>
                        <h5>最大3組までの少人数</h5>
                        <p>各時間、最大3組までなので、難しいことわからないことはすぐに先生に聞けます。</p>
                    </div>
                    <div class="lesson_feature_box">
												<?php get_picture_from_theme('lesson_03','まな板の写真') ?>
                        <h5>手ぶらでOK！</h5>
                        <p>使う道具は全てプロ用の便利な物ばかりです。CHALONで用意します。</p>
                    </div>
                </div>
                <div class="lesson_feature_text">
                    <p>CHALONでは、家族で参加できるお菓子教室を開催しています。普段はCHALONのケーキを作っている現役のケーキ職人から直接お菓子作りを学ぶことが出来ます。</p>
                    <p>毎回の題材は、なるべく近所のスーパーで買える食材を使って作るので、ご自宅でも作りやすいものになっています。是非ご自宅でも試してみてください。</p>
                </div>
            </div>
        </section>
        <section class="lesson_summary">
            <div class="lesson_summary_inner center">
                <h4 class="contents_title">お菓子教室の概要</h4>
                <img class="lesson_summary_img" src="<?php echo get_template_directory_uri(); ?>/img/lesson_price.svg" alt="">
                <div class="lesson_summary_text">
                    <ul>
                        <li>Aコースは、第2、第4土曜日の月2回コースです。</li>
                        <li>Bコースは、第3土曜日の月1回コースです。</li>
                        <li>ご家族で参加される方は、人数分のレッスン料が必要です。</li>
                        <li>入会金はご家族単位です。</li>
                    </ul>
                </div>
                <a href="<?php echo home_url('/') ?>trial/" class="btn">無料体験のお申込みはこちら</a>
            </div>
        </section>
        <section class="lesson_voice">
            <div class="lesson_voice_inner">
                <h4 class="contents_title">参加者の声</h4>
                <div class="lesson_voice_text center">
                    <p>
                        今まで合計で300組を超えるご家族の方に、お菓子教室に参加していただきました。<br>
                        参加していただいた方の声を、一部ご紹介します。
                    </p>
                </div>
                <div class="lesson_voice_box_wrap slider">
									<?php
										$voice_query = new WP_Query([
											'post_type'=>'voice',
											'posts_per_page'=>-1
										]);
									?>
									<?php if($voice_query->have_posts()): ?>
										<?php while($voice_query->have_posts()):$voice_query->the_post(); ?>
											<div class="lesson_voice_box">
												<?php get_voice_icon(); ?>
                        <p class="lesson_voice_box_title">
													<?php get_voice_name();	?>
												</p>
												<p class="lesson_voice_box_text">
													<?php echo SCF::get('archive_message'); ?>
												</p>
												<a href="<?php the_permalink(); ?>"></a>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
                </div>
                <a href="<?php echo home_url('/') ?>trial/" class="btn">無料体験のお申込みはこちら</a>

            </div>
        </section>
    </section>
<?php get_footer(); ?>