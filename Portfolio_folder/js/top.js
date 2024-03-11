function slideSwitch() {
	var e = $("#slideshow img.active");
	0 == e.length && (e = $("#slideshow img:last"));
	var t = e.next().length ? e.next() : $("#slideshow img:first");
	e.addClass("last-active"), t.css({
		opacity: 0
	}).addClass("active").animate({
		opacity: 1
	}, 1e3, function() {
		e.removeClass("active last-active")
	})
}
$(function() {
	setInterval("slideSwitch()", 3e3)
}), $(function() {
	$('a[href^="#"]').click(function() {
		var e = $(this).attr("href"),
			t = $("#" == e || "" == e ? "html" : e).offset().top;
		return $("html, body").animate({
			scrollTop: t
		}, 500, "swing"), !1
	})
}), document.getElementById("slideshow").addEventListener("click", function() {
	document.getElementById("modal").style.display = "block"
}), document.getElementById("yesBtn").addEventListener("click", function() {
	window.location.href = "gallery.php"
}), document.getElementById("noBtn").addEventListener("click", function() {
	document.getElementById("modal").style.display = "none"
}), window.addEventListener("click", function(e) {
	var t = document.getElementById("modal");
	e.target == t && (t.style.display = "none")
}), document.getElementById("modal").addEventListener("wheel", function(e) {
	e.preventDefault()
});