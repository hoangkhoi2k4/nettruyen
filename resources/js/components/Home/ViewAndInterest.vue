<template>
    <div class="container" id="intro-index">
        <div class="section 3">
        <div class="home-ranking py-4" style="margin-bottom: 30px">
            <div class="row">
                <div class="col-md-4 index-top">
                    <!-- Truyện xem nhiều tuần -->
                    <section class="section" style="margin-bottom: 30px; padding: 10px" >
                    <div class="d-flex align-items-center py-1">
                        <h2 class="m-rank-title">Xem nhiều tuần</h2>
                    </div>
                    <ul class="list-unstyled list-ranking m-0">
                        <div v-for="(story, index) in storyView" :key="story.id">
                            <li v-if="index === 0" class="item item-featured">
                                <div :class="`index index-${index + 1}`">
                                    <i class="svg-icon icon-medal-1"></i>
                                </div>
                                <div class="content media align-items-center py-1">
                                    <div class="info py-3">
                                        <h2 class="mb-1 fz-body text-overflow-1-lines">
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{story.s_name}}</a>
                                        </h2>
                                    <div class="d-flex align-items-center mb-2 text-success" >
                                        <span class="mr-2">{{ story.s_view }}</span>
                                    </div>
                                    <div class="d-flex align-items-center text-secondary fz-13 mb-1 text-overflow-1-lines" >
                                        <a itemprop="author" href="#" title="Tiểu Tinh" >
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" >
                                                <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" ></path>
                                            </svg>
                                            {{ story.s_auth_name }}
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center text-secondary fz-13 text-overflow-1-lines" >
                                        <a itemprop="genre" href="#" :title="story.category_name" >{{ story.category_name }}</a >
                                    </div>
                                    </div>
                                    <div class="thumb ml-auto pr-3 py-3">
                                    <div class="book-cover">
                                        <a :href="getStoryUrl(story.s_slug)" :title="story.s_name" class="book-cover-link" >
                                        <img :src="story.s_avatar" :alt="story.s_name" data-pagespeed-url-hash="1144194848" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a ><span class="book-cover-shadow"></span>
                                    </div>
                                    </div>
                                </div>
                            </li>
                            <li v-else-if="index === 1" class="item item-featured">
                                <div :class="`index index-${index + 1}`">
                                    <i class="svg-icon icon-medal-2"></i>
                                </div>
                                <div class="content media align-items-center py-1">
                                    <div class="media-body py-2">
                                        <h2 class="m-0 fz-body font-weight-normal pr-3 text-overflow-1-lines" >
                                            :<a href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name }}</a >
                                        </h2>
                                    </div>
                                    <div class="n">
                                    <span class="text-secondary">{{ story.s_view }}</span>
                                    </div>
                                </div>
                            </li>
                            <li v-else-if="index === 2" class="item item-featured">
                                <div :class="`index index-${index + 1}`">
                                    <i class="svg-icon icon-medal-3"></i>
                                </div>
                                <div class="content media align-items-center py-1">
                                    <div class="media-body py-2">
                                        <h2 class="m-0 fz-body font-weight-normal pr-3 text-overflow-1-lines" >
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name }}</a >
                                        </h2>
                                    </div>
                                    <div class="n">
                                    <span class="text-secondary">{{ story.s_view }}</span>
                                    </div>
                                </div>
                            </li>
                            <li v-else class="item item-featured">
                                <div :class="`index index-${index + 1}`">{{ index + 1 }}</div>
                                <div class="content media align-items-center py-1">
                                    <div class="media-body py-2">
                                        <h2 class="m-0 fz-body font-weight-normal pr-3 text-overflow-1-lines" >
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name }}</a >
                                        </h2>
                                    </div>
                                    <div class="n">
                                    <span class="text-secondary">{{ story.s_view }}</span>
                                    </div>
                                </div>
                            </li>

                        </div>
                    </ul>
                    </section>
                </div>
                <div class="col-md-4 index-top">
                    <!-- Truyện đánh giá cao -->
                    <section class="section" style="margin-bottom: 30px; padding: 10px" >
                    <div class="d-flex align-items-center py-1">
                        <h2 class="m-rank-title">Đánh giá Cao</h2>
                    </div>
                    <ul class="list-unstyled list-ranking m-0">
                        <div v-for="(story, index) in storyRating" :key="story.id">
                            <li v-if="index === 0" class="item item-featured">
                                <div :class="`index index-${index + 1}`">
                                    <i class="svg-icon icon-medal-1"></i>
                                </div>
                                <div class="content media align-items-center py-1">
                                    <div class="info py-3">
                                        <h2 class="mb-1 fz-body text-overflow-1-lines">
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name }}</a >
                                        </h2>
                                    <div class="d-flex align-items-center mb-2 text-success" >
                                        <span class="mr-2">
                                            <span class="text-secondary">5.0
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" >
                                                <path d="M320 376.4l.1-.1 26.4 14.1 85.2 45.5-16.5-97.6-4.8-28.7 20.7-20.5 70.1-69.3-96.1-14.2-29.3-4.3-12.9-26.6L320.1 86.9l-.1 .3V376.4zm175.1 98.3c2 12-3 24.2-12.9 31.3s-23 8-33.8 2.3L320.1 439.8 191.8 508.3C181 514 167.9 513.1 158 506s-14.9-19.3-12.9-31.3L169.8 329 65.6 225.9c-8.6-8.5-11.7-21.2-7.9-32.7s13.7-19.9 25.7-21.7L227 150.3 291.4 18c5.4-11 16.5-18 28.8-18s23.4 7 28.8 18l64.3 132.3 143.6 21.2c12 1.8 22 10.2 25.7 21.7s.7 24.2-7.9 32.7L470.5 329l24.6 145.7z" ></path>
                                                </svg>
                                            </span>
                                        </span>
                                        <i class="svg-icon icon-candy"></i>
                                    </div>
                                    <div class="d-flex align-items-center text-secondary fz-13 mb-1 text-overflow-1-lines" >
                                        <a itemprop="author" href="#" :title="story.s_auth_name" >
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" >
                                                <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" ></path>
                                            </svg>
                                            {{ story.s_auth_name }}
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center text-secondary fz-13 text-overflow-1-lines" >
                                        <a itemprop="genre" href="#" :title=" story.category_name " >{{ story.category_name }}</a >
                                    </div>
                                    </div>
                                    <div class="thumb ml-auto pr-3 py-3">
                                    <div class="book-cover">
                                        <a :href="getStoryUrl(story.s_slug)" title="" class="book-cover-link" >
                                        <img :src="story.s_avatar" :alt="story.s_name" data-pagespeed-url-hash="3418946847" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a ><span class="book-cover-shadow"></span>
                                    </div>
                                    </div>
                                </div>
                            </li>
                            <li v-else-if="index === 1" class="item">
                                <div :class="`index index-${index + 1}`">
                                    <i class="svg-icon icon-medal-2"></i>
                                </div>
                                <div class="content media align-items-center py-1">
                                    <div class="media-body py-2">
                                        <h2 class="m-0 fz-body font-weight-normal pr-3 text-overflow-1-lines" >
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name }}</a >
                                        </h2>
                                    </div>
                                    <div class="n">
                                    <span class="text-secondary" > 5.0
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" >
                                            <path d="M320 376.4l.1-.1 26.4 14.1 85.2 45.5-16.5-97.6-4.8-28.7 20.7-20.5 70.1-69.3-96.1-14.2-29.3-4.3-12.9-26.6L320.1 86.9l-.1 .3V376.4zm175.1 98.3c2 12-3 24.2-12.9 31.3s-23 8-33.8 2.3L320.1 439.8 191.8 508.3C181 514 167.9 513.1 158 506s-14.9-19.3-12.9-31.3L169.8 329 65.6 225.9c-8.6-8.5-11.7-21.2-7.9-32.7s13.7-19.9 25.7-21.7L227 150.3 291.4 18c5.4-11 16.5-18 28.8-18s23.4 7 28.8 18l64.3 132.3 143.6 21.2c12 1.8 22 10.2 25.7 21.7s.7 24.2-7.9 32.7L470.5 329l24.6 145.7z" ></path>
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li v-else-if="index === 2" class="item">
                                <div :class="`index index-${index + 1}`">
                                    <i class="svg-icon icon-medal-3"></i>
                                </div>
                                <div class="content media align-items-center py-1">
                                    <div class="media-body py-2">
                                        <h2 class="m-0 fz-body font-weight-normal pr-3 text-overflow-1-lines" >
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name}}</a >
                                        </h2>
                                    </div>
                                    <div class="n">
                                    <span class="text-secondary">5.0
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" >
                                            <path d="M320 376.4l.1-.1 26.4 14.1 85.2 45.5-16.5-97.6-4.8-28.7 20.7-20.5 70.1-69.3-96.1-14.2-29.3-4.3-12.9-26.6L320.1 86.9l-.1 .3V376.4zm175.1 98.3c2 12-3 24.2-12.9 31.3s-23 8-33.8 2.3L320.1 439.8 191.8 508.3C181 514 167.9 513.1 158 506s-14.9-19.3-12.9-31.3L169.8 329 65.6 225.9c-8.6-8.5-11.7-21.2-7.9-32.7s13.7-19.9 25.7-21.7L227 150.3 291.4 18c5.4-11 16.5-18 28.8-18s23.4 7 28.8 18l64.3 132.3 143.6 21.2c12 1.8 22 10.2 25.7 21.7s.7 24.2-7.9 32.7L470.5 329l24.6 145.7z" ></path>
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li v-else class="item">
                                <div :class="`index index-${index + 1}`">{{ index + 1 }}</div>
                                <div class="content media align-items-center py-1">
                                    <div class="media-body py-2">
                                        <h2 class="m-0 fz-body font-weight-normal pr-3 text-overflow-1-lines" >
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name}}</a >
                                        </h2>
                                    </div>
                                    <span class="text-secondary">
                                    5.0
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" >
                                        <path d="M320 376.4l.1-.1 26.4 14.1 85.2 45.5-16.5-97.6-4.8-28.7 20.7-20.5 70.1-69.3-96.1-14.2-29.3-4.3-12.9-26.6L320.1 86.9l-.1 .3V376.4zm175.1 98.3c2 12-3 24.2-12.9 31.3s-23 8-33.8 2.3L320.1 439.8 191.8 508.3C181 514 167.9 513.1 158 506s-14.9-19.3-12.9-31.3L169.8 329 65.6 225.9c-8.6-8.5-11.7-21.2-7.9-32.7s13.7-19.9 25.7-21.7L227 150.3 291.4 18c5.4-11 16.5-18 28.8-18s23.4 7 28.8 18l64.3 132.3 143.6 21.2c12 1.8 22 10.2 25.7 21.7s.7 24.2-7.9 32.7L470.5 329l24.6 145.7z" ></path>
                                    </svg>
                                    </span>
                                </div>
                            </li>
                        </div>
                    </ul>
                    </section>
                </div>
                <div class="col-md-4 index-top">
                    <section class="section" style="margin-bottom: 30px; padding: 10px" >
                    <!-- Truyện quan tâm nhiều -->
                    <div class="d-flex align-items-center py-1">
                        <h2 class="m-rank-title">Quan Tâm Nhiều</h2>
                    </div>
                    <ul class="list-unstyled list-ranking m-0">
                        <div v-for="(story, index) in storyInterest" :key="story.id">
                            <li v-if="index === 0" class="item item-featured">
                                <div :class="`index index-${index + 1}`">
                                    <i class="svg-icon icon-medal-1"></i>
                                </div>
                                <div class="content media align-items-center py-1">
                                    <div class="info py-3">
                                        <h2 class="mb-1 fz-body text-overflow-1-lines">
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name }}</a >
                                        </h2>
                                    <div class="d-flex align-items-center mb-2 text-success" >
                                        <span class="mr-2">25</span>
                                        <i class="svg-icon icon-candy"></i>
                                    </div>
                                    <div class="d-flex align-items-center text-secondary fz-13 mb-1 text-overflow-1-lines" >
                                        <a itemprop="author" href="#" title="" >
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" >
                                                <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" ></path>
                                            </svg>
                                            {{ story.s_auth_name}}
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center text-secondary fz-13 text-overflow-1-lines" >
                                        <a itemprop="genre" href="#" :title=" story.category_name " >{{ story.category_name }}</a >
                                    </div>
                                    </div>
                                    <div class="thumb ml-auto pr-3 py-3">
                                    <div class="book-cover">
                                        <a :href="getStoryUrl(story.s_slug)" :title="story.s_name" class="book-cover-link" >
                                        <img :src="story.s_avatar" :alt="story.s_name" data-pagespeed-url-hash="1629561404" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a ><span class="book-cover-shadow"></span>
                                    </div>
                                    </div>
                                </div>
                            </li>
                            <li v-else-if="index === 1" class="item">
                                <div :class="`index index-${index + 1}`">
                                    <i class="svg-icon icon-medal-2"></i>
                                </div>
                                <div class="content media align-items-center py-1">
                                    <div class="media-body py-2">
                                        <h2 class="m-0 fz-body font-weight-normal pr-3 text-overflow-1-lines" >
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name}}</a >
                                        </h2>
                                    </div>
                                    <div class="n">
                                    <span class="text-secondary">15</span>
                                    </div>
                                </div>
                            </li>
                            <li v-else-if="index === 2" class="item">
                                <div :class="`index index-${index + 1}`">
                                    <i class="svg-icon icon-medal-3"></i>
                                </div>
                                <div class="content media align-items-center py-1">
                                    <div class="media-body py-2">
                                        <h2 class="m-0 fz-body font-weight-normal pr-3 text-overflow-1-lines" >
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name}}</a >
                                        </h2>
                                    </div>
                                    <div class="n">
                                    <span class="text-secondary">10</span>
                                    </div>
                                </div>
                            </li>
                            <li v-else class="item">
                                <div :class="`index index-${index + 1}`">{{ index + 1 }}</div>
                                <div class="content media align-items-center py-1">
                                    <div class="media-body py-2">
                                        <h2 class="m-0 fz-body font-weight-normal pr-3 text-overflow-1-lines" >
                                            <a :href="getStoryUrl(story.s_slug)" class="d-block" >{{ story.s_name}}</a >
                                        </h2>
                                    </div>
                                    <span class="text-secondary">10</span>
                                </div>
                            </li>
                        </div>
                    </ul>
                    </section>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container" id="intro-index">
        <div class="section 4">
            <h2 class="m-rank-title">Truyện Full</h2>
            <div class="de-cu" style="overflow: hidden">
                <div v-for="(story, index) in storyFull" :key="story.id" class="normal-image1" :class="`big-image${index + 1}`">
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
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
    return {
      storyView: [],
      storyRating: [],
      storyInterest: [],
      storyFull: []
    };
  },
  mounted() {
    axios.get('http://127.0.0.1:8000/api/home')
      .then(response => {
        this.storyView = response.data.storyView;
        this.storyRating = response.data.storyRating;
        this.storyInterest = response.data.storyInterest;
        this.storyFull = response.data.storyFull;
      })
      .catch(error => {
        console.error("Lỗi khi tải dữ liệu:", error);
      });
  },

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
}
</script>