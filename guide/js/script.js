/* ===================================================================
JS information

 script info: script
 
 *Since: 2015-7-29
=================================================================== */


// ----------------------------------------------------
// フォントサイズ変更検知
// ----------------------------------------------------
$.onFontResize = function(callback) {

	var h = null;
	var $e = $("<div>", {text:"A", fontSize:"1em"}).hide().append("body");
	var timer = setInterval(function() {
		var size = $e.css("font-size");
		if(h != size) {
			h = size;
			callback();
		}
	}, 1000);

	callback();
	return this;

};


// ----------------------------------------------------
// ブラウザ判定
// ----------------------------------------------------
$.ua = {
	ltIE6:typeof window.addEventListener == "undefined" && typeof document.documentElement.style.maxHeight == "undefined",
	ltIE7:typeof window.addEventListener == "undefined" && typeof document.querySelectorAll == "undefined",
	ltIE8:typeof window.addEventListener == "undefined" && typeof document.getElementsByClassName == "undefined",
	ltIE9:document.uniqueID && !window.matchMedia,
	gtIE10:document.uniqueID && document.documentMode >= 10,
	Trident:document.uniqueID,
	Gecko:window.sidebar,
	Presto:window.opera,
	Blink:window.chrome,
	Webkit:window.navigator.userAgent.toLowerCase().indexOf("safari") > -1,
	Touch:typeof document.ontouchstart != "undefined",
	Mobile:typeof window.orientation != "undefined"
};


// ----------------------------------------------------
// スムーススクロール
// ----------------------------------------------------
$.fn.smoothScroll = function(onScroll) {
	$(this).click(function() {
		var target = $(this).attr("href");
		if(target=="#top") {
			var top = 0;
		} else {
			var top = $(target).offset().top;
		}
		$($.ua.Webkit ? "body" : "html").stop(true, false).animate({scrollTop:top}, 500, "easeOutExpo");
		return false;
	});
};


$(function() {


	// ----------------------------------------------------
	// ブレークポイントの設定
	// ----------------------------------------------------
	$(window).setBreakpoints({
		distinct: true,
		breakpoints: [ 1, 768 ]
	});


	// ----------------------------------------------------
	// viewportの設定
	// ----------------------------------------------------
	function viewportSet() {
		ww = window.innerWidth;
		if ( ww < 768 ) {
			$("meta[name=viewport]").attr("content","width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
		} else {
			$("meta[name=viewport]").attr("content","width=1000, initial-scale=0.6, maximum-scale=0.6, user-scalable=yes");
		}
	};
	viewportSet();


  // ----------------------------------------------------
	// 画像の出し分け
	// ----------------------------------------------------
	$(window).bind("enterBreakpoint768", function() {
		$(".is-responsive").each(function() {
			$(this).attr("src", $(this).data("img").replace("_sp", "_pc"));
		});
	});
	$(window).bind("enterBreakpoint1", function() {
		$(".is-responsive").each(function() {
			$(this).attr("src", $(this).data("img").replace("_pc", "_sp"));
		});
	});


	// ----------------------------------------------------
	// smoothScroll
	// ----------------------------------------------------		
	$(".js-scrollto").smoothScroll();

	$(window).bind("enterBreakpoint768", function() {
		// ----------------------------------------------------
		// hoverでの画像切替
		// ----------------------------------------------------
		$(document).on({
			"mouseenter" : function() {
				var src = $(this).find("img").attr("src");
				var src_on = src.substring(0, src.lastIndexOf(".")) + "_on" + src.substring(src.lastIndexOf("."));
				$(this).find("img").attr("src", src_on);
			},
			"mouseleave" : function() {
				var src = $(this).find("img").attr("src").replace("_on","");
				$(this).find("img").attr("src", src);
			}
		}, ".js-roll");


		// ----------------------------------------------------
		// hoverでの透明度変更
		// ----------------------------------------------------
		$(document).on({
			"mouseenter" : function() {
				$(this).css("opacity", "0.7");
			},
			"mouseleave" : function() {
				$(this).css("opacity", "1");
			}
		}, ".js-fade");
	});
	$(window).bind("exitBreakpoint768", function() {
		$(document).off('mouseenter mouseleave');
	});


  // ----------------------------------------------------
  // header-nav forSP
  // ----------------------------------------------------
	var $nav = $(".header-nav");
	$(".header-btn").click(function() {
		if($nav.is(":visible")) {
			$(this).find(".header-btn-icon").removeClass("is-close");
			$nav.fadeOut();
		} else {
			$(this).find(".header-btn-icon").addClass("is-close");
			$nav.fadeIn();
		}
	});

	// Breakpoint reset
	$(window).bind("enterBreakpoint768", function() {
		$nav.show();
	});
	$(window).bind("enterBreakpoint1", function() {
		$nav.hide();
		$(".header-btn-icon").removeClass("is-close");
	});


	// ----------------------------------------------------
	// pagetop
	// ----------------------------------------------------
	$(window).bind("scroll load", function() {
		var st = $(this).scrollTop();

		if ($.browser.msie && $.browser.version < 9) {
			if(100<st) {
				$(".pagetop").show();
			} else {
				$(".pagetop").hide();
			}
		} else {
			if(100<st) {
				if($(".pagetop").css("display")=="none") {
					$(".pagetop").css({display:"block", opacity:0}).stop(true, false).animate({bottom:"40px", opacity:1});
				}
			} else {
				$(".pagetop").stop(true, false).animate({bottom:"0", opacity:0}, function() {
					$(".pagetop").css({display:"none"})
				});
			}
		}

	});



});