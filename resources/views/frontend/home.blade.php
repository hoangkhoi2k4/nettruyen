{{-- @extends('frontend.main')
@section('content')
<div class="section 1">
   <h2 class="m-rank-title">Truyện Hot</h2>
   <div class="de-cu" style="overflow: hidden">
         @php
            dd($data['storyNew']);
         @endphp
         @php
             $cnt = 0
         @endphp
         @foreach ($data['storyHot'] as $story)
            @if($cnt == 0) 
            <div class="normal-image1 big-image1" itemscope="" itemtype="http://schema.org/Book">
               <div class="normal-image1-2 big-image1-2">
                  <a href="{{ route('get.story.by.slug', ['slug' => $story -> s_slug])}}" title="{{ $story -> s_name }}">
                  <span class="inside-item">
                  <span class="sticker-hot">Hot</span>
                  </span>
                  <img width="200" height="272" src="{{ $story -> s_avatar }}"/></a>
               </div>
               <div class="summary">
                  <div class="normal-image1-3 big-image1-3">
                     <div class="big-image1-4">
                        <a href="{{ route('get.story.by.slug', ['slug' => $story -> s_slug])}}" title="{{ $story -> s_name }}" itemprop="url">
                           <h3 itemprop="name">{{ $story -> s_name }}</h3>
                        </a>
                        <div class="kk_ratings_summary">
                           <div class="kk-star-ratings kksr-template" data-payload='{"id":"179986","slug":"default","ignore":"","reference":"template","align":"","class":"","count":"13","legendonly":"","readonly":"","score":"3.9","starsonly":"","valign":"","best":"5","gap":"5","greet":"Đánh giá truyện","legend":"3.9\/5","size":"15","title":"Độc Tôn Truyền Kỳ - Thanh Vân Môn","width":"75.5","_legend":"{score}\/{best}","font_factor":"1.25"}'>
                              <div class="kksr-stars">
                                 <div class="kksr-stars-inactive">
                                    <div class="kksr-star" data-star="1" style="padding-right: 5px">
                                       <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                                    </div>
                                    <div class="kksr-star" data-star="2" style="padding-right: 5px">
                                       <div class="kksr-icon" style="width: 15px; height: 15px">
                                       </div>
                                    </div>
                                    <div class="kksr-star" data-star="3" style="padding-right: 5px">
                                       <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                                    </div>
                                    <div class="kksr-star" data-star="4" style="padding-right: 5px">
                                       <div class="kksr-icon" style="width: 15px; height: 15px"></div>
                                    </div>
                                    <div class="kksr-star" data-star="5" style="padding-right: 5px">
                                       <div class="kksr-icon"   style="width: 15px; height: 15px"></div>
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
                                 3.9/5
                              </div>
                           </div>
                           <style>
                              .kk_ratings_summary {
                              margin-top: 5px;
                              }
                           </style>
                        </div>
                        <div class="chi-tiet luot-xem">
                           <span class="glyphicon glyphicon-eye-open chi-tiet-icon" ></span>
                           {{ $story -> s_view }} lượt xem
                        </div>
                        <div class="chi-tiet chuyen-muc">
                           <span class="glyphicon glyphicon-th-list chi-tiet-icon" ></span>
                           <a itemprop="genre" href="#" title="{{ $story -> category_name}}" >{{ $story -> category_name}}</a>
                        </div>
                     </div>
                     <div class="chi-tiet tt-status big-image1-5">
                        <span class="big-image1-hide glyphicon glyphicon-book chi-tiet-icon">
                        </span>
                        <small class="btn-xs label-primary">
                           <span class="hoan-thanh">TOP</span>
                           <span class="chapter-name">
                              <span class="mini-chap">{{$story -> s_total_chapter}} <span></span> Chương</span>
                           </span>
                        </small>
                     </div>
                  </div>
               </div>
            </div>
            @else
            <div class="normal-image1 big-image{{$cnt+1}}" itemscope="" itemtype="http://schema.org/Book">
               <div class="normal-image1-2 big-image{{$cnt+1}}-2">
                  <a href="{{ route('get.story.by.slug', ['slug' => $story -> s_slug])}}" title="{{ $story -> s_name }}">
                  <span class="inside-item">
                  <span class="sticker-hot">Hot</span>
                  </span>
                  <img width="200" height="272" src="{{ $story -> s_avatar }}"/>
                  </a>
               </div>
               <div class="summary">
                  <div class="normal-image1-3 big-image{{$cnt+1}}-3">
                     <div class="big-image{{$cnt+1}}-4">
                        <a href="{{ route('get.story.by.slug', ['slug' => $story -> s_slug])}}" title="{{ $story -> s_name }}" itemprop="url">
                           <h3 itemprop="name">{{ $story -> s_name }}</h3>
                        </a>
                        <div class="kk_ratings_summary">
                           <div class="kk-star-ratings kksr-template" data-payload='{"id":"158514","slug":"default","ignore":"","reference":"template","align":"","class":"","count":"46","legendonly":"","readonly":"","score":"4.4","starsonly":"","valign":"","best":"5","gap":"5","greet":"Đánh giá truyện","legend":"4.4\/5","size":"15","title":"{{ $story -> s_name }}","width":"85.5","_legend":"{score}\/{best}","font_factor":"1.25"}'>
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
                                 <div class="kksr-stars-active" style="width: 85.5px">
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
                                 4.4/5
                              </div>
                           </div>
                           <style>
                              .kk_ratings_summary {
                              margin-top: 5px;
                              }
                           </style>
                        </div>
                        <div class="chi-tiet luot-xem">
                           <span class="glyphicon glyphicon-eye-open chi-tiet-icon" ></span>
                           {{ $story -> s_view}} lượt xem
                        </div>
                        <div class="chi-tiet chuyen-muc">
                           <span class="glyphicon glyphicon-th-list chi-tiet-icon" ></span>
                           <a itemprop="genre" href="#" title="{{ $story -> category_name}}" >{{ $story -> category_name}}</a>
                        </div>
                     </div>
                     <div class="chi-tiet tt-status big-image2-5">
                        <span class="big-image1-hide glyphicon glyphicon-book chi-tiet-icon" ></span>
                        <small class="btn-xs label-primary">
                           <span class="hoan-thanh">TOP</span>
                           <span class="chapter-name" ><span class="mini-chap" >{{$story -> s_total_chapter}} <span></span> Chương
                           </span></span>
                        </small>
                     </div>
                  </div>
               </div>
            </div>

            @endif
            @php
                $cnt ++ 
            @endphp
         @endforeach
   </div>
</div>
<div class="section 2">
   <div class="home">
      <h2 class="list-new">&nbsp;Truyện Mới Cập Nhật</h2>
      <div class="list list-side list-truyen col-xs-12 col-sm-12 col-md-8 col-truyen-main col-main-1 moi_cap_nhat" id="truyen-slide" >
         <ul class="truyenhot_ul_customcol">
            @foreach ($data['storyNew'] as $story)
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="{{ $story -> s_avatar }}" class="small-img wp-post-image" alt="Hồi Đáp - tác giả Bi Bi" data-pagespeed-url-hash="3505792706" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="#" itemprop="url" title="{{ $story -> s_name }}" >{{ $story -> s_name }}</a>
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="#" title="Đô Thị" >{{ $story -> category_name }}</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="{{ $story -> s_name }} - {{ $story -> chapter['c_name'] }}" href="https://nettruyen88.net/tot-nghiep-phat-lao-ba-ta-thanh-ba-ba-cua-ban-gai-truoc/chuong-154-lam-tieu-tuyet-that-ac-doc-lao-thai-ba.html" >
                  <span class="chapter-text" >{{ $story -> chapter['c_name'] }}</span >
                  </a>
                  </span>
                  <span class="update_time">2 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            @endforeach
         </ul>
      </div>
   </div>
</div>
@endsection
@section('content-2')
<div class="section 5">
   <div class="home-ranking py-4" style="overflow: hidden; margin-bottom: 30px" >
      <div class="row">
         <div class="col-md-8 index-top">
            <h2 class="list-new">&nbsp;Truyện Mới</h2>
            <div class="list list-side list-truyen moi_cap_nhat" id="truyen-slide" >
               <ul class="truyenhot_ul_customcol">
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/10/ap1gczptnp2fymojq-gtve_dgblj4qs2u-1cjjnagtn3wp-_yausjy58arzbtbdrnzys532p587krfkyruklyouk8r7oagho0zyuxc1mcevhjskdm-i9va02ovgjplzed9cdnqatrmqrowy4t-3wh86s41pw215-h322-s-no-gm-150x150.jpeg" class="small-img wp-post-image" alt="Thế Giới Song Song - Thỉnh Khiếu Ngã Sơn Đại Vương" data-pagespeed-url-hash="3034348567" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" srcset=" https://nettruyen88.net/wp-content/uploads/2024/10/49x49xap1gczptnp2fymojq-gtve_dgblj4qs2u-1cjjnagtn3wp-_yausjy58arzbtbdrnzys532p587krfkyruklyouk8r7oagho0zyuxc1mcevhjskdm-i9va02ovgjplzed9cdnqatrmqrowy4t-3wh86s41pw215-h322-s-no-gm-150x150.jpeg.pagespeed.ic.RVsMNxHpw6.webp 1.5x, https://nettruyen88.net/wp-content/uploads/2024/10/66x66xap1gczptnp2fymojq-gtve_dgblj4qs2u-1cjjnagtn3wp-_yausjy58arzbtbdrnzys532p587krfkyruklyouk8r7oagho0zyuxc1mcevhjskdm-i9va02ovgjplzed9cdnqatrmqrowy4t-3wh86s41pw215-h322-s-no-gm-150x150.jpeg.pagespeed.ic.nJk_F8Pnef.webp 2x, https://nettruyen88.net/wp-content/uploads/2024/10/ap1gczptnp2fymojq-gtve_dgblj4qs2u-1cjjnagtn3wp-_yausjy58arzbtbdrnzys532p587krfkyruklyouk8r7oagho0zyuxc1mcevhjskdm-i9va02ovgjplzed9cdnqatrmqrowy4t-3wh86s41pw215-h322-s-no-gm-150x150.jpe          3x "/>
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/the-gioi-song-song-thinh-khieu-nga-son-dai-vuong/" itemprop="url" title="Thế Giới Song Song - Thỉnh Khiếu Ngã Sơn Đại Vương"
                              >Thế Giới Song Song - Thỉnh Khiếu Ngã Sơn Đại
                           Vương</a
                              >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a nitemprop="genre" nhref="https://nettruyen88.net/he-thong/" ntitle="Hệ Thống" n>Hệ Thống</aitemprop= n>,
                        <a itemprop="genre" href="https://nettruyen88.net/mat-the/" title="Mạt Thế" >Mạt Thế</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Thế Giới Song Song - Thỉnh Khiếu Ngã Sơn Đại Vương - Chương 56: Huấn luyện thực chiến trong rừng 1" href="https://nettruyen88.net/the-gioi-song-song-thinh-khieu-nga-son-dai-vuong/chuong-56-huan-luyen-thuc-chien-trong-rung-1.html" >
                           <span class="chapter-text"
                              >Chương 56: H...
                           </span>
                        </a>
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/600-40-150x150.jpg" class="small-img wp-post-image" alt="{{ $story -> s_name }}" data-pagespeed-url-hash="3875584160" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/tot-nghiep-phat-lao-ba-ta-thanh-ba-ba-cua-ban-gai-truoc/" itemprop="url" title="{{ $story -> s_name }}" >Tốt Nghiệp Phát Lão Bà, Ta Thành Ba Ba Của Bạn Gái
                           Trước</a>
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <aitemprop= itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="{{ $story -> s_name }} - {{ $story -> chapter['c_name'] }}" href="https://nettruyen88.net/tot-nghiep-phat-lao-ba-ta-thanh-ba-ba-cua-ban-gai-truoc/chuong-154-lam-tieu-tuyet-that-ac-doc-lao-thai-ba.html" ><span class="chapter-text" >Chương 154:...
                        </span></a>
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/33x33xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no-150x150.jpeg.pagespeed.ic.Jy2zT0-Bu3.webp" class="small-img wp-post-image" alt="Ẩn Cư Ba Năm, Ra Ngục Thành Vô Địch" data-pagespeed-url-hash="3054192769" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" srcset=" https://nettruyen88.net/wp-content/uploads/2024/09/49x49xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no-150x150.jpeg.pagespeed.ic.VJ3F_7mzob.webp 1.5x, https://nettruyen88.net/wp-content/uploads/2024/09/66x66xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no-150x150.jpeg.pagespeed.ic.2RlXxdA4Cj.webp 2x, https://nettruyen88.net/wp-content/uploads/2024/09/99x99xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no-150x150.jpeg.pagespeed.ic.hQz7Exoj6S.webp 3x, https://nettruyen88.net/wp-content/uploads/2024/09/xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no-150x150.jpeg.pagespeed.ic.HHGYQZ0tVj.webp      4.545x " />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/an-cu-ba-nam-ra-nguc-thanh-vo-dich/" itemprop="url" title="Ẩn Cư Ba Năm, Ra Ngục Thành Vô Địch" >Ẩn Cư Ba Năm, Ra Ngục Thành Vô Địch</a >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/kiem-hiep/" title="Kiếm hiệp" >Kiếm hiệp</a >,
                        <a itemprop="genre" href="https://nettruyen88.net/tien-hiep/" title="Tiên Hiệp" >Tiên Hiệp</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Ẩn Cư Ba Năm, Ra Ngục Thành Vô Địch - Chương 86" href="https://nettruyen88.net/an-cu-ba-nam-ra-nguc-thanh-vo-dich/chuong-86-114.html" ><span class="chapter-text">Chương 86 </span></a >
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/33x33xtreu-choc-hon-nhan-150x150.jpg.pagespeed.ic.F41axQPk0E.webp" class="small-img wp-post-image" alt="Trêu Chọc Hôn Nhân" data-pagespeed-url-hash="1890720279" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" srcset=" https://nettruyen88.net/wp-content/uploads/2024/09/49x49xtreu-choc-hon-nhan-150x150.jpg.pagespeed.ic.onCLsHbo9G.webp 1.5x, https://nettruyen88.net/wp-content/uploads/2024/09/66x66xtreu-choc-hon-nhan-150x150.jpg.pagespeed.ic.02mtZe_6pd.webp 2x, https://nettruyen88.net/wp-content/uploads/2024/09/99x99xtreu-choc-hon-nhan-150x150.jpg.pagespeed.ic.cmC-uXpi_G.webp 3x, https://nettruyen88.net/wp-content/uploads/2024/09/xtreu-choc-hon-nhan-150x150.jpg.pagespeed.ic.BbM2Dbzhs4.webp      4.545x " />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/treu-choc-hon-nhan/" itemprop="url" title="Trêu Chọc Hôn Nhân" >Trêu Chọc Hôn Nhân</a >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                        <a itemprop="genre" href="https://nettruyen88.net/ngon-tinh/" title="Ngôn Tình" >Ngôn Tình</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Trêu Chọc Hôn Nhân - Chương 82: 82: Ngọt Ngào Hàng Ngày 9" href="https://nettruyen88.net/treu-choc-hon-nhan/chuong-82-82-ngot-ngao-hang-ngay-9.html" ><span class="chapter-text" >Chương 82: 8...
                        </span></a>
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" class="small-img wp-post-image" alt="Tinh Tế Rách Nát Nữ Vương" data-pagespeed-url-hash="1639964593" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,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" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/tinh-te-rach-nat-nu-vuong/" itemprop="url" title="Tinh Tế Rách Nát Nữ Vương" >Tinh Tế Rách Nát Nữ Vương</a >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                        <a itemprop="genre" href="https://nettruyen88.net/huyen-huyen/" title="Huyền Huyễn" >Huyền Huyễn</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel">
                        <a title="Tinh Tế Rách Nát Nữ Vương - Chương 319: thiếu tấu" href="https://nettruyen88.net/tinh-te-rach-nat-nu-vuong/chuong-319-thieu-tau.html" ><span class="chapter-text" >Chương 319:...
                        </span></a>
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" class="small-img wp-post-image" alt="Võ Đạo Độc Tôn: Từ Hổ Gầm Kim Chung Tráo Bắt Đầu" data-pagespeed-url-hash="1116907961" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,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" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/vo-dao-doc-ton-tu-ho-gam-kim-chung-trao-bat-dau/" itemprop="url" title="Võ Đạo Độc Tôn: Từ Hổ Gầm Kim Chung Tráo Bắt Đầu" >Võ Đạo Độc Tôn: Từ Hổ Gầm Kim Chung Tráo Bắt Đầu</a >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/huyen-huyen/" title="Huyền Huyễn" >Huyền Huyễn</a >,
                        <a itemprop="genre" href="https://nettruyen88.net/kiem-hiep/" title="Kiếm hiệp" >Kiếm hiệp</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Võ Đạo Độc Tôn: Từ Hổ Gầm Kim Chung Tráo Bắt Đầu - Chương 417: người hào" href="https://nettruyen88.net/vo-dao-doc-ton-tu-ho-gam-kim-chung-trao-bat-dau/chuong-417-nguoi-hao.html" ><span class="chapter-text" >Chương 417:...
                        </span></a>
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" class="small-img wp-post-image" alt="Xuyên Thành 70 Pháo Hôi Tức Phụ" data-pagespeed-url-hash="665138833" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,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" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/xuyen-thanh-70-phao-hoi-tuc-phu/" itemprop="url" title="Xuyên Thành 70 Pháo Hôi Tức Phụ" >Xuyên Thành 70 Pháo Hôi Tức Phụ</a >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/ngon-tinh/" title="Ngôn Tình" >Ngôn Tình</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Xuyên Thành 70 Pháo Hôi Tức Phụ - Chương 127: Đại kết cục (3)" href="https://nettruyen88.net/xuyen-thanh-70-phao-hoi-tuc-phu/chuong-127-dai-ket-cuc-3.html" ><span class="chapter-text" >Chương 127:...
                        </span></a>
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" class="small-img wp-post-image" alt="Hồi Đáp - tác giả Bi Bi" data-pagespeed-url-hash="2146774905" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,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" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/hoi-dap-tac-gia-bi-bi/" itemprop="url" title="Hồi Đáp - tác giả Bi Bi" >Hồi Đáp - tác giả Bi Bi</a >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                        <a itemprop="genre" href="https://nettruyen88.net/ngon-tinh/" title="Ngôn Tình" >Ngôn Tình</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Hồi Đáp - tác giả Bi Bi - Chương 22 - Đời đời bình an" href="https://nettruyen88.net/hoi-dap-tac-gia-bi-bi/chuong-22-doi-doi-binh-an.html" ><span class="chapter-text" >Chương 22 -...
                        </span></a>
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" class="small-img wp-post-image" alt="Người Qua Đường Nữ Xứng Bị Điên Mỹ Vai Ác Quấn Lên" data-pagespeed-url-hash="3007958088" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,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" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/nguoi-qua-duong-nu-xung-bi-dien-my-vai-ac-quan-len/" itemprop="url" title="Người Qua Đường Nữ Xứng Bị Điên Mỹ Vai Ác Quấn Lên" >Người Qua Đường Nữ Xứng Bị Điên Mỹ Vai Ác Quấn
                           Lên</a>
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/bach-hop/" title="Bách Hợp" >Bách Hợp</a >,
                        <a itemprop="genre" href="https://nettruyen88.net/dam-my/" title="Đam Mỹ" >Đam Mỹ</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Người Qua Đường Nữ Xứng Bị Điên Mỹ Vai Ác Quấn Lên - Chương 103" href="https://nettruyen88.net/nguoi-qua-duong-nu-xung-bi-dien-my-vai-ac-quan-len/chuong-103-102.html" ><span class="chapter-text">Chương 103 </span></a >
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/600-39-150x150.jpg" class="small-img wp-post-image" alt="Thần Điêu: Ta, Kiếm Tiên, Trấn Áp Thiên Hạ" data-pagespeed-url-hash="412922822" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/than-dieu-ta-kiem-tien-tran-ap-thien-ha/" itemprop="url" title="Thần Điêu: Ta, Kiếm Tiên, Trấn Áp Thiên Hạ" >Thần Điêu: Ta, Kiếm Tiên, Trấn Áp Thiên Hạ</a >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/kiem-hiep/" title="Kiếm hiệp" >Kiếm hiệp</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Thần Điêu: Ta, Kiếm Tiên, Trấn Áp Thiên Hạ - Chương 283: Ta sao có thể vứt bỏ" href="https://nettruyen88.net/than-dieu-ta-kiem-tien-tran-ap-thien-ha/chuong-283-ta-sao-co-the-vut-bo.html" ><span class="chapter-text" >Chương 283:...
                        </span></a>
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/khi-the-gioi-tro-thanh-tro-choi-bup-be-1-150x150.jpg" class="small-img wp-post-image" alt="Khi Thế Giới Trở Thành Trò Chơi Búp Bê" data-pagespeed-url-hash="3507673756" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/khi-the-gioi-tro-thanh-tro-choi-bup-be/" itemprop="url" title="Khi Thế Giới Trở Thành Trò Chơi Búp Bê" >Khi Thế Giới Trở Thành Trò Chơi Búp Bê</a >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                        <a itemprop="genre" href="https://nettruyen88.net/he-thong/" title="Hệ Thống" >Hệ Thống</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Khi Thế Giới Trở Thành Trò Chơi Búp Bê - Chương 136: C136: Xóa chữ thứ nhất" href="https://nettruyen88.net/khi-the-gioi-tro-thanh-tro-choi-bup-be/chuong-136-c136-xoa-chu-thu-nhat-3.html" ><span class="chapter-text" >Chương 136:...
                        </span></a>
                        </span>
                        <span class="update_time"> 3 tháng trước </span>
                        </span>
                     </div>
                  </li>
                  <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
                     <div class="list-nowrap new-novel">
                        <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/adcrehc3llthesya9oqdkxp9eapiwt2hkkjaqhs0o4ycza5xxij76uaq4ssn6qlrc6ytaitlk4ijw9ivah1zdm-ne4o0xy44fm9zscmql30pnqrawfdlsz5d0_zgw80jgebxi38q9gh2_kzhvm9ala4mb0orw215-h322-s-no-gm-150x150.jpeg" class="small-img wp-post-image" alt="Gả Cho Thế Tử Bệnh Tật" data-pagespeed-url-hash="333137734" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/ga-cho-the-tu-benh-tat/" itemprop="url" title="Gả Cho Thế Tử Bệnh Tật" >Gả Cho Thế Tử Bệnh Tật</a >
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <a itemprop="genre" href="https://nettruyen88.net/co-dai/" title="Cổ Đại" >Cổ Đại</a >,
                        <a itemprop="genre" href="https://nettruyen88.net/cung-dau/" title="Cung Đấu" >Cung Đấu</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Gả Cho Thế Tử Bệnh Tật - Chương 146: C146: Chương cuối" href="https://nettruyen88.net/ga-cho-the-tu-benh-tat/chuong-146-c146-chuong-cuoi.html" ><span class="chapter-text" >Chương 146:...
                        </span></a>
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
@endsection --}}

<!-- filepath: /c:/xampp/htdocs/nettruyen/resources/views/frontend/home.blade.php -->
@extends('frontend.main')

@section('content')
<div id="app">
   <home-component></home-component>
</div>
@vite(['resources/js/app.js'])
@endsection

@section('story-full-new')
<div id="app-story">
   <story-full-new-component></story-full-new-component>
</div>
@endsection