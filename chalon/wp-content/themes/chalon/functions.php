<?php
//閉じタグfunctionsは書かなくて大丈夫

function chalon_enqueue() {
	//google fontsの読み込み
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap'
	);
	//google iconsの読み込み
	wp_enqueue_style(
		'google-icons',
		'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0'
	);
	//reset.cssの読み込み
	wp_enqueue_style(
		'chalon-reset',
		get_template_directory_uri().'/css/common/reset.css',
		[],
		filemtime(get_theme_file_path('/css/common/reset.css'))
	);
	//common.cssの読み込み
	wp_enqueue_style(
		'chalon-common',
		get_template_directory_uri().'/css/common/common.css',
		[],
		filemtime(get_theme_file_path('/css/common/common.css'))
	);
	
	//jqueryの読み込み
	wp_enqueue_script(
		'google-cdn-jquery',
		'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js',
		[],
		'',
		true
	);
	//common.jsの読み込み
	wp_enqueue_script(
		'chalon-common',
		get_template_directory_uri().'/js/common.js',
		[],
		filemtime(get_theme_file_path('/js/common.js')),
		true
	);

	//topページの時
	if(is_front_page()) {
		//top.cssの読み込み
		wp_enqueue_style(
			'chalon-top',
			get_template_directory_uri().'/css/page/top.css',
			[],
			filemtime(get_theme_file_path('/css/page/top.css'))
		);
		//slickのcss読み込み
		wp_enqueue_style(
			'slick-cdn-theme',
			'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css'
		);
		wp_enqueue_style(
			'slick-cdn',
			'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css'
		);

		//slick.jsの読み込み
		wp_enqueue_script(
			'slick-cdn',
			'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
			[],
			'',
			true
		);
		//top.jsの読み込み
		wp_enqueue_script(
			'chalon-top',
			get_template_directory_uri().'/js/top.js',
			[],
			filemtime(get_theme_file_path('/js/top.js')),
			true
		);

	} else {
		//under.cssの読み込み
		wp_enqueue_style(
			'chalon-under',
			get_template_directory_uri().'/css/common/under.css',
			[],
			filemtime(get_theme_file_path('/css/common/under.css'))
		);
	}
	
		//当店についてのページ
		if(is_page('about')) {
		wp_enqueue_style(
			'chalon-about',
			get_template_directory_uri().'/css/page/about.css',
			[],
			filemtime(get_theme_file_path('/css/page/about.css'))
		);
	}
		//アクセスについてのページ
		if(is_page('access')) {
		wp_enqueue_style(
			'chalon-access',
			get_template_directory_uri().'/css/page/access.css',
			[],
			filemtime(get_theme_file_path('/css/page/access.css'))
		);
	}
		//無料体験、確認、送信のページ
		if(is_page(['trial', 'check', 'thanks'])) {
		wp_enqueue_style(
			'chalon-trial',
			get_template_directory_uri().'/css/page/trial.css',
			[],
			filemtime(get_theme_file_path('/css/page/trial.css'))
		);
	}
	//各お知らせページ
	if(is_singular('news')) {
		wp_enqueue_style(
			'chalon-news',
			get_template_directory_uri().'/css/page/news.css',
			[],
			filemtime(get_theme_file_path('/css/page/news.css'))
		);
	}
	//各メニューのページ
	if(is_singular('menu')) {
		wp_enqueue_style(
			'chalon-menu-single',
			get_template_directory_uri().'/css/page/menu_single.css',
			[],
			filemtime(get_theme_file_path('/css/page/menu_single.css'))
		);
	}
	//メニューアーカイブのページ
	if(is_post_type_archive('menu')) {
		wp_enqueue_style(
			'chalon-menu',
			get_template_directory_uri().'/css/page/menu.css',
			[],
			filemtime(get_theme_file_path('/css/page/menu.css'))
		);
	}
	//お菓子教室のページ
	if(is_page('lesson')) {
		//slickのcss読み込み
		wp_enqueue_style(
			'slick-cdn-theme',
			'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css'
		);
		wp_enqueue_style(
			'slick-cdn',
			'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css'
		);
		// お菓子教室用CSSの読み込み
		wp_enqueue_style(
			'chalon-lesson',
			get_template_directory_uri().'/css/page/lesson.css',
			[],
			filemtime(get_theme_file_path('/css/page/lesson.css'))
		);
		//slick.jsの読み込み
		wp_enqueue_script(
			'slick-cdn',
			'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
			[],
			'',
			true
		);
		//lesson.jsの読み込み
		wp_enqueue_script(
			'chalon-lesson',
			get_template_directory_uri().'/js/lesson.js',
			[],
			filemtime(get_theme_file_path('/js/lesson.js')),
			true
		);
	}
		//参加者の声のページ
		if(is_singular('voice')) {
			wp_enqueue_style(
				'chalon-voice',
				get_template_directory_uri().'/css/page/voice.css',
				[],
				filemtime(get_theme_file_path('/css/page/voice.css'))
			);
		}
}


