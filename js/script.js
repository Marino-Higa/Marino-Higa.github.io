// ナビゲーション開閉
$('.header-navbtn').on('click', () => {
	$('body').toggleClass('is-nav-open');
});

$('.header-nav').on('click', 'a', () => {
	$('body').removeClass('is-nav-open');
});

// SPトップ作品のもっと見るボタン
$(function() {
  // ウィンドウサイズ768px以上の場合（PC・タブレット）
  if (window.matchMedia('(min-width: 768px)').matches) {
    // TOP作品のもっと見るを開く処理
    $('.content').show(); // すべての.contentを表示
    $('.works-btn').hide(); // .more-btnを非表示

  } else {
    // モバイルの時
    $('.content').not(':first').css('display', 'none'); // 最初のcontent以外を非表示
    $('.works-btn').hide(); // 最初に表示するボタン以外を非表示
    $('.works-btn:first').css('display', 'block'); // 最初の.works-btnのみ表示

    // もっと見るボタンをクリックしたときの処理
    $('.works-btn').on('click', function() {
      $(this).css('display', 'none'); // クリックしたボタンを非表示
      $(this).next('.content').slideDown('fast'); // 次の.contentを表示
      $(this).nextAll('.works-btn:first').css('display', 'block'); // 次のボタンを表示
    });
  }
});

// トップへ戻るボタン
$(function() {
  // 変数にクラスを入れる
  var btn = $('.to-top-btn');
  
  //スクロールしてトップへ戻る
  btn.on('click',function () {
    $('body,html').animate({
      scrollTop: 0
    });
  });
});

 // PCヘッダーのスクロール時透過処理
function handleHeaderOpacity() {
  if (window.matchMedia("(min-width: 768px)").matches) {
    $(window).off("scroll").on("scroll", function() {
      $('header').css("opacity", $(this).scrollTop() > 0 ? 0.8 : 1);
    });
  } else {
    $('header').css("opacity", 1);
    $(window).off("scroll");
  }
}

handleHeaderOpacity();
$(window).on('resize', debounce(handleHeaderOpacity, 200)); // リサイズ時適用

// 処理を遅延させる debounce 関数
function debounce(func, wait) {
  let timeout;
  return function() {
    clearTimeout(timeout);
    timeout = setTimeout(func, wait);
  };
}


// 各作品ページからトップへ戻る際、元のスクロール位置を記録する
// document.addEventListener("DOMContentLoaded", function () {
//   const backButton = document.querySelector(".back-btn");

//   if (backButton) {
//       backButton.addEventListener("click", function () {
//           // スクロール位置を保存
//           localStorage.setItem("scrollPosition", window.scrollY);
//           // ページ遷移
//           window.history.back();
//       });
//   }
// });
document.addEventListener("DOMContentLoaded", function () {
  const backButton = document.querySelector(".back-btn");

  // 戻るボタンがあれば、スクロール位置を保存して戻る
  if (backButton) {
    backButton.addEventListener("click", function () {
      // 現在のスクロール位置を保存
      localStorage.setItem("scrollPosition", window.scrollY);
      // ページ遷移
      window.history.back();
    });
  }

  // スクロール位置の復元処理
  const restoreScrollPosition = () => {
    // トップページの場合のみスクロール位置を復元
    if (window.location.href === 'https://marinohiga.com/index.html') {
      const scrollPosition = localStorage.getItem("scrollPosition");
      if (scrollPosition) {
        window.scrollTo(0, scrollPosition); // 保存した位置にスクロール
        localStorage.removeItem("scrollPosition"); // 保存した位置を削除
      }
    }
  };

  // ページが完全にロードされた後にスクロール位置を復元
  window.onload = restoreScrollPosition;

  // 個別ページの場合、スクロール位置を保存しないようにする
  if (window.location.href !== 'https://marinohiga.com/index.html') {
    localStorage.removeItem("scrollPosition");
  }
});


// スクロールfade-upアニメーション
// 経歴縦に伸びる線border-lineアニメーション
$(function () {
  // .js-scroll-trigger と .border-line クラスを持つ要素がある場合に scrollAnimation を呼び出す
  scrollAnimation('.js-scroll-trigger');
  scrollAnimation('.border-line');

  // scrollAnimation 関数の定義
  function scrollAnimation(selector) {
      if ($(selector).length) {
          $(window).scroll(function () {
              $(selector).each(function () {
                  let position = $(this).offset().top,  // 要素の位置
                      scroll = $(window).scrollTop(),   // 現在のスクロール位置
                      windowHeight = $(window).height(); // ウィンドウの高さ

                  // スクロール位置が要素の位置より、ウィンドウの高さを引いた位置+300px以上の場合
                  if (scroll > position - windowHeight + 300) {
                      $(this).addClass('is-active');
                  }
              });
          });

          // ページ読み込み時にスクロールイベントをトリガー
          $(window).trigger('scroll');
      }
  }
});

// デザイン分析フルスクリーン表示
// フルスクリーン表示と終了処理
document.querySelectorAll('.fullscreen-trigger img').forEach(img => {
  img.addEventListener('click', () => {
    if (img.requestFullscreen) {
      // フルスクリーン前にスクロール位置を保存
      localStorage.setItem('scrollPosition', window.scrollY);
      img.requestFullscreen();
    }
  });
});
// Escapeキーでフルスクリーン終了
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && document.fullscreenElement) {
    document.exitFullscreen();
  }
});
// フルスクリーン終了時にページリロード
document.addEventListener('fullscreenchange', () => {
  if (!document.fullscreenElement) {
    location.reload();  // ページをリロード
  }
});
// ページ読み込み後にスクロール位置を復元
window.addEventListener('load', () => {
  const savedScrollPosition = localStorage.getItem('scrollPosition');
  if (savedScrollPosition) {
    window.scrollTo(0, savedScrollPosition);  // 保存したスクロール位置に戻す
    localStorage.removeItem('scrollPosition');  // スクロール位置の保存を削除
  }
});

// サイトレビューモーダル
$(document).ready(function () {
  // サムネイル画像をクリックした時
  $('.thumbnail').click(function () {
    var modalImageSrc = $(this).data('modal-img'); // クリックされたサムネイルのモーダル画像のURLを取得
    $('#modal-img').attr('src', modalImageSrc); // モーダル内の画像のsrcを変更
    $('#modal').fadeIn().css('display', 'flex'); // モーダルを表示
  });

  // モーダルをクリックした時
  $('#modal').click(function (e) {
    if (!$(e.target).closest('.modal-content').length) { // モーダルコンテンツ以外をクリックした場合
      $('#modal').fadeOut(); // モーダルを非表示
    }
  });
});
