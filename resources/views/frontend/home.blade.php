@extends('frontend.main')
@section('content')
<div class="section 1">
   <h2 class="m-rank-title">Truyện Hot</h2>
   <div class="de-cu" style="overflow: hidden">
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
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/33x33x600-40.jpg.pagespeed.ic.EKknslvpQf.webp" class="small-img wp-post-image" alt="Tốt Nghiệp Phát Lão Bà, Ta Thành Ba Ba Của Bạn Gái Trước" data-pagespeed-url-hash="17428617" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" srcset=" https://nettruyen88.net/wp-content/uploads/2024/09/49x49x600-40.jpg.pagespeed.ic.N3IKh9_Qh-.webp 1.5x, https://nettruyen88.net/wp-content/uploads/2024/09/66x66x600-40.jpg.pagespeed.ic._hBVYynfdu.webp 2x, https://nettruyen88.net/wp-content/uploads/2024/09/99x99x600-40.jpg.pagespeed.ic.ZxhAsfbFdo.webp 3x, https://nettruyen88.net/wp-content/uploads/2024/09/x600-40.jpg.pagespeed.ic.jqpJHmSo5a.webp      9.091x " />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/tot-nghiep-phat-lao-ba-ta-thanh-ba-ba-cua-ban-gai-truoc/" itemprop="url" title="Tốt Nghiệp Phát Lão Bà, Ta Thành Ba Ba Của Bạn Gái Trước" >Tốt Nghiệp Phát Lão Bà, Ta Thành Ba Ba Của Bạn Gái
                     Trước</a>
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Tốt Nghiệp Phát Lão Bà, Ta Thành Ba Ba Của Bạn Gái Trước - Chương 154: Lâm Tiểu Tuyết: Thật ác độc lão thái bà" href="https://nettruyen88.net/tot-nghiep-phat-lao-ba-ta-thanh-ba-ba-cua-ban-gai-truoc/chuong-154-lam-tieu-tuyet-that-ac-doc-lao-thai-ba.html" >
                  <span class="chapter-text" >Chương 154: Lâm Tiểu Tuyết: Thật ác độc lão thái
                  bà</span >
                  </a>
                  </span>
                  <span class="update_time">2 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            {{-- <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" class="small-img wp-post-image" alt="Thế Giới Song Song - Thỉnh Khiếu Ngã Sơn Đại Vương" data-pagespeed-url-hash="132955282" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,UklGRpwFAABXRUJQVlA4IJAFAAAQGwCdASpjAGMAPm0ylkgkIqIhJfOamIANiWUA1MDILc1M/Zih52ix8oUmFgaarA0mtUz0w/uhjiVeThFqDkrKAWHRPVwh9g+vHVgE1SzHjlp6MxFKnkOfphsWdbej1Pv2dhKd/yODfwV8QBiRtY1oNgXBLps4PhuJ7nrbzFtnMMCuvxUj4CW77kSlER0q3ICtDGJ/T+AB2Hp0Yyiex2ziDk4dftAXhccng+yJu7133YWESV6hUcueFnHCElBCl7hzGAflmf0aPsW/HGcnQvx6jmNxz25zjpVjb92x3CGkFsAA/vxT6ZCVOHV3fw4WQ9hZhOXkOGPHWvFpfprn4+99OtjLJ/rkm7XJxOndPewDX98Mb4/7juu9OXSlj/auT5SntYgvKVkLmWM+ggTLgQjCxKz3MybwGvggoNxfFYYLQKqt3RCwXfXC3vZ7q5/89KlIAhSjwq49GxKP/GvIYzbi/m3KHf7nK3ZF7qkR2dWHb5jP1Cu8GY/W6wqa8O2qkVT/bP6b2QIYaRSXVkDdQVAT2WE9yIBgyoyHSWUCo2/DJ/+38YBVslfATUqa0i2GD3u7yy+FyVmlVlho5fxMIBJeXFgq3FY7Xt/TpmauBIMbdkODe9kruRM257z/AWSQKGWGGO9zAbAlRm1c3KXfjaN2jTmp407bZ5ekHdXSP6rbtLGZUWH3tjZFlQJ/08yXOeskIt4EIxmEbQWf65B1eu3BaPf7r+1WUwhWnZI6/cutJHXyiKj7CtEBnTPwhyjoCckhOQqTnukILMnAgrTrz5cC6JgC1jt/tdRe9V2DPSbLaRqQnN2kFxU46G4c9efOEtLO0j9tASqqE91/IBZnVpoFgHB+tSOwjwKP51v9YGJ4sQcEOj27DQyUJ82rVsq9p9d/yb0/Q74bROfiDyHgWdgmbomzwFXWyypBjbdUKEzv0SYzc5+znB7+8ETAx3qXO7FnfHSHZAJ+/aLsCLH23Ms2mZAHyWmZT6m+6CwbQaEuIbylXgxQPJRhvD2HkWqyRD/4TV6ZE9kRCjb+Ipq5k7epUYKNXptZdyuPx5cmVn9SAUhEgP8RUSUe/rt48PMTfU681sdTZNYxq3KdS73Bh9H5lapaBLnsKSne9Vsium10WgJp7g7DW37nxFzwGnwKb70SkAzqSdahV8Z0ZBvxP/NFJcJUAOxxinulbLYI+9vlLsHFM/kYaMaUHoOYyDmekxQqAA/z+sVlvcR5lO6fJbre1ehsd3bLcS01h4HTxjiRi6wqy1sldVF4V511pIKdo6R3wLPHY+W872ZoN9oUY0ctsdOlfpdbySvVjl5GrVlwyEeXfsqE3FLlirKmzclo0om6vFYuAVFaabbEaETW7UAsIvUNwGZukLTDcIxErp1eKKPVBHnWucHRx9SCYERLfKehxUSDLVeVCpJPgi73ZGVBtFg/uTl9GMeOFlwkjrYyCqSVSXtAamkxvRYMRZ+8uaZL9kImmylnhDA06AlUH3hRvM9CWNyqxNgNTWiXS5ue+lQ1rqBjrQqutCPiaVw4iZ1EQEXLO3mgMHQ0akYhfAZNp2gBnYIPm067l0CyzhEiIBmtRvJFcD1ijCu2T6e3YuqS/vRDA1WRzvu93uu6JPeLtCKHy/3+QVqnTwSfskvAKat27tJSJlgg8osJda1hR6PcOsfolFmr1I9LPt6tI0sYPcCiPPjLsNoDy96SDDTLDpIXBvZKcCea33h8+oYUPadBVVTNKvPBioVJb8yK1KFsbdeFXzkcLRwNYfWTWgKeSZyY95GfEtblY1hpR5DTKQfwevv/0LeKkz7EXPtluAD9yjZaSfHTRD0ifHWxf+T/oVga0wMnYlC9BuRoquOyAscn0dszxVpai2iL4hI6lsBkWSjY5y1g+rnmQGMAAAAAAA==" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/the-gioi-song-song-thinh-khieu-nga-son-dai-vuong/" itemprop="url" title="Thế Giới Song Song - Thỉnh Khiếu Ngã Sơn Đại Vương" >Thế Giới Song Song - Thỉnh Khiếu Ngã Sơn Đại Vương</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/he-thong/" title="Hệ Thống" >Hệ Thống</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/mat-the/" title="Mạt Thế" >Mạt Thế</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Thế Giới Song Song - Thỉnh Khiếu Ngã Sơn Đại Vương - Chương 56: Huấn luyện thực chiến trong rừng 1" href="https://nettruyen88.net/the-gioi-song-song-thinh-khieu-nga-son-dai-vuong/chuong-56-huan-luyen-thuc-chien-trong-rung-1.html" >
                  <span class="chapter-text">Chương 56: Huấn luyện thực chiến trong rừng 1</span>
                  </a>
                  </span>
                  <span class="update_time">2 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" class="small-img wp-post-image" alt="Phản Phái: Phu Nhân, Ngươi Cũng Không Muốn Trương Vô Kỵ Xảy Ra Chuyện A?" data-pagespeed-url-hash="2221271078" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,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" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/phan-phai-phu-nhan-nguoi-cung-khong-muon-truong-vo-ky-xay-ra-chuyen-a/" itemprop="url" title="Phản Phái: Phu Nhân, Ngươi Cũng Không Muốn Trương Vô Kỵ Xảy Ra Chuyện A?" >Phản Phái: Phu Nhân, Ngươi Cũng Không Muốn Trương Vô Kỵ
                     Xảy Ra Chuyện A?</a>
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/dong-phuong/" title="Đông Phương" >Đông Phương</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/dong-phuong-huyen-huyen/" title="Đông Phương Huyền Huyễn" >Đông Phương Huyền Huyễn</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Phản Phái: Phu Nhân, Ngươi Cũng Không Muốn Trương Vô Kỵ Xảy Ra Chuyện A? - Chương 175: A Tử lừa dối Nguyễn Tinh Trúc đưa tới cửa" href="https://nettruyen88.net/phan-phai-phu-nhan-nguoi-cung-khong-muon-truong-vo-ky-xay-ra-chuyen-a/chuong-175-a-tu-lua-doi-nguyen-tinh-truc-dua-toi-cua.html" >
                  <span class="chapter-text" >Chương 175: A Tử lừa dối Nguyễn Tinh Trúc đưa tới
                  cửa</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/33x33xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no.jpeg.pagespeed.ic.bvC_CHZ3QG.webp" class="small-img wp-post-image" alt="Ẩn Cư Ba Năm, Ra Ngục Thành Vô Địch" data-pagespeed-url-hash="789191868" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" srcset=" https://nettruyen88.net/wp-content/uploads/2024/09/49x49xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no.jpeg.pagespeed.ic.ZVX-RMHZuE.webp 1.5x, https://nettruyen88.net/wp-content/uploads/2024/09/66x66xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no.jpeg.pagespeed.ic.M98Vb1aNYU.webp 2x, https://nettruyen88.net/wp-content/uploads/2024/09/99x99xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no.jpeg.pagespeed.ic.znCWx6UMA-.webp 3x, https://nettruyen88.net/wp-content/uploads/2024/09/xadcrehcgvmgxzrtszikduchvp6vz1gdoyty7wmf38msqrmdnmeoo6brxpv_5zt3tpn4cv3p7gmjw5i0cdnyjhpkqdouptafq1khgdfytz6adsuczmvraosq1fvd4hqdrwsqzgj6myxa3irogyqjktcj0mrq2w215-h322-s-no.jpeg.pagespeed.ic.O73RMMfnDn.webp      6.515x " />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/an-cu-ba-nam-ra-nguc-thanh-vo-dich/" itemprop="url" title="Ẩn Cư Ba Năm, Ra Ngục Thành Vô Địch" >Ẩn Cư Ba Năm, Ra Ngục Thành Vô Địch</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/kiem-hiep/" title="Kiếm hiệp" >Kiếm hiệp</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/tien-hiep/" title="Tiên Hiệp" >Tiên Hiệp</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Ẩn Cư Ba Năm, Ra Ngục Thành Vô Địch - Chương 86" href="https://nettruyen88.net/an-cu-ba-nam-ra-nguc-thanh-vo-dich/chuong-86-114.html" >
                  <span class="chapter-text">Chương 86</span>
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" class="small-img wp-post-image" alt="Tinh Tế Rách Nát Nữ Vương" data-pagespeed-url-hash="3334175738" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,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" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/tinh-te-rach-nat-nu-vuong/" itemprop="url" title="Tinh Tế Rách Nát Nữ Vương" >Tinh Tế Rách Nát Nữ Vương</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/huyen-huyen/" title="Huyền Huyễn" >Huyền Huyễn</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Tinh Tế Rách Nát Nữ Vương - Chương 319: thiếu tấu" href="https://nettruyen88.net/tinh-te-rach-nat-nu-vuong/chuong-319-thieu-tau.html" >
                  <span class="chapter-text" >Chương 319: thiếu tấu</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/600-41.jpg" class="small-img wp-post-image" alt="Xuyên Thành 70 Pháo Hôi Tức Phụ" data-pagespeed-url-hash="311928538" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" srcset=" https://nettruyen88.net/wp-content/uploads/2024/09/49x49x600-41.jpg.pagespeed.ic.XPKwV5_eh-.webp 1.5x, https://nettruyen88.net/wp-content/uploads/2024/09/600-41.jp                2x " />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/xuyen-thanh-70-phao-hoi-tuc-phu/" itemprop="url" title="Xuyên Thành 70 Pháo Hôi Tức Phụ" >Xuyên Thành 70 Pháo Hôi Tức Phụ</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/ngon-tinh/" title="Ngôn Tình" >Ngôn Tình</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Xuyên Thành 70 Pháo Hôi Tức Phụ - Chương 127: Đại kết cục (3)" href="https://nettruyen88.net/xuyen-thanh-70-phao-hoi-tuc-phu/chuong-127-dai-ket-cuc-3.html" >
                  <span class="chapter-text" >Chương 127: Đại kết cục (3)</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/treu-choc-hon-nhan.jpg" class="small-img wp-post-image" alt="Trêu Chọc Hôn Nhân" data-pagespeed-url-hash="1803161760" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/treu-choc-hon-nhan/" itemprop="url" title="Trêu Chọc Hôn Nhân" >Trêu Chọc Hôn Nhân</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/ngon-tinh/" title="Ngôn Tình" >Ngôn Tình</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Trêu Chọc Hôn Nhân - Chương 82: 82: Ngọt Ngào Hàng Ngày 9" href="https://nettruyen88.net/treu-choc-hon-nhan/chuong-82-82-ngot-ngao-hang-ngay-9.html" >
                  <span class="chapter-text" >Chương 82: 82: Ngọt Ngào Hàng Ngày 9</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/tu-ho-gam-kim-chung-trao-bat-dau_21.jpeg" class="small-img wp-post-image" alt="Võ Đạo Độc Tôn: Từ Hổ Gầm Kim Chung Tráo Bắt Đầu" data-pagespeed-url-hash="3133965044" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/vo-dao-doc-ton-tu-ho-gam-kim-chung-trao-bat-dau/" itemprop="url" title="Võ Đạo Độc Tôn: Từ Hổ Gầm Kim Chung Tráo Bắt Đầu" >Võ Đạo Độc Tôn: Từ Hổ Gầm Kim Chung Tráo Bắt Đầu</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/huyen-huyen/" title="Huyền Huyễn" >Huyền Huyễn</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/kiem-hiep/" title="Kiếm hiệp" >Kiếm hiệp</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Võ Đạo Độc Tôn: Từ Hổ Gầm Kim Chung Tráo Bắt Đầu - Chương 417: người hào" href="https://nettruyen88.net/vo-dao-doc-ton-tu-ho-gam-kim-chung-trao-bat-dau/chuong-417-nguoi-hao.html" >
                  <span class="chapter-text" >Chương 417: người hào</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/hoidap8axzlib6jy.jpg" class="small-img wp-post-image" alt="Hồi Đáp - tác giả Bi Bi" data-pagespeed-url-hash="3505792706" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/hoi-dap-tac-gia-bi-bi/" itemprop="url" title="Hồi Đáp - tác giả Bi Bi" >Hồi Đáp - tác giả Bi Bi</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/ngon-tinh/" title="Ngôn Tình" >Ngôn Tình</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Hồi Đáp - tác giả Bi Bi - Chương 22 - Đời đời bình an" href="https://nettruyen88.net/hoi-dap-tac-gia-bi-bi/chuong-22-doi-doi-binh-an.html" >
                  <span class="chapter-text" >Chương 22 - Đời đời bình an</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/khi-the-gioi-tro-thanh-tro-choi-bup-be-1.jpg" class="small-img wp-post-image" alt="Khi Thế Giới Trở Thành Trò Chơi Búp Bê" data-pagespeed-url-hash="345331973" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/khi-the-gioi-tro-thanh-tro-choi-bup-be/" itemprop="url" title="Khi Thế Giới Trở Thành Trò Chơi Búp Bê" >Khi Thế Giới Trở Thành Trò Chơi Búp Bê</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/he-thong/" title="Hệ Thống" >Hệ Thống</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Khi Thế Giới Trở Thành Trò Chơi Búp Bê - Chương 136: C136: Xóa chữ thứ nhất" href="https://nettruyen88.net/khi-the-gioi-tro-thanh-tro-choi-bup-be/chuong-136-c136-xoa-chu-thu-nhat-3.html" >
                  <span class="chapter-text" >Chương 136: C136: Xóa chữ thứ nhất</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/nguoi-qua-duong-nu-xung-bi-dien-my-vai-ac-quan-len.jpg" class="small-img wp-post-image" alt="Người Qua Đường Nữ Xứng Bị Điên Mỹ Vai Ác Quấn Lên" data-pagespeed-url-hash="1245582129" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/nguoi-qua-duong-nu-xung-bi-dien-my-vai-ac-quan-len/" itemprop="url" title="Người Qua Đường Nữ Xứng Bị Điên Mỹ Vai Ác Quấn Lên" >Người Qua Đường Nữ Xứng Bị Điên Mỹ Vai Ác Quấn Lên</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/bach-hop/" title="Bách Hợp" >Bách Hợp</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/dam-my/" title="Đam Mỹ" >Đam Mỹ</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Người Qua Đường Nữ Xứng Bị Điên Mỹ Vai Ác Quấn Lên - Chương 103" href="https://nettruyen88.net/nguoi-qua-duong-nu-xung-bi-dien-my-vai-ac-quan-len/chuong-103-102.html" >
                  <span class="chapter-text">Chương 103</span>
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/600-39.jpg" class="small-img wp-post-image" alt="Thần Điêu: Ta, Kiếm Tiên, Trấn Áp Thiên Hạ" data-pagespeed-url-hash="2743143919" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/than-dieu-ta-kiem-tien-tran-ap-thien-ha/" itemprop="url" title="Thần Điêu: Ta, Kiếm Tiên, Trấn Áp Thiên Hạ" >Thần Điêu: Ta, Kiếm Tiên, Trấn Áp Thiên Hạ</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/kiem-hiep/" title="Kiếm hiệp" >Kiếm hiệp</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Thần Điêu: Ta, Kiếm Tiên, Trấn Áp Thiên Hạ - Chương 283: Ta sao có thể vứt bỏ" href="https://nettruyen88.net/than-dieu-ta-kiem-tien-tran-ap-thien-ha/chuong-283-ta-sao-co-the-vut-bo.html" >
                  <span class="chapter-text" >Chương 283: Ta sao có thể vứt bỏ</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/throne-of-magical-arcana.jpeg" class="small-img wp-post-image" alt="Throne Of Magical Arcana" data-pagespeed-url-hash="2246491355" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/throne-of-magical-arcana/" itemprop="url" title="Throne Of Magical Arcana" >Throne Of Magical Arcana</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/light-novel/" title="Light Novel" >Light Novel</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/sac/" title="Sắc" >Sắc</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Throne Of Magical Arcana - Ác quỷ thực sự" href="https://nettruyen88.net/throne-of-magical-arcana/ac-quy-thuc-su.html" >
                  <span class="chapter-text">Ác quỷ thực sự</span>
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/adcrehc3llthesya9oqdkxp9eapiwt2hkkjaqhs0o4ycza5xxij76uaq4ssn6qlrc6ytaitlk4ijw9ivah1zdm-ne4o0xy44fm9zscmql30pnqrawfdlsz5d0_zgw80jgebxi38q9gh2_kzhvm9ala4mb0orw215-h322-s-no-gm.jpeg" class="small-img wp-post-image" alt="Gả Cho Thế Tử Bệnh Tật" data-pagespeed-url-hash="2114419553" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/ga-cho-the-tu-benh-tat/" itemprop="url" title="Gả Cho Thế Tử Bệnh Tật" >Gả Cho Thế Tử Bệnh Tật</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/co-dai/" title="Cổ Đại" >Cổ Đại</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/cung-dau/" title="Cung Đấu" >Cung Đấu</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Gả Cho Thế Tử Bệnh Tật - Chương 146: C146: Chương cuối" href="https://nettruyen88.net/ga-cho-the-tu-benh-tat/chuong-146-c146-chuong-cuoi.html" >
                  <span class="chapter-text" >Chương 146: C146: Chương cuối</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/chu-chu-hoi-cung-gojo-satoru-cung-nhau-lam-su-nhat-tu_75.jpeg" class="small-img wp-post-image" alt="[ Chủ Chú Hồi ] Cùng Gojo Satoru Cùng Nhau Làm Sự Nhật Tử" data-pagespeed-url-hash="1568401632" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/chu-chu-hoi-cung-gojo-satoru-cung-nhau-lam-su-nhat-tu/" itemprop="url" title="[ Chủ Chú Hồi ] Cùng Gojo Satoru Cùng Nhau Làm Sự Nhật Tử" >[ Chủ Chú Hồi ] Cùng Gojo Satoru Cùng Nhau Làm Sự Nhật
                     Tử</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/hien-dai-2/" title="Hiện đại" >Hiện đại</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/ngon-tinh/" title="Ngôn Tình" >Ngôn Tình</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="[ Chủ Chú Hồi ] Cùng Gojo Satoru Cùng Nhau Làm Sự Nhật Tử - Chương 2: Một phần thù vinh" href="https://nettruyen88.net/chu-chu-hoi-cung-gojo-satoru-cung-nhau-lam-su-nhat-tu/chuong-2-mot-phan-thu-vinh.html" >
                  <span class="chapter-text" >Chương 2: Một phần thù vinh</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/300.jpg" class="small-img wp-post-image" alt="Gia Tộc Tu Tiên: Từ Ngự Thú Bắt Đầu Quật Khởi" data-pagespeed-url-hash="2105277367" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/gia-toc-tu-tien-tu-ngu-thu-bat-dau-quat-khoi/" itemprop="url" title="Gia Tộc Tu Tiên: Từ Ngự Thú Bắt Đầu Quật Khởi" >Gia Tộc Tu Tiên: Từ Ngự Thú Bắt Đầu Quật Khởi</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/tien-hiep/" title="Tiên Hiệp" >Tiên Hiệp</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Gia Tộc Tu Tiên: Từ Ngự Thú Bắt Đầu Quật Khởi - Chương 848: Ung dung mấy ngàn năm, cử hà phi thăng (4)" href="https://nettruyen88.net/gia-toc-tu-tien-tu-ngu-thu-bat-dau-quat-khoi/chuong-848-ung-dung-may-ngan-nam-cu-ha-phi-thang-4.html" >
                  <span class="chapter-text" >Chương 848: Ung dung mấy ngàn năm, cử hà phi thăng
                  (4)</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/33x33xadcrehergwunufushrea4cxpc68pzkfl2mpscqwo_ka7dihefefd5evl7uy4dsxd7bzdraymi4ktivsw14bwgshy5bmt_p6eumj_uotirro6akyf5jgz_50ermz6wt1iwgodqs-0re1bjl1ptepmao214pnrw215-h322-s-no.png.pagespeed.ic.Qlk7VNTiQT.webp" class="small-img wp-post-image" alt="Dưới Vẻ Bề Ngoài" data-pagespeed-url-hash="3425257654" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" srcset=" https://nettruyen88.net/wp-content/uploads/2024/09/adcrehergwunufushrea4cxpc68pzkfl2mpscqwo_ka7dihefefd5evl7uy4dsxd7bzdraymi4ktivsw14bwgshy5bmt_p6eumj_uotirro6akyf5jgz_50ermz6wt1iwgodqs-0re1bjl1ptepmao214pnrw215-h322-s-no.png 1.5x " />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/duoi-ve-be-ngoai/" itemprop="url" title="Dưới Vẻ Bề Ngoài" >Dưới Vẻ Bề Ngoài</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/khac/" title="Khác" >Khác</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="Dưới Vẻ Bề Ngoài - Chương 110: Anh yêu em (2015) (Hoàn chính văn)" href="https://nettruyen88.net/duoi-ve-be-ngoai/chuong-110-anh-yeu-em-2015-hoan-chinh-van.html" >
                  <span class="chapter-text" >Chương 110: Anh yêu em (2015) (Hoàn chính
                  văn)</span >
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li>
            <li class="truyenhot_li_customcol" itemscope="" itemtype="http://schema.org/Book" >
               <div class="list-nowrap new-update">
                  <img width="33" height="33" class="small-img wp-post-image" alt="When My Wife Cheated On Me" data-pagespeed-url-hash="3524507274" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,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" />
                  <h3 itemprop="name">
                     <a href="https://nettruyen88.net/when-my-wife-cheated-on-me/" itemprop="url" title="When My Wife Cheated On Me" >When My Wife Cheated On Me</a >
                  </h3>
                  <span class="list-truyen-chitiet">
                  <span title="" class="can-phai update_cate">
                  <a itemprop="genre" href="https://nettruyen88.net/light-novel/" title="Light Novel" >Light Novel</a >,
                  <a itemprop="genre" href="https://nettruyen88.net/sac/" title="Sắc" >Sắc</a >
                  </span>
                  <span class="can-phai tien_to_full update_chap">
                  <a class="text-primary" title="When My Wife Cheated On Me - Chương 01" href="https://nettruyen88.net/when-my-wife-cheated-on-me/chuong-01-5.html" >
                  <span class="chapter-text">Chương 01</span>
                  </a>
                  </span>
                  <span class="update_time">4 tháng trước</span>
                  </span>
                  <!-- Hiển thị ảnh đại diện -->
               </div>
            </li> --}}
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
                        <img width="33" height="33" src="https://nettruyen88.net/wp-content/uploads/2024/09/600-40-150x150.jpg" class="small-img wp-post-image" alt="Tốt Nghiệp Phát Lão Bà, Ta Thành Ba Ba Của Bạn Gái Trước" data-pagespeed-url-hash="3875584160" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        <h3 itemprop="name">
                           <a href="https://nettruyen88.net/tot-nghiep-phat-lao-ba-ta-thanh-ba-ba-cua-ban-gai-truoc/" itemprop="url" title="Tốt Nghiệp Phát Lão Bà, Ta Thành Ba Ba Của Bạn Gái Trước" >Tốt Nghiệp Phát Lão Bà, Ta Thành Ba Ba Của Bạn Gái
                           Trước</a>
                        </h3>
                        <span class="list-truyen-chitiet">
                        <span title="" class="can-phai update_cate newnovel">
                        <aitemprop= itemprop="genre" href="https://nettruyen88.net/do-thi/" title="Đô Thị" >Đô Thị</a >
                        </span>
                        <span class="can-phai tien_to_full update_chap new-novel" >
                        <a title="Tốt Nghiệp Phát Lão Bà, Ta Thành Ba Ba Của Bạn Gái Trước - Chương 154: Lâm Tiểu Tuyết: Thật ác độc lão thái bà" href="https://nettruyen88.net/tot-nghiep-phat-lao-ba-ta-thanh-ba-ba-cua-ban-gai-truoc/chuong-154-lam-tieu-tuyet-that-ac-doc-lao-thai-ba.html" ><span class="chapter-text" >Chương 154:...
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
                        <img width="33" height="33" class="small-img wp-post-image" alt="Hồi Đáp - tác giả Bi Bi" data-pagespeed-url-hash="2146774905" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,UklGRqYHAABXRUJQVlA4IJoHAACQJQCdASpjAGMAPm0uk0akIqGhKnINyIANiWMAxYP71E/e4Vnjl/rfCnzkhr2ndmbtfmZsO9Q41oA2NpNuJ8MWb937OA7SwTl/s3t6/7OhEuuRbY4M+KM/3Ww5l+8qCj3pEtiIZCd9oUwkZqBau/vShQ8waZQN+n3SJaqbwDwxTkJshEes7io5kLBfPziw1S7pxb2YxXczBp1y8H3EPVuTefpXvXVyRPF3o362Hv0smpHG30BrK/rxIV+kRIxT4pqmMFhbp+a1EaPmgEBi+roJ8IhQdacl7yWSr8Kv8ma9l6lwyonb9aPX/49dMcyNkxuniPuPLcyIP8+bNWbUlHJ11W3JxcI6jFkMY6LpHJm550UMkM67YR1Xh49ui27s9+2bNCEdBbd4Xqq13ChEXngoXMGXvgAA/tNfBarFfeTQ3PpqiToDXR2zH17Zdy37u6LF6E3CSR0HgFOuLsU8UmihEM//m3Icg7Tk+qrPQAD4UzD//xzk43duj1jXnXgMM9q0vhcPGH0z+UEvh/7pSi3aJ6AocKmHkJ5XdYh4bukpMTuAmKM4L77O7hA159rcHyXPNESa1IgzP0HfhBG1lisrZ99rFdUINEdoQVgmmivnh124rkAJJtWCLaaZuZUoKDexudqxuhN82l7FatPxbQFUvDFPJQAlinNvykThBECobA8uUk2zpqnmZtaTjyREVMblyMGVYPdfhZpf6j3cHCD5J9MeFvxwg2YeCcnGiT67XlfWdJaebLYyP9H91l4HyC0bvk1lE1fYAQIQMLAWgckQOf2KMuu2DL18KNn7yxmD3ZrCwJrhJ4oFJWo7g52t5wRntsv4WLAJ/nZQq0Ggnk/b44N/o/h6pVp5f7PcIsZtpnXaXhz1J61tcOwD4CVOXpvN1NRKhWN5Q0vJqNiHcNEZAZU5N1U4lxiKAH8E5BmKp6amTvOeXUFkw52InZd98W5ylPuy6ujI6gcYirtYmCagbnE4fYqhrd1XdmuzcqwbltswxceU/7MgR9p9OQUzokjCaaqTsIn2UscUoMm65Nf4uuO0zxZdZ8jPgRi3m3VuJ4WR2W9Xkd/3hw8xL4s1PK6jhjIp2nD/Brtyn5wzBxJLikqbU9wp7s79lE9Og07+HBx8Nfonw8761NYDYwtMNP3zddOgQN4nWkFkXV4/eRAvaNMdMkE6rRwxOuCH56xeJ+SpZy9nDe9Ox4kIq7GOAh66EMlvDfb71X1pcVXfz3TcpYROadaMVtYlMUingk/qgszgzbyPOeV+2SBiQJHB6fVgHu734BwimtIF81DIWmpyM8lKuX7nMmpzmWQHxq5y5ACLa88/+SX+jnHZKSuo736ut1sFFJbgOKKmihag61XRw+DNjXdgshwNxhSDR0aI3uTA6r6zXeEv3OPLVd4sGM0A4AAIPENGo4QkfUu51bUaCxt3T3L3JZnhHlgymFn4OSmR8S9/4isP7DPaz1O8fT0kVonyW7gZxfqU2LU1gW1ahbGLyzB3eMdZK18Vy4m+O28zSOIEk+mXMCvW9ka4NvVhmfFo43btaPy16yqMi2ahvgN6FBoBYwklfkLW2r18tUnDEQv5oR5L3DBhDZcHNzCEIrww+V8con4iwUUK0sccutLGP+sq6ooWEfOpLt/XkPoVaGZwDsXfAx+b7XP2fU7mRCGHnRPtdZpfTeApM9rVmGV+iipCcnS3Dnfsz4ligtr5hCNXAXUaLrejqXhd4/6IR+UUc34n81Ix4Mkvtx6f8/HdFwaFlSAxY1p2YDPGqR9O8K7S7hhW4IfxyyVMxLCIxL5MJM5q38aeQFA7A97yzzoEYySJtzrK7bFJe0B0zKKF/vyWUsH2bGAFEYsNwPf3p8UJS41m34gZiijax8E1t/gOo0l4U2FFL0p4bQryhhd8oRRK6YoDpjACDdl7reznU+dyaOPlef2EBd4ZBCVVXfES0HTphTwyvyiXWIpkeAjgtcRPi+4JlBANR89QellHzVNbhocYg8mbfL8haa8zbrbEKjmSaxtuRyR3mr4RovYFa2abhnPkpQstoLYPRpjC1LeXf0dsaPwhVmoQ7kJ1zyCN7rA4FYQjzM3fDO2ziYbBaVVzLYXM4yNkkWbj9FQ6IOLzFwCWhxFaHfA9qUZJiKL10m4jwR2O7csf09Ms6THKTPjBnd7B+JpYZ+owBeedVbhV+9wrOFMtY5lvUEf/R7Tdbfr40PNhaG18ObdhkGPbsFcklA28jZlumFzFdq5dBVIU8eMrrOIVbNcifrHCi7/Wt4kJPoMGPBiSLFpkOASXXUYgqnEXOevpS7kf5NM3L5GOCbBIEM/nDK5lwfEoh27kxU61UgkUyXsC/oiGpLJ0PdZRuCfyRqy233rO8OZ/+F2sR5to6OJi8Pr92V+5pStpKpMCBIPEyaefKdQUQ6Ae9xxd0AUzsSIcqycR7+I6aQK1I3BMwXeWOaRiG32GbRWLRtfYr1054kU8VpNoD7NtAtPW4sHFFvdz7Lmak0MLle1BYUGe8icNATg0Y02KAZT2pgLiPJAz8tdXUyFEQ+KD8bJZMDekxtUBoGrsImFZ6vrFyqPBSknmZiSDrMoq2ny9yA7oAAAAAA==" />
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
                        <img width="33" height="33" class="small-img wp-post-image" alt="Người Qua Đường Nữ Xứng Bị Điên Mỹ Vai Ác Quấn Lên" data-pagespeed-url-hash="3007958088" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,UklGRqoLAABXRUJQVlA4IJ4LAABQLwCdASpjAGMAPm0wk0ckIqGhKdIseIANiUAU6N7P8JG3LPfzuu35fA9NT+eX2q0H/T+BvkF+T6EP9V3s+mPMn7Fo9GUfyg1Anh9ojZxasXhLow8HmgZ4zOl57AMa/wLmyRbT1+G2zpR++PuDIluCww26AA4zi7AtVm2Xncu5hqEOoZC9YNBTqSah9BK16CVx0GO8ZqTm3TC6/mXfGh/CWMHNawiW54qub9enR3f+zmsqqS75fzaP2wJ65mhwlj5o7BbXg4l7qH26i2Xk4bOLQDg2uWPC/avGxUkYKfAvvQpUT1MG9y9xL+LQyRLzvGJ8NL8Ci2a7FzOxTi6psk6wTwWna9ZSJ5za6gBFj0S0GxbjJczhNWy7DPcpC1taIWqX0QKrPs1v/HMHV8iqP3zWDnYWUElc6c/ETPB1OWJSt2CQMyOqh1E1XR+sCdO1HtwmeMzF52D4OM/FgOJvhbx8tssw+gavzSJVeF9s49FDLvIiw+vDwBuW4x555x/75x7onAAA/v8jGTBQSzH+6wNQfopDauSvD31ND+RLWolXYy0F5BDjQzjbvzq7HtxcTsh/qcWdp5oqo11kDqmW07k7IgRhYe/bKjhlbgk8ZRRkf7i+OZPzige8riW8bnz35zjnF5xxhCpg4nxxAawj33Fq8k64wdZ6dhKi5ki9zDeajtPUaV5uJrvb7XCXaVuTW+9my7az0Rhwut8fkgwfUCHjA0T6O7QOSNsTmCP6/IQsV1OBfc/IFVXgf4LPadFHRP5BG5yDYvNCgzZuER2Nt1ic7Kz/pTTRUu5fT4tEPedkg/gATyCrXH6saddVFiuMgO8mrKs0XreQ4MNc8b9HWHGHFd3IsmARXdz8V/Uwmz+0QrVtao7UFCagTUeg1zzScBpVueilJosUe5jg1m6j/cF/rtoUaBgB9XqTomFt7iRK06MUmYQFZze6AiNW981UaXNu8oUhXkJdsbXWTATGejERmpHE6bvBhCfy7lUAPgNllxBFEz8gMs/LATAQjx1LhZ3fspN/Jd+WHyMvpOkqPjLhjREgXTs2xcKEhGVEB2IsVaz1JWVMLykMawxyi56GjeOxWRN8lHWWb/BTPFWWTSv/R4QozVQta3i0r9uXuRXWsAsQVZ7DokJReDJul4w1dlp6PhnKJx7aNL0aj4CCHeGHX/OC+cbqkV2DxTQj27Fv/ov/kH9wMnSf9SPKq78ctMhgfm31XmUz2o8972On9zJiZ9A8djaCRBI18qiYQfd3NN4nX/wWNjMbTqY1cDFIvpj9/kA/tOjblS8zdy1rhXNZ2OQF2JP6OQWECFvuzlTtgYMa2cHrwSJZfNHpy9LfQrEivOxlfVmKCYqf+AxSfqOeoYH1XYB947mtEMUpS2Km9lhnQADMa6EK/2p6wT+lcytYcbP9dHw2l+oOQhTSlq29cfe+blgDnjA/GJSDH4IUP20oVnDWftujyVEKMsEHaDBPu9ERlr6MmMXMo/ekrDTUwy2ypOgFIGXXGYwPuJfWr+OMkycyU4dMhw1APfQn3Kk8q20Kx9gCePLVXx8nZedGDSP0Cb1/FegVLhME4pUH41GncIuPA5KVxR96Ma/8UwXROFXuMaIHqQ/TQadTOaKXVlM5HFrQ6ewZNl+c0EsNJadTuPfEHcYtPSInUYc1iMgEObri875R9zkBsfzg3GNUszBURZlYxE1c+cLUMksRQk8eevNy9kPTKYMGHtKrH+jQttLk863lg1zliXy/AyY9yB5hHIb94kHZ4Um76/5gJ9RUm5F0X1s9DdwtMmfhcpN9krUFFzlmfzRjj8YNw/Ycv7Yv1W4cvS9l7R1+4onwvldSdk2bEKyZ/Wga76aXgXMW5TPi70wTV6MAQWgRgpvaJ1BwdoFP99Q7saqpkeVgPaXCvbA1b8AyrR3qkflUk3sezu5aw+dhG9VtAUjvU7ynFaVidZNezjxb4C+mXhNrpeAhPsRZPbz0jIfBnsaJnOTvbQkhrw/+ux8kRTMiCfXnOPK3XUMcwIKjLILMKRjpUkshZX0l2mHdH1VqUfplOSTYqXE+K1B7Uk5QKXedt+nRPAHWDr0L2BwMI3TPqtCN8kch20CaRWWfqI1VRwdIYtd17T3iHAhslP1aXGwdi2+UyHC52tniBog8pmItf+ttkCQCGvFu5gV/nCfOBYubQtQjkVGfLYzxBYLciEeeGQmnaacvFoONrnv/80FwW5yKssejlJd3QBqqP2LppcBeN62tLnh/HgmNqKvtmHANPxrA8wcGrQf6lJKa2Mcsy8gzss0IuBnR5NYC7dgpk+YzImzi8R46pr8LGqe/Ri0beyIv3Dx+TD5/e7ZrM2VSLuzOKT8hQI31/X/i88cvQESj9inQP4OosJmM/2AodpqPiF+4RH+72SqISCBJG3Iot7BKbod/mMMzTzbKRJrz40WnVuSKnB0G7KJ0zRhv69BetKl60M2dOmYULaGDygnaEeTPOTomO/b+lyq+ZAPtEENyQ+KbRI7JesTugDwp6KtZZqhby4bb5YLhA7ibxO0+rLaTkn7/m3FMRGvl0s0mO9BSDTmWErRa02p5PSWrNvoGgfy1MqZpWQs4Ay3A7WzGMro/Ki4gYTdcfIKoIoNhMGJMMCjO1bLcCX+VqDdPIBFJP8FAzh3+DDHtfqM/wTpK14IfvDmHIAklrzNEPv61hqks6hqnAOfHmF7TiAiiX9piQ1S0lXSkAcl47ODIlwa9VFrlyF3jff1CEdgkUAPNdYP4VQ2TR9xYAnD7dEEcNNWLp2gr8qqnn58jORo0rQUaE8ggCtYgViHunsEMz+gWPTqHblA7/4bFifqoiHeCJlWoF4ZTKtQwlOlDtJvG6gxRuyrqzYz5ylGUbl6LsKFY0A4uobyvUu9AJHL9HuSzKV73DHJW2Rcf4JLanqzOXi1NLVDhJeOSGLScIbDqt9omRytGa+6/OHaPhSkaAIsltWFlJ11k8dTajto2dZNgWqS+Qz0oOrpOmkOowL1SyH48K7sGO6GEI1qIMZk9/n49G2j8Fzhsv1Opk4fivAMmtcGNDsHVpcxYyJpCOxn7m0n4sH/YNMM8KYnnD/l0hVKkAljY2cY2uYLuaOO6ubZrNVP/R03HChqru8ACUr/JfuWoKAo/ywCehySlJB6yF2TKBCHBLF9A2MHD+tPoC+EmKYTy3YzoIn59C9xKmpIvBKhAEl1/63m+XLuSik9B8s44bFq+1RfxuKEhBH4A0kAup1BLiuD6CEPGtyswu2ezCyKj053sQ2VzCXGnfijM/2wmCtS4ocH0bgwndyJZ0bhuEiLwhb9xpVVHVvxxxO+tO5aBeraY9dMtPNhdZKD/FvciKSJpMuOjhkD8fcyH/vuUZefxsnEyCEcAN+0yG7/vCSO530YdU3DUaMyzMYPvqv1vldrVGwZ74+tHbjCLZqLzaSn+M3E1UTbW4XRjdaZ58cKUf1+gbX8Icdtfb3JTfpusCBpYNnOmDUeBPQtcMXo339s9Q67qSxB2Fl5Jo3cfL1ZcsuXNW99hmuYtAKKx+1pr8gbhxbuqqg6gflBd197WFa3cpykSc4bwlXezyxCEC2E0MH5VyMJvvUqA0V1XdwlMjtLLLT1YWx+2B8hCFH2FYIcKlKIP3/dxIanCbPHh626j+iELNDdtUD/BqWCnGc4VGkoknxlhBMExmWftNw1tSXOkSjNq+1xiJDkHHYCawk5LXSAvcrWuAqNKIxq322ktZjm2ngI+RqH1MRn69Jk0aShqEoRbkbvQDkUgqkTRd0Fh1Xgy+JYCtkWRkbFhoPq/SdaIW0ngA8HZI1CeQNDLFv7gBF7kl3GCjKpeoiSIbnCr8dVDJmptCoc9pcIHuziaBjlBUd56G0H744asKs+Uqe10zTWK2yNA1rccLVFMGyF3WkgvlZBGD85mYFN7CVHLoA3AgDNrUijGgu/fP38c8eaNFbFdI6VvRE7kK/cAAEFVwAAA" />
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
@endsection