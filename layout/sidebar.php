    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header">
          <!-- Logo -->
          <a class="fw-semibold text-dual" href="index.html">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">
              <img src="https://i.imgur.com/dOUNkAK.png" height="40" />
            </span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
          <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
              <i class="far fa-moon"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Extra -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/home">
                        <img class="nav-main-link-icon" src="/public/assets/image/home.svg" />
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">TÀI KHOẢN</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <img class="nav-main-link-icon" src="/public/assets/image/bank.svg" />
                        <span class="nav-main-link-name">Nạp tiền</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/recharge-card">
                                <span class="nav-main-link-name">Nạp thẻ cào</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/recharge-bank">
                                <span class="nav-main-link-name">Nạp banking</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">DỊCH VỤ</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <img class="nav-main-link-icon" src="/public/assets/image/code.png" />
                        <span class="nav-main-link-name">Dịch vụ code</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/code-list">
                                <span class="nav-main-link-name">Mua code</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/code-history">
                                <span class="nav-main-link-name">Lịch sử mua</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">CÔNG CỤ</li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/tools/create-profile">
                    <img class="nav-main-link-icon" src="/public/assets/image/profile.png" />
                    <span class="nav-main-link-name">Hồ sơ free</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/tools/whois">
                    <img class="nav-main-link-icon" src="/public/assets/image/domain.png" />
                    <span class="nav-main-link-name">Tra cứu tên miền</span>
                    </a>
                </li>
                <li class="nav-main-heading">HỖ TRỢ</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <img class="nav-main-link-icon" src="/public/assets/image/support.png" />
                        <span class="nav-main-link-name">Liên hệ hỗ trợ</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="https://zalo.me/0334955115">
                                <span class="nav-main-link-name">Zalo</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="https://t.me/ngocminhne">
                                <span class="nav-main-link-name">Telegram</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>