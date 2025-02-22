<script>
    function getCookie(d) {
    d += "=";
    for (
        var b = decodeURIComponent(document.cookie).split(";"), c = [], a = 0;
        a < b.length;
        a++
    )
        0 == b[a].trim().indexOf(d) && (c = b[a].trim().split("="));
    return 0 < c.length ? c[1] : "";
    }
    var js_bgcolor = getCookie("bgcolor-cookie");
    "#232323" == js_bgcolor &&
    (document.getElementsByTagName("body")[0].className += " dark-theme");
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    function reShowChapterText() {
    $(".chapter-text").each(function (k, v) {
        if (isMobile) {
        var chapterText = $(this).html();
        chapterText = chapterText.replace("Chapter ", "C");
        chapterText = chapterText.replace("Volume ", "V");
        $(this).html(chapterText);
        }
    });
    }
    reShowChapterText();
</script>
<script>
    $(document).ready(function () {
    var translatedText = "Truy\u1ec7n \u0110ang \u0110\u1ecdc";
    var novels = $.cookie("novels_history");
    if (novels) novels = JSON.parse(novels);
    else novels = [];
    if (novels.length > 0) {
        novels = novels.slice(0, 5);
        $novelHistory = $("#novel-history-main");
        $novelHistory.append(
        '<div class="title-list"><h2 class="m-rank-title"><span class="glyphicon glyphicon-th-list"></span>' +
            translatedText +
            "</h4></div>"
        );
        for (var i in novels) {
        var novel = novels[i];
        var html =
            '<div class="row"><div class="col-xs-7 col-sm-6 col-md-8 col-title-history"><span class="glyphicon glyphicon-chevron-right"></span>';
        html +=
            ' <h3 itemprop="name"><a href="' +
            novel.url +
            '">' +
            novel.name +
            "</a></h3></div>";
        html += '<div class="col-xs-5 col-sm-6 col-md-4 text-info">';
        html +=
            '<a href="' +
            novel.chapter.url +
            '"><span class="chapter-text">' +
            novel.chapter.name +
            "</span></a></div>";
        html += "</div></div>";
        $novelHistory.append(html);
        }
        $novelHistory = $("#novel-history-sidebar");
        $novelHistory.append(
        '<div class="title-list"><h4 class="history-title"> ' +
            translatedText +
            "</h4></div>"
        );
        for (var i in novels) {
        var novel = novels[i];
        var html =
            '<div class="row history"><div class="col-md-5 col-lg-7 history"><span class="glyphicon glyphicon-chevron-right"></span>';
        html +=
            ' <h3 class ="history" itemprop="name"><a href="' +
            novel.url +
            '">' +
            novel.name +
            "</a></h3></div>";
        html += '<div class="col-md-7 col-lg-5 chapter-history">';
        html +=
            '<a class="history" href="' +
            novel.chapter.url +
            '"><span class="chapter-text his">' +
            novel.chapter.name +
            "</span></a></div>";
        html += "</div></div>";
        $novelHistory.append(html);
        }
    }
    });
</script>
<script id="kk-star-ratings-js-extra">
    var kk_star_ratings = {
    action: "kk-star-ratings",
    endpoint: "https:\/\/nettruyen88.net\/wp-admin\/admin-ajax.php",
    nonce: "09202f7756",
    };
</script>
<script id="kk-star-ratings-js">
    "use strict";
    !(function (t) {
    if ("loading" != document.readyState) return t();
    document.addEventListener("DOMContentLoaded", t);
    })(function () {
    var t = !1;
    Array.prototype.forEach.call(
        document.querySelectorAll(".kk-star-ratings"),
        function e(n) {
        function r(r) {
            var c = { rating: r.getAttribute("data-star") },
            i = JSON.parse(n.getAttribute("data-payload"));
            for (var s in i) c["payload[" + s + "]"] = i[s];
            !(function (e, n, r) {
            if (!t) {
                (t = !0),
                (e = Object.assign(
                    {
                    nonce: kk_star_ratings.nonce,
                    action: kk_star_ratings.action,
                    },
                    e
                ));
                var a = [];
                for (var o in e)
                a.push(
                    encodeURIComponent(o) + "=" + encodeURIComponent(e[o])
                );
                var c = new XMLHttpRequest();
                c.open("POST", kk_star_ratings.endpoint, !0),
                (c.onload = function () {
                    c.status >= 200 && c.status < 400
                    ? n(c.responseText, c)
                    : r(c.responseText, c);
                }),
                (c.onloadend = function () {
                    t = !1;
                }),
                c.setRequestHeader(
                    "Content-type",
                    "application/x-www-form-urlencoded; charset=UTF-8"
                ),
                c.send(a.join("&"));
            }
            })(
            c,
            function (t) {
                var r = (function (t) {
                var e = document.createElement("div");
                return (e.innerHTML = t.trim()), e.firstChild;
                })(t);
                n.parentNode.replaceChild(r, n),
                Array.prototype.forEach.call(o, function (t) {
                    t.removeEventListener("click", a);
                }),
                (n = null),
                e(r);
            },
            console.error
            );
        }
        function a(t) {
            t.preventDefault(), r(t.currentTarget);
        }
        var o = n.querySelectorAll("[data-star]");
        Array.prototype.forEach.call(o, function (t) {
            t.addEventListener("click", a);
        });
        }
    );
    });
</script>