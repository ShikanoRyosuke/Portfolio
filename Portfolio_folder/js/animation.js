$(function() {
	$(window).scroll(function() {
		$(".scrollFadeIn-top").each(function() {
			var t = $(this).offset().top,
				s = $(window).scrollTop(),
				o = $(window).height();
			s > t - o ? $(this).addClass("active") : $(this).removeClass("active")
		})
	})
}), $(function() {
	$(window).scroll(function() {
		$(".scrollFadeIn-right").each(function() {
			var t = $(this).offset().top,
				s = $(window).scrollTop(),
				o = $(window).height();
			s > t - o ? $(this).addClass("active") : $(this).removeClass("active")
		})
	})
});