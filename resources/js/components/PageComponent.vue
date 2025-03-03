<template>
    <div class="site-content" style="height: auto !important;">
        <div class="profile-manga summary-layout-1">
            <div class="detail-bg">
                <img :src="story.s_avatar" class="img-responsive" style="" :alt="story.s_name"
                data-pagespeed-url-hash="808672838" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="tab-summary">
                            <div class="summary_image">
                                <img width="200" height="260" :src="story.s_avatar" class="img-responsive" style="" :alt="story.s_name"
                                data-pagespeed-url-hash="808672838" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" :srcset="story.s_avatar">
                            </div>
                            <div class="summary_content_wrap">
                                <div class="summary_content">
                                    <div class="post-content">
                                        <div class="single-title">
                                            <h1 class="single-title">{{ story.s_name }}</h1>
                                            <a id="toggleOrderBtn" onclick="toggleOrder()">
                                                <span class="glyphicon glyphicon-sort"></span>
                                            </a>
                                            <div class="list-info">
                                                <div class="rating-post">
                                                    <div class="kk-star-ratings kksr-template" data-payload="{&quot;id&quot;:&quot;378348&quot;,&quot;slug&quot;:&quot;default&quot;,&quot;ignore&quot;:&quot;&quot;,&quot;reference&quot;:&quot;template&quot;,&quot;align&quot;:&quot;&quot;,&quot;class&quot;:&quot;&quot;,&quot;count&quot;:&quot;4&quot;,&quot;legendonly&quot;:&quot;&quot;,&quot;readonly&quot;:&quot;&quot;,&quot;score&quot;:&quot;4.5&quot;,&quot;starsonly&quot;:&quot;&quot;,&quot;valign&quot;:&quot;&quot;,&quot;best&quot;:&quot;5&quot;,&quot;gap&quot;:&quot;5&quot;,&quot;greet&quot;:&quot;Đánh giá truyện&quot;,&quot;legend&quot;:&quot;4.5\/5&quot;,&quot;size&quot;:&quot;15&quot;,&quot;title&quot;:&quot;Cô Vợ Ngọt Ngào Có Chút Bất Lương (Vợ Mới Bất Lương Có Chút Ngọt)&quot;,&quot;width&quot;:&quot;87.5&quot;,&quot;_legend&quot;:&quot;{score}\/{best}&quot;,&quot;font_factor&quot;:&quot;1.25&quot;}">
                                                        <div class="kksr-stars">
                                                            <div class="kksr-stars-inactive">
                                                                <div class="kksr-star" data-star="1" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div>
                                                                <div class="kksr-star" data-star="2" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div>
                                                                <div class="kksr-star" data-star="3" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div>
                                                                <div class="kksr-star" data-star="4" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div>
                                                                <div class="kksr-star" data-star="5" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="kksr-stars-active" style="width: 87.5px;">
                                                                <div class="kksr-star" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div>
                                                                <div class="kksr-star" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div>
                                                                <div class="kksr-star" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div>
                                                                <div class="kksr-star" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div>
                                                                <!-- <div class="kksr-star" style="padding-right: 5px">
                                                                    <div class="kksr-icon" style="width: 15px; height: 15px;"></div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="kksr-legend" style="font-size: 12px;">
                                                            {{ story.vote_number }}/5 </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="genr">
                                                <a itemprop="genre" href="#" :title="story.category_name ">{{ story.category_name }}</a> 
                                            </div>
                                            <div class="list-info">
                                                <p class="info-item">
                                                    <i class="fa fa-user" aria-hidden="true"></i> Tác giả: <a class="author" itemprop="author" href="#" :title="story.s_auth_name ">{{ story.s_auth_name }}</a> </p>
                                                <p class="info-item">
                                                    <i class="fa fa-user" aria-hidden="true"></i> Nguồn:
                                                    <a class="source" itemprop="source" href="https://nettruyen88.net/nguon/san-truyen" title="Sàn Truyện">Sàn Truyện</a>, <a class="source" itemprop="source" href="https://nettruyen88.net/nguon/dich-ngon-tinh"
                                                    title="Dịch Ngôn Tình">Dịch Ngôn Tình</a>, <a class="source" itemprop="source" href="https://nettruyen88.net/nguon/group-dich-cac-the-loai-truyen-sung" title="Group Dịch Các Thể Loại Truyện Sủng">Group Dịch Các Thể Loại Truyện Sủng</a>,
                                                    <a class="source" itemprop="source" href="https://nettruyen88.net/nguon/truyen-full" title="Truyện FULL">Truyện FULL</a> </p>
                                                <p class="info-item">
                                                    <i class="fa fa-rss"></i> Tình trạng: <span class="label label-success">Hoàn thành </span>
                                                </p>
                                                <p class="info-item">
                                                    <i class="fa fa-refresh"></i> Cập nhật : 6 tháng trước </p>
                                                <p class="info-item">
                                                    <i class="fa fa-eye"></i> Lượt xem: {{ story.s_view }} </p>
                                                <a href="https://nettruyen88.net/co-vo-ngot-ngao-co-chut-bat-luong-vo-moi-bat-luong-co-chut-ngot/chuong-1-con-muon-tron-sao.html">
                                                    <button type="button" class="btn read"><span class="glyphicon glyphicon-circle-arrow-right"></span> Đọc Truyện</button>
                                                </a>
                                                <button type="button" class="btn bookmark">
                                                    <i class="fa fa-bookmark"></i>
                                                    <span class="wpfp-span"><img src="data:image/gif;base64,R0lGODlhEAAQALMMAKqooJGOhp2bk7e1rZ2bkre1rJCPhqqon8PBudDOxXd1bISCef///wAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQFAAAMACwAAAAAEAAQAAAET5DJyYyhmAZ7sxQEs1nMsmACGJKmSaVEOLXnK1PuBADepCiMg/DQ+/2GRI8RKOxJfpTCIJNIYArS6aRajWYZCASDa41Ow+Fx2YMWOyfpTAQAIfkEBQAADAAsAAAAABAAEAAABE6QyckEoZgKe7MEQMUxhoEd6FFdQWlOqTq15SlT9VQM3rQsjMKO5/n9hANixgjc9SQ/CgKRUSgw0ynFapVmGYkEg3v1gsPibg8tfk7CnggAIfkEBQAADAAsAAAAABAAEAAABE2QycnOoZjaA/IsRWV1goCBoMiUJTW8A0XMBPZmM4Ug3hQEjN2uZygahDyP0RBMEpmTRCKzWGCkUkq1SsFOFQrG1tr9gsPc3jnco4A9EQAh+QQFAAAMACwAAAAAEAAQAAAETpDJyUqhmFqbJ0LMIA7McWDfF5LmAVApOLUvLFMmlSTdJAiM3a73+wl5HYKSEET2lBSFIhMIYKRSimFriGIZiwWD2/WCw+Jt7xxeU9qZCAAh+QQFAAAMACwAAAAAEAAQAAAETZDJyRCimFqbZ0rVxgwF9n3hSJbeSQ2rCWIkpSjddBzMfee7nQ/XCfJ+OQYAQFksMgQBxumkEKLSCfVpMDCugqyW2w18xZmuwZycdDsRACH5BAUAAAwALAAAAAAQABAAAARNkMnJUqKYWpunUtXGIAj2feFIlt5JrWybkdSydNNQMLaND7pC79YBFnY+HENHMRgyhwPGaQhQotGm00oQMLBSLYPQ9QIASrLAq5x0OxEAIfkEBQAADAAsAAAAABAAEAAABE2QycmUopham+da1cYkCfZ94UiW3kmtbJuRlGF0E4Iwto3rut6tA9wFAjiJjkIgZAYDTLNJgUIpgqyAcTgwCuACJssAdL3gpLmbpLAzEQA7" alt="Loading" title="Loading" class="wpfp-hide wpfp-img" data-pagespeed-url-hash="1842005579" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><a class="wpfp-link" href="?wpfpaction=add&amp;postid=378348" title="Add to favorites" rel="nofollow">Add to favorites</a></span>                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-single">
                            <div class="tab">
                                <div class="tab-content">
                                    <button class="tablinks active" onclick="openCity(event, 'list-chapter')" id="defaultOpen">Danh sách </button>
                                </div>
                            </div>
                            <div id="list-chapter" class="tabcontent" style="display: block;">
                                <div class="col-xs-12 list-chapter-single" id="list-chapter-single">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <ul class="list-chapter">     
                                                <li v-for="chapter in story.chapters" :key="chapter.id" class="list-chapter">
                                                    <span class="glyphicon glyphicon-book"></span>
                                                    <a href="#" :title=" chapter.c_name ">
                                                        <span class="chapter-text chapter">{{ chapter.c_name }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="content" class="tabcontent" style="display: none;">
                                <p>Tên khác: Cô Vợ Bất Lương Có Chút Ngọt Ngào</p>
                                <p>“Khẩu vị của người này rốt cuộc ra sao a! Cái này cũng bỏ được vào miệng à?”</p>
                                <p>Sau khi cô tỉnh dậy, nhìn vào trong gương thấy chính mình đầu xăm mặt giống như quỷ, cảm giác chỉ nhìn thêm một giây cũng hỏng đôi mắt.</p>
                                <p>Trước khi trọng sinh, Cố Việt Trạch chính là người mà cô dùng cả tấm lòng để yêu nhưng sau đó cũng là người mà cô hận thấu xương.</p>
                                <p>Đời trước cô chính là kiểu phụ nữ não tàn nên mới không muốn lây một ông xã tuyệt sắc, lại bị đôi tiện nam nữ hãm hại, bị người bạn thân nhất tẩy não, kết cục cuối cùng chính là không còn người nào muốn ở gần cô.</p>
                                <p>Đời này mặc cho các ngươi trâu bò rắn rết trăm phương nghìn kế, muốn cô ly dị, nhường đi ngôi vị phu nhân. Ngượng ngùng quá ~~, chỉ số thông minh của bản tiểu thư đã lên dây rồi nhé!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        slug: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            story: []
        }
    },
    mounted() {
        axios.get(`http://127.0.0.1:8000/api/${this.slug}`)
            .then(response => {
                this.story = response.data.data;
            })
            .catch(error => {
                console.log("error");
            });
    }
}
</script>