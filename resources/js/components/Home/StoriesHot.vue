<template>
  <div class="section 1">
    <h2 class="m-rank-title">Truyện Hot</h2>
    <div class="de-cu" style="overflow: hidden">
      <div v-for="(story, index) in storyHot" :key="story.id" class="normal-image1" :class="`big-image${index + 1}`">
        <div :class="`normal-image1-2 big-image${index + 1}-2`">
          <a :href="getStoryUrl(story.s_slug)" :title="story.s_name">
            <span class="inside-item">
              <span class="sticker-hot">Hot</span>
            </span>
            <img width="200" height="272" :src="story.s_avatar" />
          </a>
        </div>
        <div class="summary">
          <div :class="`normal-image1-3 big-image${index + 1}-3`">
            <div :class="`big-image${index + 1}-4`">
              <a :href="getStoryUrl(story.s_slug)" :title="story.s_name">
                <h3>{{ truncatedName(story.s_name, 26) }}</h3>
              </a>
              <div class="kk_ratings_summary" style="margin-top: 5px;">
                <div class="kk-star-ratings kksr-template" data-payload='{"id":"179986","slug":"default","ignore":"","reference":"template","align":"","class":"","count":"13","legendonly":"","readonly":"","score":"3.9","starsonly":"","valign":"","best":"5","gap":"5","greet":"Đánh giá truyện","legend":"3.9\/5","size":"15","title":"Độc Tôn Truyền Kỳ - Thanh Vân Môn","width":"75.5","_legend":"{score}\/{best}","font_factor":"1.25"}'>
                  <div class="kksr-stars">
                    <div class="kksr-stars-inactive">
                      <div class="kksr-star" data-star="1" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                      <div class="kksr-star" data-star="2" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                      <div class="kksr-star" data-star="3" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                      <div class="kksr-star" data-star="4" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                      <div class="kksr-star" data-star="5" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                    </div>
                    <div class="kksr-stars-active" style="width: 75.5px">
                      <div class="kksr-star" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                      <div class="kksr-star" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                      <div class="kksr-star" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                      <div class="kksr-star" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                      <div class="kksr-star" style="padding-right: 5px">
                        <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                      </div>
                    </div>
                  </div>
                  <div class="kksr-legend" style="font-size: 12px">
                    {{ story.vote_number}}/5
                  </div>
                </div>
              </div>
              <div class="chi-tiet luot-xem">
                <span class="glyphicon glyphicon-eye-open chi-tiet-icon"></span>
                {{ story.s_view }} lượt xem
              </div>
              <div class="chi-tiet chuyen-muc">
                <span class="glyphicon glyphicon-th-list chi-tiet-icon"></span>
                <a :href="'#'" :title="story.category_name">{{ story.category_name }}</a>
              </div>
            </div>
            <div class="chi-tiet tt-status big-image1-5">
              <span class="big-image1-hide glyphicon glyphicon-book chi-tiet-icon"></span>
              <small class="btn-xs label-primary">
                <span class="hoan-thanh">TOP</span>
                <span class="chapter-name">
                  <span class="mini-chap">{{ story.s_total_chapter }} Chương</span>
                </span>
              </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
  export default {
    props: ['storyHot'],
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