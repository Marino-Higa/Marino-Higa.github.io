<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header_inner">
            <h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="洋菓子店CHALON"></a></h1>
            <div class="hum_menu">
                <span class="hum_menu_line"></span>
                <span class="hum_menu_text">MENU</span>
            </div>
            <nav>
                <ul>
                    <li><a href="<?php echo home_url('/about/'); ?>">当店について</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('menu'); ?>">メニュー</a></li>
                    <li><a href="<?php echo home_url('/lesson/'); ?>">お菓子教室</a></li>
                    <li><a href="<?php echo home_url('/access/'); ?>">アクセス</a></li>
                </ul>
            </nav>
        </div>
    </header>