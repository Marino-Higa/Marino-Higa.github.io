<?php get_header(); ?>
<?php get_under_title('voice','参加者の声') ?>
<section class="voice">
        <div class="voice_inner">
            <h3 class="page_title">
							<?php get_voice_name(); ?>
						</h3>
            <div class="voice_box">
								<?php get_thumbnail(); ?>
							<div>
									<?php if(!empty(SCF::get('family_name')) || !empty(SCF::get('first_name'))): ?>
                    <dl>
                        <dt>お名前</dt>
                        <dd>
													<?php echo SCF::get('family_name'); ?>
													<?php echo SCF::get('first_name'); ?>
													さん
												</dd>
                    </dl>
									<?php endif; ?>
									<?php if(SCF::get('child_sanka') == '有'): ?>
                    <dl>
                        <dt>お子さん</dt>
                        <dd>
													<?php
														$children = SCF::get('children');
														// echo '<pre>';
														// print_r($children);
														// echo '</pre>';
														$children_arr = [];
														foreach($children as $child) {
															$children_arr[] = $child['child_age'].$child['child_seibetsu'];
														}
														echo implode('と',$children_arr);
													?>
												</dd>
                    </dl>
									<?php endif; ?>
									<?php if(!empty(SCF::get('course'))): ?>
                    <dl>
                        <dt>コース</dt>
                        <dd><?php echo SCF::get('course'); ?></dd>
                    </dl>
									<?php endif; ?>
									<?php if(!empty(SCF::get('keiken'))): ?>
                    <dl>
                        <dt>お菓子作り経験</dt>
                        <dd><?php echo SCF::get('keiken'); ?></dd>
                    </dl>
									<?php endif; ?>
                </div>
            </div>

						<?php
							$interview_arr = SCF::get('interview');
							// echo '<pre>';
							// print_r($interview_arr);
							// echo '</pre>';
							if(!empty($interview_arr[0]['question'])):
						?>
							<section class="voice_interview_box_wrap">
									<h4 class="contents_title">インタビュー</h4>
									<?php foreach($interview_arr as $interview): ?>
										<div class="voice_interview_box">
												<dl class="voice_interview_box_q">
														<dt><span class="material-symbols-outlined">support_agent</span>インタビュアー</dt>
														<dd>
															<!-- まず、お子さんについて伺っても良いですか？ -->
															<?php echo $interview['question']; ?>
														</dd>
												</dl>
												<dl class="voice_interview_box_a">
														<dt>
																<!-- 武井さん -->
																<?php	if(!empty(SCF::get('family_name'))): ?>
																<?php echo SCF::get('family_name'); ?>さん
																<?php else: ?>
																	参加者
																<?php endif; ?>
																<!-- <picture>
																		<source srcset="../../img/lesson_voice01.webp" type="image/webp">
																		<img src="../../img/lesson_voice01.jpg" alt="参加者の声">
																</picture> -->
																<?php get_voice_icon(); ?>
														</dt>
														<dd>
															<!-- はい。上の子が6歳で下の子が5歳です。上の子は女の子なのでおとなしい方だと思いますが、下の子が男の子なのでやんちゃで困ってます。 -->
															<?php echo $interview['answer']; ?>
														</dd>
												</dl>
										</div>
									<?php endforeach; ?>
							</section>
							<?php endif; ?>
            <a href="<?php echo home_url('/') ?>lesson/trial/" class="btn">無料体験のお申込みはこちら</a>


        </div>
    </section>
<?php get_footer(); ?>