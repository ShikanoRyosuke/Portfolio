const fixedElm = document.getElementById("header");
let scrollPoint = 0,
	lastPoint = 0;
window.addEventListener("scroll", function() {
	(scrollPoint = window.scrollY) > lastPoint ? fixedElm.classList.add("fixed-hide") : fixedElm.classList.remove("fixed-hide"), lastPoint = scrollPoint
});