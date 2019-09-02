/*
* road
*/
$(window).on('load' , function() {
  $("body").removeClass("preload");
});
/*
* fixed menu
*/

$(function(){
	var state = false;
	var scrollpos;
	$('#fixed_menu .toggle').on('click', function(){
		if(state == false) {
			scrollpos = $(window).scrollTop();
			$('html').css({'overflow-y': 'hidden'});
			$('body').addClass('fixed').css({'top': -scrollpos});
			$('#fixed_menu').addClass('on');
			$(this).next().fadeIn('fast');
			state = true;
		} else {
			$('html').css({'overflow-y': 'scroll'});
			$('body').removeClass('fixed').css({'top': 0});
			window.scrollTo( 0 , scrollpos );
			$('#fixed_menu').removeClass('on');
			$(this).next().fadeOut('fast');
			state = false;
		}
	});
});


/*
* responsive image
*/

$(function(){
  var $setElem = $('.switch'),
  pcName = '_pc',
  spName = '_sp',
  replaceWidth =768;

    $setElem.each(function(){
        var $this = $(this);
        function imgSize(){
            if(window.innerWidth > replaceWidth) {
                $this.attr('src',$this.attr('src').replace(spName,pcName)).css({visibility:'visible'});
            } else {
                $this.attr('src',$this.attr('src').replace(pcName,spName)).css({visibility:'visible'});
            }
        }
        $(window).resize(function(){imgSize();});
        imgSize();
    });
});


/*
* scroll
*/

$(function(){
     var headerHight = $("header").innerHeight()+10;// ヘッダー等の高さ分の数値を入れる
  // #で始まるアンカーをクリックした場合に処理
   $('a[href^="#"]').click(function() {
      // スクロールの速度
      var speed = 300; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top-headerHight;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});

/*
* TEL
*/
if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
  $(function() {
    $('.tellink').each(function() {
      var str = $(this).html();
      if ($(this).children().is('img')) {
        $(this).html($('<a>').attr('href', 'tel:' + $(this).children().attr('alt').replace(/-/g, '')).append(str + '</a>'));
      } else {
        $(this).html($('<a>').attr('href', 'tel:' + $(this).text().replace(/-/g, '')).append(str + '</a>'));
      }
    });
  });
}


/*
* css swicher
*/
function css_browser_selector(u){
	var ua=u.toLowerCase(),
	is=function(t){return ua.indexOf(t)>-1},
	e='edge',g='gecko',w='webkit',s='safari',o='opera',m='mobile',
	h=document.documentElement,
	b=[
		( !(/opera|webtv/i.test(ua)) && /msie\s(\d)/.test(ua))? ('ie ie'+RegExp.$1) :
			!(/opera|webtv/i.test(ua)) && is('trident') && /rv:(\d+)/.test(ua)? ('ie ie'+RegExp.$1) :
			is('edge/')? e:
			is('firefox/2')?g+' ff2':
			is('firefox/3.5')? g+' ff3 ff3_5' :
			is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')? g+' ff3' :
			is('gecko/')?g:
			is('opera')? o+(/version\/(\d+)/.test(ua)? ' '+o+RegExp.$1 :
			(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')) :
			is('konqueror')? 'konqueror' :
			is('blackberry')?m+' blackberry' :
			is('android')?m+' android' :
			is('chrome')?w+' chrome' :
			is('iron')?w+' iron' :
			is('applewebkit/')? w+' '+s+(/version\/(\d+)/.test(ua)? ' '+s+RegExp.$1 : '') :
			is('mozilla/')? g:
			'',
			is('j2me')?m+' j2me':
			is('iphone')?m+' iphone':
			is('ipod')?m+' ipod':
			is('ipad')?m+' ipad':
			is('mac')?'mac':
			is('darwin')?'mac':
			is('webtv')?'webtv':
			is('win')? 'win'+(is('windows nt 6.0')?' vista':''):
			is('freebsd')?'freebsd':
			(is('x11')||is('linux'))?'linux':
			'',
			'js'];
	c = b.join(' ');
	h.className += ' '+c;
	return c;
};
css_browser_selector(navigator.userAgent);


/*
* accordion
*/
  $('.pull_btn').click(function(){
    $(this).next().slideToggle();
    $(this).toggleClass('active');
  });

/*
* QA
*/
$('.qalist dt').click(function(){
    var w = $(window).width();
    if ( w < 769 ) {    
      $(this).next().slideToggle();
      $(this).toggleClass('active');
    } else {
    } 
});
/*
* pagetop
*/
$(function(){
    var topBtn = $('#pagetop'); 
    // 「ページトップへ」の要素を隠す
    topBtn.hide();

    // スクロールした場合
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            // 「ページトップへ」をフェードイン
           topBtn.fadeIn();
        } 
        else {
            // 「ページトップへ」をフェードアウト
            topBtn.fadeOut();
        }
    });

      // 「ページトップへ」をクリックした場合
    topBtn.click(function(){
        // ページトップにスクロール
        $('html,body').animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    $(window).bind("scroll", function() {
    // ドキュメントの高さ
    scrollHeight = $(document).height();
    // ウィンドウの高さ+スクロールした高さ→ 現在のトップからの位置
    scrollPosition = $(window).height() + $(window).scrollTop();
    // コピーライトの高さ
    footHeight = $("footer").innerHeight();
     
    // スクロール位置がフッターまで来たら
    if ( scrollHeight - scrollPosition  <= footHeight ) {
           topBtn.removeClass('fixed')
        } else {
           topBtn.addClass('fixed')
        }
    });

});


/*
* スマホ用固定btn
*/
$(function(){
    var w = $(window).width();
    if ( w < 769 ) {
	  	 var btmBtn = $('#btmBtn'); 
	   	 // 「ページトップへ」の要素を隠す
	   	 btmBtn.hide();    	
    	// スクロールした場合
    	$(window).scroll(function(){
    	    if ($(this).scrollTop() > 50) {
    	        // 「ページトップへ」をフェードイン
    	       btmBtn.fadeIn();
    	    } 
    	    else {
    	        // 「ページトップへ」をフェードアウト
    	        btmBtn.fadeOut();
    	    }
    	}); 
    } else {
    } 
});


/*
* matchHeight
*/
$(function(){
    $('.mHeight').matchHeight();
});
$(function(){
    var w = $(window).width();
    if ( w > 768 ) {
        $('.mHeight_pc').matchHeight();
    } else {
    } 
});
$(function(){
    var w = $(window).width();
    if ( w < 769 ) {
        $('.mHeight_sp').matchHeight();
    } else {
    } 
});



/*
* INDEX-postlist
*/
$(function(){
    var w = $(window).width();
    // リストの総数を取得
   var n = $("#top_postli li").length;

    if ( w > 768 ) {
       // リストの3つめ以降非表示
       $("#top_postli li:gt(2)").hide();

       var Num = 3;
       $("#top_postBtn").click(function(){
            // クリックするごとに+3
           Num +=3;
           // Num+3つ目以前を表示
           $("#top_postli li:lt("+Num+")").show();

           // 「これ以上ありません」を表示
           if(n <= Num){
            $("#top_postBtn").hide();
           }
        })
    } else {
       // リストの4つめ以降非表示
       $("#top_postli li:gt(3)").hide();

       var Num = 4;
       $("#top_postBtn").click(function(){
            // クリックするごとに+3
           Num +=2;
           // Num+3つ目以前を表示
           $("#top_postli li:lt("+Num+")").show();

           // 「これ以上ありません」を表示
           if(n <= Num){
            $("#top_postBtn").hide();
           }
           })
    } 
});



