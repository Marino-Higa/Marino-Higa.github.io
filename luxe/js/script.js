// ハンバーガーメニュー
$('.menu_btn').on('click', ()=>{
	$('body').toggleClass('on');
});
$('.menu_btn').on('click', 'a', () => {
	$('body').removeClass('on');
});

// アコーディオン
$('.faq_openclose').on('click', e => {
	const dd = $(e.target).parent().next();
	$(e.target).toggleClass('is-open');
	dd.stop().slideToggle(!dd.is('.visible'));
});