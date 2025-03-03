<template>
    <div class="section 5">
        <div class="home-ranking py-4" style="overflow: hidden; margin-bottom: 30px" >
            <div class="row">
                <div class="col-md-8 index-top">
                    <h2 class="list-new">Truyện Mới</h2>
                    <div class="list list-side list-truyen moi_cap_nhat" id="truyen-slide" >
                        <ul class="truyenhot_ul_customcol">
                            <li v-for="story in storyNew" :key="story.id" class="truyenhot_li_customcol" itemtype="http://schema.org/Book" >
                                <div class="list-nowrap new-novel">
                                    <img width="33" height="33" :src="story.s_avatar" class="small-img wp-post-image" :alt="story.s_name" />
                                    <h3 itemprop="name">
                                        <a :href="getStoryUrl(story.s_slug)" itemprop="url" :title="story.s_name">{{ story.s_name }}</a>
                                    </h3>
                                    <span class="list-truyen-chitiet">
                                    <span title="" class="can-phai update_cate newnovel">
                                        <a itemprop="genre" :href="getStoryUrl(story.s_slug)" :title="story.category_name">{{ story.category_name }}</a>
                                    </span>
                                    <span class="can-phai tien_to_full update_chap new-novel" >
                                    <a title="Thế Giới Song Song - Thỉnh Khiếu Ngã Sơn Đại Vương - Chương 56: Huấn luyện thực chiến trong rừng 1" href="https://nettruyen88.net/the-gioi-song-song-thinh-khieu-nga-son-dai-vuong/chuong-56-huan-luyen-thuc-chien-trong-rung-1.html" >
                                    <span class="chapter-text">
                                            <!-- <a class="text-primary" :title="`${story.s_name} - ${story.chapter.c_name || ''}`"  :href="`/truyen/${story.s_slug}/chuong/${story.chapter.c_slug || ''}`">
                                                <span class="chapter-text">{{ story.chapter.c_name || '' }}</span>
                                            </a> -->
                                        <!-- <a href="#">Tên chương</a> -->
                                    </span>
                                    </a>
                                    </span>
                                    <span class="update_time"> 3 tháng trước </span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 index-top">
                    <div
                    id="novel-history-sidebar"
                    class="list list-truyen list-history col-xs-12"
                    ></div>
                    <h2 class="list-new">&nbsp;Blogs</h2>
                    <div id="novel-history-sidebar" class="list list-truyen">
                    <div class="row">No posts found</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['storyNew'],
    methods: {
        getStoryUrl(slug) {
        return `/${slug}`; 
        },
        truncatedName(name, maxLength) {
        if (name.length > maxLength) {
            return name.substring(0, maxLength) + '...';
        }
        return name;
        }
    }
};
</script>