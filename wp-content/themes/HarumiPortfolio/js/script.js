//ローディング中の表示動作(jQuery)
$(window).on("load", function () {
  $("#loading").delay(1700).fadeOut("slow"); //ローディング画面のフェードアウトする遅延時間
  $("#loading_logo").delay(1300).fadeOut("slow"); //ロゴをフェードアウトする遅延時間
});

//ナビゲーションとクリック動作
document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("menu-circle");
  const nav = document.getElementById("nav");
  const menuItems = nav.querySelectorAll(".nav li a");
  const h1 = document.getElementById("h1");
  const linewrapper = document.getElementById("line-wrapper");

  toggle.addEventListener("click", function () {
    toggle.classList.toggle("open");
    nav.classList.toggle("show");
    toggle.classList.toggle("clicked");
    linewrapper.classList.toggle("clicked");
  });

  menuItems.forEach(function (menuItem) {
    menuItem.addEventListener("click", function () {
      toggle.classList.remove("open");
      nav.classList.remove("show");
    });
  });
  menuItems.forEach(function (h1) {
    h1.addEventListener("click", function () {
      toggle.classList.remove("open");
      nav.classList.remove("show");
    });
  });
});

// タイトル文字アニメーション　↓コードと参考自分メモ
// .TextTypingの子要素（span）を表示から非表示にする定義
function TextTypingAnime() {
  $(".TextTyping").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    var thisChild = "";
    if (scroll >= elemPos - windowHeight) {
      thisChild = $(this).children(); //spanタグを取得
      //spanタグの要素の１つ１つ処理を追加
      thisChild.each(function (i) {
        var time = 200; //アニメーション速度
        //時差で表示する為にdelayを指定しその時間後にfadeInで表示させる
        $(this)
          .delay(time * i)
          .fadeIn(time);
      });
    } else {
      thisChild = $(this).children();
      thisChild.each(function () {
        $(this).stop(); //delay処理を止める
        $(this).css("display", "none"); //spanタグ非表示
      });
    }
  });
}
// 画面が読み込まれたら開始
$(window).on("load", function () {
  //spanタグを追加する
  var element = $(".TextTyping");
  element.each(function () {
    var text = $(this).html();
    var textbox = "";
    text.split("").forEach(function (t) {
      if (t !== " ") {
        textbox += "<span>" + t + "</span>";
      } else {
        textbox += t;
      }
    });
    $(this).html(textbox);
  });

  setTimeout(function () {
    TextTypingAnime();
  }, 6800); //6.8秒遅延
}); // タイトル文字アニメーション　↑コードと参考自分メモ

//wave　↓コードと参考自分メモ
var unit = 112, //波の高さ
  canvasList, // 描画キャンバスの格納配列
  info = {}, // 全キャンバス共通の描画情報
  colorList; // 各キャンバスの色情報

/**
 * Init function.
 *　初期化処理
 */
function init() {
  info.seconds = 0;
  info.t = 0;
  canvasList = [];
  colorList = [];
  // canvas1個めの色指定
  canvasList.push(document.getElementById("waveCanvas"));
  colorList.push(["#fffcfc"]);

  // canvas2個めの色指定
  canvasList.push(document.getElementById("waveCanvas2"));
  colorList.push(["#f9f0f1"]);

  // 各キャンバスの初期化
  for (var canvasIndex in canvasList) {
    var canvas = canvasList[canvasIndex];
    canvas.width = document.documentElement.clientWidth; //Canvasのwidthをウィンドウの幅に合わせる
    canvas.height = 128; //波の高さ
    canvas.contextCache = canvas.getContext("2d");
  }
  // 共通の更新処理呼び出し
  update();
}

//アニメーションの更新処理
function update() {
  for (var canvasIndex in canvasList) {
    var canvas = canvasList[canvasIndex];
    // 各キャンバスの描画
    draw(canvas, colorList[canvasIndex]);
  }
  // 共通の描画情報の更新
  info.seconds = info.seconds + 0.014;
  info.t = info.seconds * Math.PI;
  // 再描画(波の速度)
  setTimeout(update, 70);
}

/**
 * Draw animation function.
 *　アニメーションの描画処理
 */
function draw(canvas, color) {
  // 対象のcanvasのコンテキストを取得
  var context = canvas.contextCache;
  // キャンバスの描画をクリア
  context.clearRect(0, 0, canvas.width, canvas.height);

  //波を描画 drawWave(canvas, color[数字（波の数を0から数えて指定）], 透過, 波の幅のzoom,波の開始位置の遅れ )
  drawWave(canvas, color[0], 1, 3, 0);
}

/**
 * 波の描画処理
 * drawWave(色, 不透明度, 波の幅のzoom, 波の開始位置の遅れ)
 */
function drawWave(canvas, color, alpha, zoom, delay) {
  var context = canvas.contextCache;
  context.fillStyle = color; //塗りの色
  context.globalAlpha = alpha;
  context.beginPath(); //パスの開始
  drawSine(canvas, info.t / 0.5, zoom, delay);
  context.lineTo(canvas.width + 10, canvas.height); //パスをCanvasの右下へ
  context.lineTo(0, canvas.height); //パスをCanvasの左下へ
  context.closePath(); //パスを閉じる
  context.fill(); //波を塗りつぶす
}

/**
 * Function to draw sine
 *サイン曲線の描画処理
 * drawSine(時間, 波の幅のzoom, 波の開始位置の遅れ)
 */
function drawSine(canvas, t, zoom, delay) {
  var xAxis = Math.floor(canvas.height / 2);
  var yAxis = 0;
  var context = canvas.contextCache;

  var x = t; //時間を横の位置とする
  var y = Math.sin(x) / zoom;
  context.moveTo(yAxis, unit * y + xAxis); //スタート位置にパスを置く

  // Loop to draw segments (横幅の分、波を描画)
  for (i = yAxis; i <= canvas.width + 10; i += 10) {
    x = t + (-yAxis + i) / unit / zoom;
    y = Math.sin(x - delay) / 3;
    context.lineTo(i, unit * y + xAxis);
  }
}

init();
//最後に関数を呼び出してアニメーションを開始する。
//wave ↑参考コード


// 横スクロールでBiography
const swiper = new Swiper('.swiper', {
  // direction: 'horizontal',
  slidesPerView: 1,
  loop: false,
  mousewheel: true,
  pagination: {
    el: ".swiper-pagination"
  }
});


//
//
//↓まだ未使用だよー！！！
//
//
//フェード
window.addEventListener("load", () => {
  AOS.init({
    // initClassName: "abc",
  });
});
AOS.init();

//スクロール連動(jQuery)
$(window).on("scroll", function () {
  //画面がスクロールされたら動かしたいソースコードを記述
  //biographyで使用する
});
