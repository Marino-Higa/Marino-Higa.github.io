/*
オプションの記述方法
$("セレクタ").slick({
	オプション名: 値,
	オプション名: 値
});
*/

$(".slider").slick({
	autoplay: true,
	autoplaySpeed: 5000,
	arrows: false,
	dots: true
});

$(window).resize( ()=>{
	$('body').removeClass('on');
});