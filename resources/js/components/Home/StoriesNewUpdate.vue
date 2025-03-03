<template>
        <!-- Phần Truyện Mới Cập Nhật -->
  <div class="section 2">
    <div class="home">
      <h2 class="list-new">&nbsp;Truyện Mới Cập Nhật</h2>
      <div class="list list-side list-truyen col-xs-12 col-sm-12 col-md-8 col-truyen-main col-main-1 moi_cap_nhat" id="truyen-slide">
        <ul class="truyenhot_ul_customcol">
          <li v-for="story in storyNewUpdate" :key="story.id" class="truyenhot_li_customcol" itemscope itemtype="http://schema.org/Book">
            <div class="list-nowrap new-update">
              <img width="33" height="33" :src="story.s_avatar" class="small-img wp-post-image" :alt="story.s_name" />
              <h3 itemprop="name">
                <a :href="getStoryUrl(story.s_slug)" itemprop="url" :title="story.s_name">{{ story.s_name }}</a>
              </h3>
              <span class="list-truyen-chitiet">
                <span title="" class="can-phai update_cate">
                  <a itemprop="genre" :href="getStoryUrl(story.s_slug)" :title="story.category_name">{{ story.category_name }}</a>
                </span>
                <span class="can-phai tien_to_full update_chap">
                  <!-- <a class="text-primary" :title="`${story.s_name} - ${story.chapter.c_name || ''}`"  :href="`/truyen/${story.s_slug}/chuong/${story.chapter.c_slug || ''}`">
                      <span class="chapter-text">{{ story.chapter.c_name || '' }}</span>
                  </a> -->
                  <!-- <a href="#">Chương 1</a> -->
                </span>
                <span class="update_time">2 tháng trước</span>
              </span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
  
  <script>
  export default {
    props: ['storyNewUpdate'],
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