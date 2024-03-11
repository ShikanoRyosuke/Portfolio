$("[date-fancybox]").fancybox({
    thumbs: {
        autoStart: !0
    }
}

);
const filterBtns = document.querySelectorAll(".filterBtn");
filterBtns.forEach(t => {
    t.addEventListener("click", () => {
        let e = t.getAttribute("data-target"), n = document.getElementById(e);
        document.querySelectorAll(".contents").forEach(t => {
            t.classList.add("hidden")
        }
        ), n.classList.toggle("hidden"), console.log(e + " を表示しました")
    }
    )
}

);
const allContents = document.querySelectorAll(".all_contents");
filterBtns.forEach(function (t) {
    t.addEventListener("click", function (t) {
        filterBtns.forEach(function (t) {
            t.classList.remove("filterBtnPush")
        }
        ), filterBtns.forEach(function (t) {
            t.classList.remove("all_contents")
        }
        ), t.preventDefault(), this.classList.add("filterBtnPush")
    }
    )
}

);