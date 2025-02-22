<div class="navbar navbar-default navbar-static-top" role="navigation" id="nav" >
    <div class="box_header">
        <div class="box_logo">
            <div class="button_menu" onclick="toggleBoxMenu()">
                <span class="glyphicon glyphicon-th"> </span>
            </div>
            <div class="container">
                <div class="logo">
                <a href="https://nettruyen88.net"> </a>
                <img src="{{asset('asset/images/logo.jpg')}}" alt="">
                </div>
                <div class="box_search" id="boxSearch">
                <div class="box_input">
                    <form role="search" method="get" class="search-form" action="" >
                        <input type="text" name="s" placeholder="Tìm kiếm..." value=""/>
                        <button><i class="fa fa-search"></i></button>
                    </form>
                    <button><i class="fa fa-search"></i></button>
                </div>
                <div class="kq_search"></div>
                </div>
                <div class="member_control">
                <a class="switch settings" id="switch">
                <span class="switch__light"
                    ><i class="fa fa-moon-o" aria-hidden="true"></i
                    ></span>
                <span class="switch__dark">
                <i class="fa fa-sun-o" aria-hidden="true"></i
                    ></span>
                </a>
                <button onclick="openModal('loginTab')">Đăng Nhập</button>
                </div>
                <script>
                // Dark and Light Mode with localStorage
                
                (function () {
                    let darkMode = localStorage.getItem("color-switch");
                
                    const darkSwitch = document.getElementById("switch");
                
                    // Enable and Disable Darkmode
                
                    const enableDarkMode = () => {
                    document.body.classList.add("color-switch");
                
                    localStorage.setItem("color-switch", "enabled");
                    };
                
                    const disableDarkMode = () => {
                    document.body.classList.remove("color-switch");
                
                    localStorage.setItem("color-switch", null);
                    };
                
                    // User Already Enable Darkmode
                
                    if (darkMode === "enabled") {
                    enableDarkMode();
                    }
                
                    // User Clicks the Darkmode Toggle
                
                    darkSwitch.addEventListener("click", () => {
                    darkMode = localStorage.getItem("color-switch");
                
                    if (darkMode !== "enabled") {
                        enableDarkMode();
                    } else {
                        disableDarkMode();
                    }
                    });
                })();
                </script>
                <style>
                button#switch {
                width: 40px;
                height: 38px;
                font-size: 20px;
                }
                .switch .switch__dark {
                font-size: 0;
                visibility: hidden;
                color: #fff;
                }
                .color-switch .switch .switch__dark {
                font-size: 20px;
                visibility: visible;
                }
                .color-switch .switch .switch__light {
                font-size: 0;
                visibility: hidden;
                }
                .col-md-8.col-lg-8 {
                border-bottom: 1px dashed #dcdcdc;
                border-right: 1px dashed #dcdcdc;
                line-height: 2;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-inline-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                }
                .col-md-4.col-lg-4.text-info {
                border-bottom: 1px dashed #dcdcdc;
                line-height: 2;
                }
                </style>
            </div>
            <div class="button_search" onclick="toggleBoxSearch()">
                <i class="fa fa-search"></i>
            </div>
            <script>
                var isBoxSearchVisible = false;
                function toggleBoxSearch() {
                var boxSearch = document.getElementById("boxSearch");
                if (boxSearch) {
                    if (isBoxSearchVisible) {
                    boxSearch.style.display = "none";
                    } else {
                    boxSearch.style.display = "block";
                    }
                    isBoxSearchVisible = !isBoxSearchVisible;
                }
                }
            </script>
        </div>
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">×</span>
                <div id="loginTab" class="tabcontent">
                <div class="h2-modal">
                    <h2 class="modal-login">Login</h2>
                </div>
                <!-- Login Form -->
                <form id="loginForm" action="https://nettruyen88.net/wp-login.php" method="post" >
                    <label for="username">Username:</label>
                    <input type="text" name="log" id="username" required="" />
                    <label for="password">Password:</label>
                    <input type="password" name="pwd" id="password" required="" />
                    <div class="login-cancel">
                        <button type="submit">Login</button>
                        <button type="button" onclick="closeModal()">Cancel</button>
                        <button type="button" onclick="openModal('registerTab')">
                        Register
                        </button>
                    </div>
                    <div class="social-login">
                        <a href="https://datdora.com/login/google" class="google-link">
                        <i class="fa fa-google" aria-hidden="true"></i>oogle
                        </a>
                    </div>
                </form>
                </div>
                <div id="registerTab" class="tabcontent">
                <!-- Register Form -->
                <form id="registerForm" action="https://nettruyen88.net/wp-login.php?action=register" method="post">
                    <div class="h2-modal">
                        <h2 class="modal-login">Register</h2>
                    </div>
                    <label for="reg_username">Username:</label>
                    <input type="text" name="user_login" id="reg_username" required=""/>
                    <label for="reg_email">Email:</label>
                    <input type="email" name="user_email" id="reg_email" required=""/>
                    <div class="login-cancel">
                        <button type="submit">Register</button>
                        <button type="button" onclick="closeModal()">Cancel</button>
                    </div>
                    <div class="social-login">
                        <a href="https://datdora.com/login/google" class="google-link" >
                        <i class="fa fa-google" aria-hidden="true"></i>oogle
                        </a>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <script>
            function openModal(tabName) {
            document.getElementById("loginModal").style.display = "block";
            document.getElementById("loginTab").style.display = "none";
            document.getElementById("registerTab").style.display = "none";
            document.getElementById(tabName).style.display = "block";
            }
            function closeModal() {
            document.getElementById("loginModal").style.display = "none";
            }
        </script>
        <div class="box_menu">
            <div class="box_logo_mobile" style="display: block">
                <div class="logo">
                <a href="https://nettruyen88.net">
                <img src="data:image/webp;base64,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" atl="Logo" data-pagespeed-url-hash="2275875320" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/>
                </a>
                <i class="fa fa-close" onclick="toggleBoxMenu()"></i>
                </div>
            </div>
            <div class="container">
                <ul class="main_menu">
                <li class="li_main">
                    <a href="/" target=""
                        ><span class="glyphicon glyphicon-home"></span> Trang chủ</a
                        >
                </li>
                <li class="li_main">
                    <a href="javascript:;" class="link_main" onclick="toggleSubMenu()">
                    <span class="glyphicon glyphicon-th"></span> Thể Loại
                    <span class="glyphicon glyphicon-menu-down"></span>
                    </a>
                    <ul class="sub_menu col_3">
                    
                    <?php foreach ($categories ?? [] as $category) : ?>
                        <li class="li_sub">
                            <!-- Hiển thị tên category -->
                            <a href="/category/<?php echo $category['c_slug'] ?>"
                            ><span class="glyphicon glyphicon-ok-circle"></span>
                            <?php echo $category['c_name'] ?>
                            </a> 
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </li>
                <li id="menu-item-14" class="li_main">
                    <a href="https://nettruyen88.net/history/">Lịch Sử Đọc</a>
                </li>
                <li id="menu-item-16" class="li_main">
                    <a href="https://nettruyen88.net/completed/">Truyện Full</a>
                </li>
                <li id="menu-item-17" class="li_main">
                    <a href="https://nettruyen88.net/trending/">Truyện Hot</a>
                </li>
                <li id="menu-item-18" class="li_main">
                    <a href="https://nettruyen88.net/newest/">Truyện Mới</a>
                </li>
                <li id="menu-item-19" class="li_main">
                    <a href="https://nettruyen88.net/favorites/"
                        >Truyện Yêu Thích</a
                        >
                </li>
                <li id="menu-item-347121" class="li_main">
                    <a rel="privacy-policy" href="https://nettruyen88.net/privacy-policy/" >
                    Chính sách bảo mật
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar-breadcrumb">
        <div class="container breadcrumb-container">
            <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                 @if(\Request::route() -> getName() != 'home' )
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" >
                    <a href="https://nettruyen88.net" accesskey="1">                
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                    <a href="https://nettruyen88.net" title="Net Truyện 88" itemprop="item" >
                        <span itemprop="name">Trang chủ</span>
                    </a>
                   
                    <meta itemprop="position" content="1" />
                </li>
                <li class="active" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" >
                    <h1>
                        <a href="https://nettruyen88.net/the-loai/bach-hop/" title="Bách Hợp" itemprop="item" >
                        <span itemprop="name">Bách Hợp</span>
                        </a>
                    </h1>
                    <meta itemprop="position" content="2" />
                </li> 
                @endif
            </ol>
        </div>
    </div>
</div>