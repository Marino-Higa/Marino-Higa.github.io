<?php get_header(); ?>

<?php 
	if(is_page('access')) {
		get_under_title('access','アクセス');
	} elseif(is_page('about')) {
		get_under_title('about', '当店について');
	} elseif(is_page(['trial', 'check', 'thanks'])) {
		get_under_title('trial', '無料体験');
	}
?>

	<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile;endif; ?>

<?php get_footer(); ?>