<nav id="sidebar">

    <div class="menu">
        <!--Logo-->
        <div class="logo-area">
            <a id="logo" href="./index.html">
                <div class="logo-pages">

                </div>
                <h2>UET</h2>
            </a>
        </div>
        <!--Menu item-->
        <div id="menu-content">
            <!-- @yield('menu_select') -->
            <a class="menu-item" href="./Pages/Student/Home">
                <span class="menu-item-icon icon-board"></span>
                <span class="menu-item-text">Tổng quan</span>
            </a>
            <a class="menu-item" href="./Pages/Student/Profile">
                <div class="menu-item-icon icon-profile"></div>
                <div class="menu-item-text">Hồ Sơ</div>
            </a>
            <a class="menu-item" href="./Pages/Student/Blog">
                <div class="icon-more icon-blog"></div>
                <div class="menu-item-text">Blog cá nhân</div>
            </a>
            <?php if(Auth::user()->category == '3') { ?>
                <a class="menu-item" href="./Pages/Student/DS1">
                <div class="icon-more icon-company"></div>
                <div class="menu-item-text">Công Ty</div>
            </a>
            <a class="menu-item" href="./Pages/Student/DS2">
                <div class="menu-item-icon icon-teacher"></div>
                <div class="menu-item-text">Nhà Trường</div>
            </a>
            <?php } elseif(Auth::user()->category == '1'){ ?>
            <a class="menu-item" href="./Pages/Student/DS2">
                <div class="menu-item-icon icon-teacher"></div>
                <div class="menu-item-text">Nhà Trường</div>
            </a>
            <a class="menu-item" href="./Pages/Company/DS1">
                <div class="menu-item-icon icon-profile"></div>
                <div class="menu-item-text">Sinh viên</div>
            </a>
            <?php } elseif(Auth::user()->category == '2'){ ?>

            <a class="menu-item" href="./Pages/Student/DS1">
            <div class="icon-more icon-company"></div>
            <div class="menu-item-text">Công Ty</div>
            </a>
            <a class="menu-item" href="./Pages/Company/DS1">
            <div class="menu-item-icon icon-profile"></div>
            <div class="menu-item-text">Sinh viên</div>
            </a>
            <?php }?>
            <a class="menu-item" href="./Pages/Student/Setting">
                <div class="menu-item-icon icon-setting"></div>
                <div class="menu-item-text">Thiết Lập</div>
            </a>
            <a class="menu-item" href="./Pages/Student/Help">
                <div class="menu-item-icon icon-help"></div>
                <div class="menu-item-text">Trợ giúp</div>
            </a>
        </div>
    </div>
</nav>
