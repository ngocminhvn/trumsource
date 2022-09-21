<?php
require('layout/head.php');
?>
  <body>
    <!-- Page Container -->
    <div id="page-container" class="page-header-fixed main-content-boxed">
      <!-- Sidebar -->
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header bg-white-5">
          <!-- Logo -->
          <a class="fw-semibold text-dual" href="/">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">
              One<span class="fw-normal">UI</span>
            </span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
          <div>
            <!-- Options -->
            <div class="dropdown d-inline-block ms-1">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-circle"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                <!-- Color Themes -->
                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
                  <span>Default</span>
                  <i class="fa fa-circle text-default"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="/assets/css/themes/amethyst.min.css" href="#">
                  <span>Amethyst</span>
                  <i class="fa fa-circle text-amethyst"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="/assets/css/themes/city.min.css" href="#">
                  <span>City</span>
                  <i class="fa fa-circle text-city"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="/assets/css/themes/flat.min.css" href="#">
                  <span>Flat</span>
                  <i class="fa fa-circle text-flat"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="/assets/css/themes/modern.min.css" href="#">
                  <span>Modern</span>
                  <i class="fa fa-circle text-modern"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="/assets/css/themes/smooth.min.css" href="#">
                  <span>Smooth</span>
                  <i class="fa fa-circle text-smooth"></i>
                </a>
                <!-- END Color Themes -->
              </div>
            </div>
            <!-- END Options -->

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
                <a class="nav-main-link active" href="/home">
                  <i class="nav-main-link-icon si si-home"></i>
                  <span class="nav-main-link-name">Home</span>
                </a>
              </li>

            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="fw-semibold fs-5 tracking-wider text-dual me-3" href="/">
              <img src="https://i.imgur.com/dOUNkAK.png" height="40" />
            </a>
            <!-- END Logo -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">
            <!-- Menu -->
            <div class="d-none d-lg-block">
              <ul class="nav-main nav-main-horizontal nav-main-hover">
<?php if($user){ ?>
                <li class="nav-main-item">
                  <a class="nav-main-link active" href="/home">
                    <i class="nav-main-link-icon si si-home"></i>
                    <span class="nav-main-link-name">Home</span>
                  </a>
                </li>
<?php }else{ ?>
                <li class="nav-main-item">
                  <a class="nav-main-link active" href="/login">
                    <i class="nav-main-link-icon si si-home"></i>
                    <span class="nav-main-link-name">Đăng Nhập</span>
                  </a>
                </li>
<?php } ?>
                <li class="nav-main-heading">Extra</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon far fa-circle"></i>
                  </a>
                  <ul class="nav-main-submenu nav-main-submenu-right">
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                        <i class="nav-main-link-icon fa fa-square text-default"></i>
                        <span class="nav-main-link-name">Default</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="/assets/css/themes/amethyst.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                        <span class="nav-main-link-name">Amethyst</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="/assets/css/themes/city.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-city"></i>
                        <span class="nav-main-link-name">City</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="/assets/css/themes/flat.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-flat"></i>
                        <span class="nav-main-link-name">Flat</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="/assets/css/themes/modern.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-modern"></i>
                        <span class="nav-main-link-name">Modern</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="/assets/css/themes/smooth.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                        <span class="nav-main-link-name">Smooth</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- END Menu -->

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none ms-1" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" method="POST">
              <div class="input-group input-group-sm">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-lighter">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- With Indicators -->
        <div class="container mb-5">
            <div class="content content-full">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.imgur.com/7QVShew.png" class="d-block w-100 h-100" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.imgur.com/DgSgnO2.jpg" class="d-block w-100 h-100" />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- END With Indicators -->

        <!-- Section -->
        <div class="content">
            <div class="container">
            <div class="row">
            <?php
                $data = $db->query("SELECT * FROM `code_products` ORDER BY id desc limit 0, 10");
                  if($data){
                    foreach($data as $row){ 
              ?>    
              <div class="col-md-4 mb-3 animated fadeIn">
                  <div class="card code-products">
                      <div class="options-container fx-item-zoom-in mb-2">
                          <img src="<?=$row['thumbnail'];?>" class="img-fluid options-item" height="167px" />
                      </div>
                      <div class="card-inner">
                          <h5 class="card-title"><?=__($row['name']);?></h5>
                          <p class="card-text">v1</p>
                          <a href="/view-source/<?=__($row['id']);?>" class="btn btn-block btn-primary btn-round text-center">
                              <span>
                                  <?php
                                    if($row['amount'] == 0){
                                      echo('Miễn phí');
                                    }else{
                                      echo(number_format($row['amount']).'đ');
                                    }
                                  ?>
                              </span>
                          </a>
                      </div>
                  </div>
              </div>
              <?php
                    }
                  }else {
                    echo table_empty();
                  }
              ?>
            </div>
            </div>
        </div>
        <!-- END Section -->

      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-dark text-light">
        <div class="content py-4">
          <!-- Footer Navigation -->
          <div class="row items-push fs-sm pt-4">
            <div class="col-sm-6 col-md-4">
              <a href="//www.dmca.com/Protection/Status.aspx?ID=b3d24134-b94c-4871-a131-0c01cc97a270" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/DMCA_badge_grn_60w.png?ID=b3d24134-b94c-4871-a131-0c01cc97a270"  alt="DMCA.com Protection Status" /></a>  
              <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
            </div>
            <div class="col-sm-6 col-md-4">
              <h5 class="c-font-upper c-font-bold c-text-2xl">VỀ CHÚNG TÔI</h5>
              <p>Chúng tôi làm việc một cách chuyên nghiệp, uy tín, nhanh chóng và luôn đặt quyền lợi của bạn lên hàng đầu</p>
            </div>
            <div class="col-md-4">
              <ul class="list list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">Thành Viên<span class="badge rounded-pill bg-primary">12.180 Thành Viên</span></li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">Số Code Hiện Có<span class="badge rounded-pill bg-primary">264 CODE</span></li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">Tổng Code Đã Bán <span class="badge rounded-pill bg-primary">53.517 CODE</span></li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">Tổng Web Đã Tạo <span class="badge rounded-pill bg-primary">633 WEB</span></li>
              </ul>
            </div>
          </div>
          <!-- END Footer Navigation -->
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at /assets/_js/main/app.js
    -->
    <script src="/assets/js/oneui.app.min.js"></script>
  </body>
</html>