//css、jsファイルの読み込み
add_action('wp_enqueue_scripts', 'chalon_enqueue');

//type属性の削除(サイトをHTML5対応にする)
add_theme_support('html5', ['style', 'script']);

//titleタグの出力
add_theme_support('title-tag');

//SVGをアップロードできるようにする
function chalon_svg($file_types) {
	$file_types['svg'] = 'image/svg+xml';
	return $file_types;
}

add_action('upload_mimes', 'chalon_svg');

//アイキャッチを有効にする
add_theme_support('post-thumbnails');


/*==============================
オリジナル関数
==============================*/
function get_under_title($file,$alt) {
	echo '<div class="under_title">';
	echo '<div class="under_title_inner center">';
	echo '<h2>';
	echo '<img class="sp contents_title" src="'.get_template_directory_uri().'/img/title_'.$file.'_sp.svg" alt="'.$alt.'">';
	echo '<img class="pc contents_title" src="'.get_template_directory_uri().'/img/title_'.$file.'_pc.svg" alt="'.$alt.'">';
	echo '</h2>';
	echo '</div>';
	echo '</div>';
}

function top_title($file, $alt, $sp_height, $pc_height) {
	echo '<h2>';
		echo '<img class="sp contents_title" src="'.get_template_directory_uri().'/img/spacer.png" alt="'.$alt.'" data-height="'.$sp_height.'"
data-src="'.get_template_directory_uri().'/img/title_'.$file.'_sp.svg">';
		echo '<img class="pc contents_title" src="'.get_template_directory_uri().'/img/spacer.png" alt="'.$alt.'" data-height="'.$pc_height.'"
data-src="'.get_template_directory_uri().'/img/title_'.$file.'_pc.svg">';
	echo '</h2>';
};

function get_picture_from_theme($file,$alt,$klass=[]) {
	$webp_path = get_template_directory_uri().'/img/'.$file.'.webp';
	$jpg_path = get_template_directory_uri().'/img/'.$file.'.jpg';
	get_picture($webp_path,$jpg_path,$alt,$klass);
}


function get_picture($webp_path,$jpg_path,$alt,$klass=[]) {
	echo '<picture class="'.implode(' ',$klass).'">';
	echo '<source srcset="'.$webp_path.'" type="image/webp">';
	echo '<img src="'.$jpg_path.'" alt="'.$alt.'">';
	echo '</picture>';
}

function get_thumbnail() {
	if(has_post_thumbnail()) {
		$webp_id = get_post_thumbnail_id();
		$webp_path = wp_get_attachment_url($webp_id);

		if(!empty(SCF::get('jpg'))){
			$jpg_id = SCF::get('jpg');
			$jpg_path = wp_get_attachment_url($jpg_id);
			$alt = get_the_title().'の画像';
		} else {
			$jpg_path = 'https://placehold.jp/f77237/ffffff/1200x900.jpg?text=no%20image';
			$alt = '';
		}
		get_picture($webp_path,$jpg_path,$alt);
	} else {
		if(!empty(SCF::get('jpg'))){
			$jpg_id = SCF::get('jpg');
			$jpg_path = wp_get_attachment_url($jpg_id);
			$alt = get_the_title().'の画像';
		} else {
			$jpg_path = 'https://placehold.jp/f77237/ffffff/1200x900.jpg?text=no%20image';
			$alt = '';
		}
		echo '<picture><img src="'.$jpg_path.'" alt="'.$alt.'"></picture>';
	}
}

function get_voice_icon() {
	$alt = get_the_title().'さんの画像';
	if(!empty(SCF::get('archive_webp'))) {
		$webp_id = SCF::get('archive_webp');
		$webp_path = wp_get_attachment_url($webp_id);
		if(!empty(SCF::get('archive_jpg'))) {
			$jpg_id = SCF::get('archive_jpg');
			$jpg_path = wp_get_attachment_url($jpg_id);
		} else {
			$jpg_path = 'https://placehold.jp/f77237/ffffff/216x216.jpg?text=no%20image';
		}
		get_picture($webp_path,$jpg_path,$alt);
	} else {
		if(!empty(SCF::get('archive_jpg'))) {
			$jpg_id = SCF::get('archive_jpg');
			$jpg_path = wp_get_attachment_url($jpg_id);
		} else {
			$jpg_path = 'https://placehold.jp/f77237/ffffff/216x216.jpg?text=no%20image';
		}
		echo '<picture><img src="'.$jpg_path.'" alt="'.$alt.'"></picture>';
	}
}

function get_voice_name() {
	echo SCF::get('age');
	echo SCF::get('seibetsu');
	if(SCF::get('child_sanka') === '有') {
		echo '<br>お子さん';
		echo count(SCF::get('children'));
		echo '人と参加';
	}
}