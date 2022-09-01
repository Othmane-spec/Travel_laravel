!(function (e) {
    "use strict";
    var t = e(window);
    t.on("load", function () {
        var l = e(document),
            a = e("html, body"),
            n = e("#preloader"),
            i = e(".main-menu-content .dropdown-menu-item"),
            o = document.querySelector(".header-menu-wrapper"),
            s = e("#back-to-top"),
            r = e("#single-content-nav .scroll-link"),
            c = e(".hotel-card-carousel"),
            d = e(".hotel-card-carousel-2"),
            u = e(".card-img-carousel"),
            m = e(".car-carousel"),
            g = e(".trending-carousel"),
            p = e(".gallery-carousel"),
            h = e(".client-logo"),
            v = e(".testimonial-carousel"),
            f = e(".testimonial-carousel-2"),
            w = e('[data-fancybox="video"]'),
            b = e('[data-fancybox="gallery"]'),
            y = e(".ripple-bg"),
            k = e(".grid-masonry"),
            C = e("#slider-range"),
            T = e("#amount"),
            x = e("#slider-range2"),
            S = e("#amount2"),
            D = e('input[name="daterange"]'),
            Y = e('input[name="daterange-single"]'),
            $ = e(".select-contain-select"),
            M = e(".counter"),
            P = e(".full-width-slider");
        if (
            (n.delay("500").fadeOut(2e3),
            l.on("click", ".down-button", function () {
                e(this).toggleClass("active"),
                    e(".header-top-bar").slideToggle(200);
            }),
            l.on("click", ".menu-toggler", function () {
                e(this).toggleClass("active"),
                    e(".main-menu-content").slideToggle(200);
            }),
            i
                .parent("li")
                .children("a")
                .append(function () {
                    return '<button class="drop-menu-toggler" type="button"><i class="la la-angle-down"></i></button>';
                }),
            l.on("click", ".main-menu-content .drop-menu-toggler", function () {
                return (
                    e(this)
                        .parent()
                        .parent()
                        .children(".dropdown-menu-item")
                        .toggle(),
                    !1
                );
            }),
            e(".main-menu-content .dropdown-menu-item .sub-menu")
                .parent("li")
                .children("a")
                .append(function () {
                    return '<button class="sub-menu-toggler" type="button"><i class="la la-plus"></i></button>';
                }),
            l.on(
                "click",
                ".main-menu-content .dropdown-menu-item .sub-menu-toggler",
                function () {
                    return (
                        e(this)
                            .parent()
                            .parent()
                            .children(".sub-menu")
                            .toggle(),
                        !1
                    );
                }
            ),
            l.on("click", ".user-menu-open", function () {
                e(".user-canvas-container").addClass("active");
            }),
            l.on("click", ".side-menu-close", function () {
                e(".user-canvas-container, .sidebar-nav").removeClass("active");
            }),
            l.on("click", ".menu-toggler", function () {
                e(".sidebar-nav").toggleClass("active");
            }),
            t.on("resize", function () {
                t.width() > 991
                    ? (e(".main-menu-content").show(),
                      e(".dropdown-menu-item").show(),
                      e(".sub-menu").show(),
                      e(".header-top-bar").show())
                    : (e(".main-menu-content").hide(),
                      e(".dropdown-menu-item").hide(),
                      e(".sub-menu").hide(),
                      e(".header-top-bar").hide());
            }),
            e(o).length)
        )
            var z = o.offsetTop;
        t.on("scroll", function () {
            t.scrollTop() >= z
                ? ((document.body.style.paddingTop = o.offsetHeight + "px"),
                  document.body.classList.add("fixed-nav"))
                : ((document.body.style.paddingTop = "0px"),
                  document.body.classList.remove("fixed-nav")),
                t.scrollTop() > 500
                    ? e(s).addClass("active")
                    : e(s).removeClass("active"),
                e(".page-scroll").each(function () {
                    e(this).offset().top - e(window).scrollTop() < 20 &&
                        (r.removeClass("active"),
                        e("#single-content-nav")
                            .find('[data-scroll="' + e(this).attr("id") + '"]')
                            .addClass("active"));
                });
        }),
            r.on("click", function (t) {
                var l = e(e(this).attr("href"));
                e(a).animate({ scrollTop: l.offset().top }, 600),
                    e(this).addClass("active"),
                    t.preventDefault();
            }),
            l.on("click", "#back-to-top", function () {
                return e(a).animate({ scrollTop: 0 }, 800), !1;
            }),
            e(c).length &&
                e(c).owlCarousel({
                    loop: !0,
                    items: 4,
                    nav: !0,
                    dots: !0,
                    smartSpeed: 700,
                    autoplay: !1,
                    active: !0,
                    margin: 30,
                    navText: [
                        '<i class="la la-angle-left"></i>',
                        '<i class="la la-angle-right"></i>',
                    ],
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 },
                        1441: { items: 4 },
                    },
                }),
            e(d).length &&
                e(d).owlCarousel({
                    loop: !0,
                    items: 3,
                    nav: !0,
                    dots: !0,
                    smartSpeed: 700,
                    autoplay: !1,
                    active: !0,
                    margin: 30,
                    navText: [
                        '<i class="la la-angle-left"></i>',
                        '<i class="la la-angle-right"></i>',
                    ],
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 },
                    },
                }),
            e(u).length &&
                e(u).owlCarousel({
                    loop: !0,
                    items: 1,
                    nav: !0,
                    dots: !0,
                    smartSpeed: 700,
                    autoplay: !1,
                    active: !0,
                    margin: 30,
                    navText: [
                        '<i class="la la-angle-left"></i>',
                        '<i class="la la-angle-right"></i>',
                    ],
                }),
            e(m).length &&
                e(m).owlCarousel({
                    loop: !0,
                    items: 3,
                    nav: !0,
                    dots: !0,
                    smartSpeed: 700,
                    autoplay: !1,
                    active: !0,
                    margin: 30,
                    navText: [
                        '<i class="la la-angle-left"></i>',
                        '<i class="la la-angle-right"></i>',
                    ],
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 },
                    },
                }),
            e(g).length &&
                e(g).owlCarousel({
                    loop: !0,
                    items: 3,
                    nav: !0,
                    dots: !0,
                    smartSpeed: 700,
                    autoplay: !1,
                    margin: 30,
                    navText: [
                        '<i class="la la-long-arrow-left"></i>',
                        '<i class="la la-long-arrow-right"></i>',
                    ],
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 },
                    },
                }),
            e(p).length &&
                e(p).owlCarousel({
                    loop: !0,
                    items: 1,
                    nav: !0,
                    dots: !0,
                    smartSpeed: 700,
                    margin: 20,
                    navText: [
                        '<i class="la la-long-arrow-left"></i>',
                        '<i class="la la-long-arrow-right"></i>',
                    ],
                }),
            e(h).length &&
                e(h).owlCarousel({
                    loop: !0,
                    items: 6,
                    nav: !1,
                    dots: !1,
                    smartSpeed: 700,
                    autoplay: !0,
                    responsive: {
                        0: { items: 1 },
                        425: { items: 2 },
                        480: { items: 2 },
                        767: { items: 4 },
                        992: { items: 6 },
                    },
                }),
            e(v).length &&
                e(v).owlCarousel({
                    loop: !0,
                    items: 2,
                    nav: !0,
                    dots: !1,
                    smartSpeed: 700,
                    autoplay: !1,
                    margin: 30,
                    navText: [
                        '<i class="la la-angle-left"></i>',
                        '<i class="la la-angle-right"></i>',
                    ],
                    responsive: { 0: { items: 1 }, 900: { items: 2 } },
                }),
            e(f).length &&
                e(f).owlCarousel({
                    loop: !0,
                    items: 3,
                    nav: !0,
                    dots: !0,
                    smartSpeed: 700,
                    autoplay: !1,
                    margin: 30,
                    navText: [
                        '<i class="la la-long-arrow-left"></i>',
                        '<i class="la la-long-arrow-right"></i>',
                    ],
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 },
                    },
                }),
            e(w).length &&
                e(w).fancybox({ buttons: ["share", "fullScreen", "close"] }),
            e(b).length &&
                e(b).fancybox({
                    buttons: [
                        "share",
                        "slideShow",
                        "fullScreen",
                        "download",
                        "thumbs",
                        "close",
                    ],
                }),
            e(y).length &&
                e(y).ripples({
                    resolution: 500,
                    dropRadius: 20,
                    perturbance: 0,
                }),
            e(k).length && e(k).masonry({}),
            e(C).length &&
                e(C).slider({
                    range: !0,
                    min: 0,
                    max: 1e3,
                    values: [40, 800],
                    slide: function (t, l) {
                        e(T).val("$" + l.values[0] + " - $" + l.values[1]);
                    },
                }),
            e(T).val(
                "$" +
                    e(C).slider("values", 0) +
                    " - $" +
                    e(C).slider("values", 1)
            ),
            e(x).length &&
                e(x).slider({
                    range: !0,
                    min: 0,
                    max: 1e3,
                    values: [40, 800],
                    slide: function (t, l) {
                        e(S).val("$" + l.values[0] + " - $" + l.values[1]);
                    },
                }),
            e(S).val(
                "$" +
                    e(x).slider("values", 0) +
                    " - $" +
                    e(x).slider("values", 1)
            ),
            e(D).length &&
                e(D).daterangepicker({
                    opens: "right",
                    locale: { format: "DD/MM/YYYY" },
                }),
            e(Y).length &&
                e(Y).daterangepicker({
                    singleDatePicker: !0,
                    opens: "right",
                    locale: { format: "DD/MM/YYYY" },
                }),
            e($).length &&
                e($).selectpicker({
                    liveSearch: !0,
                    liveSearchPlaceholder: "Search",
                    liveSearchStyle: "contains",
                    size: 5,
                }),
            M.length && M.countTo({ speed: 1200 }),
            e('[data-toggle="tooltip"]').length &&
                e('[data-toggle="tooltip"]').tooltip(),
            l.on("click", ".add-flight-btn", function () {
                e(".multi-flight-field").length < 3 &&
                    e(".multi-flight-field:last")
                        .clone()
                        .insertAfter(".multi-flight-field:last"),
                    e(this)
                        .closest(".multi-flight-wrap")
                        .find(".multi-flight-field:last")
                        .children(".multi-flight-delete-wrap")
                        .show(),
                    e(".date-multi-picker").daterangepicker("destroy");
                var t = 0;
                e(".date-multi-picker").each(function () {
                    e(this)
                        .attr("id", "date" + t)
                        .daterangepicker({
                            singleDatePicker: !0,
                            opens: "right",
                            local: { format: "DD/MM/YYYY" },
                        }),
                        t++;
                });
            }),
            l.on("click", ".multi-flight-remove", function () {
                e(".multi-flight-remove")
                    .closest(".multi-flight-wrap")
                    .find(".multi-flight-field")
                    .not(":first")
                    .last()
                    .remove();
            }),
            l.on("click", ".toggle-menu > li .toggle-menu-icon", function (t) {
                return (
                    t.preventDefault(),
                    e(this)
                        .closest("li")
                        .siblings()
                        .removeClass("active")
                        .find(".toggle-drop-menu, .dropdown-menu-item")
                        .slideUp(200),
                    e(this)
                        .closest("li")
                        .toggleClass("active")
                        .find(".toggle-drop-menu, .dropdown-menu-item")
                        .slideToggle(200),
                    !1
                );
            }),
            e(".dropdown-btn").on("click", function (t) {
                t.preventDefault(),
                    e(this).next(".dropdown-menu-wrap").slideToggle(300),
                    t.stopPropagation();
            }),
            l.on("click", function (t) {
                var l = e(".dropdown-contain");
                l === t.target ||
                    l.has(t.target).length ||
                    e(".dropdown-menu-wrap").slideUp(300);
            }),
            e(".progressbar-line").each(function () {
                e(this)
                    .find(".progressbar-line-item")
                    .animate({ width: e(this).attr("data-percent") }, 6e3);
            }),
            e(P).length &&
                e(P).owlCarousel({
                    center: !0,
                    items: 2,
                    nav: !0,
                    dots: !1,
                    loop: !0,
                    margin: 10,
                    smartSpeed: 500,
                    navText: [
                        '<i class="la la-long-arrow-left"></i>',
                        '<i class="la la-long-arrow-right"></i>',
                    ],
                    responsive: {
                        0: { items: 1, autoplay: !0 },
                        576: { items: 2 },
                    },
                }),
            l.on("click", ".recommended-tag", function () {
                e(this).addClass("active"),
                    e(".undo-btn").addClass("active"),
                    e(this).siblings().removeClass("active");
            }),
            l.on("click", ".undo-btn", function () {
                e(this).removeClass("active"),
                    e(".recommended-tag").removeClass("active");
            }),
            l.on("click", ".paste-btn", function (t) {
                t.preventDefault(), e("#resume_text").toggle();
            });
    });
})(jQuery);
