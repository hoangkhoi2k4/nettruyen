<template>
     <div class="container" id="truyen-slide">
        <div class="main-home">
            <div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main" style="margin-bottom: 15px" >
               <div class="row">
                  <div class="list list-thumbnail col-xs-12">
                     <div class="row">
                        <div v-for="i in Math.ceil(stories.length / 2)" :key="i"  class="one-row">
                           <div class="col-md-3 col-sm-6 col-xs-6 home-truyendecu "itemtype="http://schema.org/Book" >
                              <div class="each_truyen">
                                 <a :href="getStoryUrl(stories[(i - 1) * 2].s_slug)" :title="stories[(i - 1) * 2].s_name" >
                                    <span class="thumb-inside-item"></span>
                                    <img width="205" height="279" :src="stories[(i - 1) * 2].s_avatar" class="attachment-image2 size-image2 wp-post-image" :alt="stories[(i - 1) * 2].s_name" itemprop="image" data-pagespeed-url-hash="1245582129" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" :srcset="`${stories[(i - 1) * 2].s_avatar} 1.5x `" />
                                 </a>
                              </div>
                              <div class="caption">
                                 <a :href="getStoryUrl(stories[(i - 1) * 2].s_slug)" :title="stories.s_name" itemprop="url" >
                                    <h3 itemprop="name">
                                       {{ stories[(i - 1) * 2].s_name }}
                                    </h3>
                                 </a>
                                 <div class="chi-tiet">
                                    <span class="star-score">0</span>
                                    <img src="data:image/webp;base64,UklGRrIAAABXRUJQVlA4TKYAAAAvV8ADEPcwo8M+FIrbSGqjd8AG8hcCcUHYKBA2AEIwLoyGCgAAHioGjI0LgRAMoOHDcSNJipTLzAxX/ht6O68yIKL/ApKEDgi94L8kJ5CXZDvAUlJKDZaSS3pj7CR5vUjSlmdWkuxVsF9hJBkVbAZ8JKsC7YCRJDr06YzASpLpUwpYSSp9qsBIEj49gZdklZ6uuaUdvCTXM8RA/7zgJWn5NMRYSUwD" alt="5 sao" data-pagespeed-url-hash="4186466851" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                                 </div>
                                 <div class="chi-tiet luot-xem">
                                    <span class="glyphicon glyphicon-eye-open chi-tiet-icon" ></span >Lượt xem: {{ stories[(i - 1) * 2].s_view }}
                                 </div>
                                 <div class="chi-tiet chuyen-muc">
                                    <span class="glyphicon glyphicon-th-list chi-tiet-icon" ></span>
                                    <a itemprop="genre" href="#" title="Bách Hợp" >{{ stories[(i - 1) * 2].category_name }}</a >
                                 </div>
                                 <div class="chi-tiet tt-status">
                                    <span class="glyphicon glyphicon-book chi-tiet-icon" ></span>
                                    <small class="btn-xs label-primary">
                                    <span class="chapter-name" ><span class="mini-chap" >{{ stories[(i - 1) * 2].s_total_chapter }} <span></span> </span></span ></small>
                                 </div>
                              </div>
                           </div>
                           <div v-if="stories[(i - 1) * 2 + 1]" class="col-md-3 col-sm-6 col-xs-6 home-truyendecu" itemtype="http://schema.org/Book" >
                              <div class="each_truyen">
                                 <a :href="getStoryUrl(stories[(i - 1) * 2 + 1].s_slug)" :title="stories[(i - 1) * 2 + 1].s_name" >
                                 <span class="thumb-inside-item"></span>
                                 <img width="205" height="279" :src="stories[(i - 1) * 2 + 1].s_avatar" class="attachment-image2 size-image2 wp-post-image" :alt="stories[(i - 1) * 2 + 1].s_name" itemprop="image" data-pagespeed-url-hash="1661210068" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" :srcset="`${stories[(i - 1) * 2 + 1].s_avatar} 1.5x `" /></a>
                              </div>
                              <div class="caption">
                                 <a :href="getStoryUrl(stories[(i - 1) * 2 + 1].s_slug)" :title="stories[(i - 1) * 2 + 1].s_name" itemprop="url" >
                                    <h3 itemprop="name">
                                       {{ stories[(i - 1) * 2 + 1].s_name}}
                                    </h3>
                                 </a>
                                 <div class="chi-tiet">
                                    <span class="star-score">0</span>
                                    <img src="data:image/webp;base64,UklGRrIAAABXRUJQVlA4TKYAAAAvV8ADEPcwo8M+FIrbSGqjd8AG8hcCcUHYKBA2AEIwLoyGCgAAHioGjI0LgRAMoOHDcSNJipTLzAxX/ht6O68yIKL/ApKEDgi94L8kJ5CXZDvAUlJKDZaSS3pj7CR5vUjSlmdWkuxVsF9hJBkVbAZ8JKsC7YCRJDr06YzASpLpUwpYSSp9qsBIEj49gZdklZ6uuaUdvCTXM8RA/7zgJWn5NMRYSUwD" alt="5 sao" data-pagespeed-url-hash="4186466851" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                                 </div>
                                 <div class="chi-tiet luot-xem">
                                    <span class="glyphicon glyphicon-eye-open chi-tiet-icon" ></span >Lượt xem: {{ stories[(i - 1) * 2 + 1].s_view }}
                                 </div>
                                 <div class="chi-tiet chuyen-muc">
                                    <span class="glyphicon glyphicon-th-list chi-tiet-icon" ></span>
                                    <a itemprop="genre" href="#" :title="stories[(i - 1) * 2 + 1].category_name" >{{ stories[(i - 1) * 2 + 1].category_name }}</a >
                                 </div>
                                 <div class="chi-tiet tt-status">
                                    <span class="glyphicon glyphicon-book chi-tiet-icon" ></span>
                                    <small class="btn-xs label-primary">
                                    <span class="chapter-name" ><span class="mini-chap" >{{ stories[(i - 1) * 2 + 1].s_total_chapter }} <span></span> </span></span ></small>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row category">
                  <div class="col-xs-12">
                     <div class="row" style="text-align: center">
                        <ul class="pagination pagination-sm">
                           <li class="active">
                              <a data-page="1" href="https://nettruyen88.net/bach-hop/">1</a>
                           </li>
                           <li>
                              <a data-page="2" href="https://nettruyen88.net/bach-hop/page/2/">2</a>
                           </li>
                           <li>
                              <a
                                 data-page="3"
                                 href="https://nettruyen88.net/bach-hop/page/3/"
                                 >3</a
                                 >
                           </li>
                           <li>
                              <a
                                 data-page="4"
                                 href="https://nettruyen88.net/bach-hop/page/4/"
                                 >4</a
                                 >
                           </li>
                           <li class="dropup page-nav">
                              <span href="javascript:void(0)" data-toggle="dropdown"
                                 >Chọn Trang <span class="caret"></span
                                 ></span>
                              <div
                                 class="dropdown-menu dropdown-menu-right"
                                 role="menu"
                                 >
                                 <form
                                    action="."
                                    name="page_jump"
                                    id="page_jump"
                                    method="get"
                                    >
                                    <div class="input-group">
                                       <input
                                          name="page_url"
                                          type="hidden"
                                          value="https://nettruyen88.net/bach-hop/"
                                          /><input
                                          class="form-control"
                                          name="page"
                                          type="number"
                                          placeholder="Số trang..."
                                          value=""
                                          />
                                       <span class="input-group-btn">
                                       <button class="btn btn-default" type="submit">
                                       Đi
                                       </button></span
                                          >
                                    </div>
                                 </form>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="hidden-xs hidden-sm col-md-3 text-center col-truyen-side">
            <div class="list list-truyen list-side col-xs-12 cate-info">
               <div class="title-list">
                  <h3>
                     <span class="glyphicon glyphicon-info-sign"></span>&nbsp; {{ cate_name }}
                  </h3>
               </div>
               <div class="row">
                  <p></p>
                  <p>Danh sách truyện: {{ cate_name }}</p>
                  <p></p>
               </div>
            </div>
            <div class="list list-truyen list-side col-xs-12">
               <div class="title-list">
                  <h4>
                     <span class="glyphicon glyphicon-th-list"></span>&nbsp;Thể Loại:
                  </h4>
               </div>
               <div class="index_cate row">
                  <div v-for="category in this.categories" :key="category.id" class="index-cate">
                     <a :href="getCategoryUrl(category.c_slug)" :title="category.c_name" >
                        <span class="glyphicon glyphicon-ok-sign"></span>{{ category.c_name }}
                    </a>
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
      },
      categories: {
         type: Array,
         required: true
      }
   },
   data() {
      return {
         stories: [],
         cate_name: ''
      }
   },
   mounted() {
      axios.get('/api/config')
         .then(response => {
         this.apiBaseUrl = response.data.api_base_url;
         return axios.get(`${this.apiBaseUrl}/category/${this.slug}`);
         })
         .then(response => {
               this.stories = response.data;
               this.stories = this.stories.data.data;
               // console.log(this.categories);
               for(let i = 0; i < this.categories.length; i++) {
                  if(this.categories[i].c_slug === this.slug) {
                     this.cate_name = this.categories[i].c_name;
                     break;
                  }
               }
               console.log(this.cate_name);
         })
         .catch(error => {
               console.log(error);
         })
   },
   methods: {
      getStoryUrl(url) {
         return `/${url}`;
      },
      getCategoryUrl(url) {
         return `/category/${url}`;
      }
   }
}
</script>