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
                    Tạo hồ sơ
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    Tạo hồ sơ
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <div class="row">
             <div class="col-lg-6">
                <div class="card shadow-sm">
                   <div class="card-header">
                      <h3 class="card-title">Mã hóa PHP</h3>
                   </div>
                   <div class="card-body">
                      <div class="intro">Dán mã PHP cần mã hóa của bạn.</div>
                      <b>&lt;?php</b>
                      <div class="form-group mt-2 mb-2">
                         <textarea id="php_origial" style="height: 500px" class="form-control" placeholder='echo "Dán mã PHP của bạn vào đây";'></textarea>
                      </div>
                      <b>?&gt;</b>
                   </div>
                   <div class="card-footer">
                      <button class="btn btn-primary" id="encode"><i class="fa-thin fa-play"></i> Mã hóa ngay</button>
                   </div>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="card shadow-sm">
                   <div class="card-header border-bottom-0">
                      <h3 class="card-title">Kết quả</h3>
                   </div>
                   <div class="card-body">
                      <p class="intro">Mã PHP đã mã hóa của bạn ở dưới đây! Copy và dán nó vào tệp PHP.</p>
                      <div class="form-group">
                         <textarea id="php_encoded" readonly style="height: 500px" class="form-control" placeholder='PHP đã mã hóa sẽ hiện tại đây'></textarea>
                      </div>
                   </div>
                   <div class="card-footer">
                      <button class="btn btn-secondary copy" data-clipboard-action="copy" data-clipboard-target="#php_encoded"><i class="fa-thin fa-clipboard"></i> Sao chép</button>
                   </div>
                </div>
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
