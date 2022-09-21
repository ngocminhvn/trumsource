<?php 
require('../layout/head.php');
if(!isset($_COOKIE['token'])){
  header('location: /login');
  die();
}else if(!$user){
  header('location: /login');
  unset($_COOKIE['token']);
  setcookie('token', null, -1, '/');
  die();
}
?>
  <body>
    <!-- Page Container -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Sidebar -->
      <?php require('../layout/sidebar.php'); ?>
      <!-- END Sidebar -->

      <!-- Header -->
      <?php require('../layout/header.php'); ?>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                 Nạp chuyển khoản
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    Nạp chuyển khoản
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="row g-gs">
                <div class="col-md-12">
                    <div class="alert text-white bg-warning mb-3" role="alert">
                        <h5 class="text-white bg-heading font-weight-semi-bold">Lưu ý</h5>
                        <p>
                            - Cố tình nạp dưới mức nạp không hỗ trợ <br />
                            - Nạp sai cú pháp, sai số tài khoản, sai ngân hàng sẽ bị trừ 20% phí giao dịch. Vd: nạp 100k sai nội dung sẽ chỉ nhận được 80k coin và phải liên hệ admin để cộng tay.
                        </p>
                    </div>
                </div>
                <div class="mb-3 col-sm-6">
                    <h5 class="text-info text-center"><img src="https://raw.githubusercontent.com/ngocminhvn/all/main/image/banking/mbbank.png" height="45px" /></h5>
                    <div class="alert text-white bg-success" role="alert">
                        <div>Số tài khoản: <b id="mbbank" class="text-right text-dark" onclick="copy('#mbbank');">2730091234</b></div>
                        <div>Nạp tối thiểu: <b class="text-right">10,000 VNĐ</b></div>
                        <div>Chú ý: <b class="text-right">Nạp tay, khuyến cáo nạp ban ngày.</b></div>
                    </div>
                </div>
                <div class="mb-3 col-sm-6">
                    <h5 class="text-info text-center"><img src="https://raw.githubusercontent.com/ngocminhvn/all/main/image/banking/momo.jpeg" height="45px" /></h5>
                    <div class="alert text-white bg-success" role="alert">
                        <div>Số tài khoản: <b id="momo" class="text-right text-dark" onclick="copy('#momo');">https://me.momo.vn/trinhngocminh</b></div>
                        <div>Nạp tối thiểu: <b class="text-right">10,000 VNĐ</b></div>
                        <div>Chú ý: <b class="text-right">Nạp tay, khuyến cáo nạp ban ngày.</b></div>
                    </div>
                </div>
                <div class="mb-3 col-sm-6">
                    <h5 class="text-info text-center"><img src="https://raw.githubusercontent.com/ngocminhvn/all/main/image/banking/tsr.png" height="45px" /></h5>
                    <div class="alert text-white bg-success" role="alert">
                        <div>Số tài khoản: <b id="tsr" class="text-right text-dark" onclick="copy('#tsr');">trinhngocminh</b></div>
                        <div>Nạp tối thiểu: <b class="text-right">10,000 VNĐ</b></div>
                        <div>Chú ý: <b class="text-right">Nạp tay, khuyến cáo nạp ban ngày.</b></div>
                    </div>
                </div>
                <div class="mb-3 col-sm-6">
                    <h5 class="text-info text-center"><img src="https://raw.githubusercontent.com/ngocminhvn/all/main/image/banking/zalopay.png" height="45px" /></h5>
                    <div class="alert text-white bg-success" role="alert">
                        <div>Số tài khoản: <b id="zalopay" class="text-right text-dark" onclick="copy('#zalopay');">trinhngocminh</b></div>
                        <div>Nạp tối thiểu: <b class="text-right">10,000 VNĐ</b></div>
                        <div>Chú ý: <b class="text-right">Nạp tay, khuyến cáo nạp ban ngày.</b></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 mb-3">
                <h5 class="text">Nội dung chuyển khoản</h5>
                <div class="alert alert-info bg-info text-white" role="alert">
                    <h4 class="text-white text-center">
                        <a onclick="copy('#code')"><b class="text-white" id="code"><?=$user['id'];?></b> <i class="ti ti-clipboard text-white"></i></a>
                    </h4>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <?php require('../layout/footer.php'); ?>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->
  </body>
</html>
