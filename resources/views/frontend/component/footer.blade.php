<div id="footer" class="footer">
    <button id="backToTopBtn" title="Go to top" style="display: none">
    <span class="glyphicon glyphicon-circle-arrow-up"></span>
    </button>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var button = document.getElementById("backToTopBtn");
        window.onscroll = function () {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            button.style.display = "block";
        } else {
            button.style.display = "none";
        }
        };
        button.onclick = function () {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        };
    });
    </script>
    <div class="container">
    <div class="xs col-sm-5">
        <img width="210" height="30" object-fit:="" cover;"=""
            data-pagespeed-url-hash="2275875320"
            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
            src="data:image/webp;base64,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">
    </div>
    <ul class="col-xs-12 col-sm-7 list-unstyled">
        Website&nbsp;<a
            title="đọc truyện online"
            href="https://nettruyen88.net/"
            >đọc truyện</a
            >&nbsp;online chất lượng hàng đầu việt nam, với nhiều&nbsp;<a
            title="Truyện Tiên Hiệp"
            href="https://nettruyen88.net/tien-hiep/"
            >truyện tiên hiệp</a
            >,&nbsp;<a
            title="Truyện Kiếm Hiệp"
            href="https://nettruyen88.net/kiem-hiep/"
            >truyện kiếm hiệp</a
            >,&nbsp;<a
            title="truyen ngon tinh"
            href="https://nettruyen88.net/ngon-tinh/"
            >truyện ngôn tình</a
            >,&nbsp;<a
            title="truyen teen"
            href="https://nettruyen88.net/truyen-teen/"
            >truyện teen</a
            >,&nbsp;<a
            title="Truyện Đô Thị"
            href="https://nettruyen88.net/do-thi/"
            >truyện đô thị</a
            >&nbsp;được tác giả và dịch giả chọn lọc và đăng tải. Truy cập website
        nghĩa là bạn đã đồng ý với các quy định và điều khoản của chúng tôi.
        Vui lòng đọc kỹ các thông tin liên quan ở phía dưới. &nbsp;
        <a
            title="Privacy Policy"
            href="https://nettruyen88.net/privacy-policy/"
            rel="nofollow"
            >Chính sách bảo mật</a
            >&nbsp;&nbsp; - &nbsp;<a
            title="Terms"
            href="https://nettruyen88.net/terms/"
            rel="nofollow"
            >Điều khoản sử dụng</a
            >&nbsp;&nbsp; - &nbsp;<a
            title="Content Rules"
            href="https://nettruyen88.net/content-rules/"
            rel="nofollow"
            >Quy định về nội dung</a
            >&nbsp;&nbsp; - &nbsp;<a
            title="DMCA Guidelines"
            href="https://nettruyen88.net/doi-voi-chu-so-huu-ban-quyen/"
            rel="nofollow"
            >Vấn đề bản quyền</a
            >&nbsp;&nbsp; - &nbsp;<a
            title="Privacy agreement"
            href="https://nettruyen88.net/privacy-agreement/"
            rel="nofollow"
            >Thỏa thuận quyền riêng tư</a
            >
        Website hoạt động dưới&nbsp;<a
            href="http://creativecommons.org/licenses/by/4.0/"
            rel="license"
            >Giấy phép truy cập mở Creative Commons Attribution 4.0
        International License.</a
            >.
    </ul>
    </div>
</div>