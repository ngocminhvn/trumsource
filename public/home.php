<?php 
require($_SERVER['DOCUMENT_ROOT'].'/layout/head.php');
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
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Sidebar -->
      <?php require($_SERVER['DOCUMENT_ROOT'].'/layout/sidebar.php'); ?>
      <!-- END Sidebar -->

      <!-- Header -->
      <?php require($_SERVER['DOCUMENT_ROOT'].'/layout/header.php'); ?>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="content">
          <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
            <div class="flex-grow-1 mb-1 mb-md-0">
              <h1 class="h3 fw-bold mb-2">
                Dashboard
              </h1>
              <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                Xin chào <a class="fw-semibold" href="#"><?=__($user['name']);?></a>.
              </h2>
            </div>
            <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
              <a class="btn btn-sm btn-alt-secondary space-x-1" href="#">
                <i class="fa fa-cogs opacity-50"></i>
                <span>Settings</span>
              </a>
              <a class="btn btn-sm btn-alt-secondary space-x-1" href="#">
                <i class="fa fa-cogs opacity-50"></i>
                <span>Settings</span>
              </a>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <!-- Overview -->
          <div class="row items-push">
            <div class="col-sm-4 col-xxl-4">
              <!-- Pending Orders -->
              <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold"><?=__(number_format($user['money']).'đ');?></dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">SỐ DƯ HIỆN TẠI</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                    <i class="far fa-gem fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>View all</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                </div>
              </div>
              <!-- END Pending Orders -->
            </div>
            <div class="col-sm-4 col-xxl-4">
              <!-- New Customers -->
              <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold"><?=__(number_format($user['total']).'đ');?></dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">TỔNG TIỀN NẠP</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                    <i class="fa fa-chart-bar fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>View all</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                </div>
              </div>
              <!-- END New Customers -->
            </div>
            <div class="col-sm-4 col-xxl-4">
              <!-- Conversion Rate -->
              <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">4.5%</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">SỐ HOST ĐANG DÙNG</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                    <i class="far fa-user-circle fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>View all</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                </div>
              </div>
              <!-- END Conversion Rate-->
            </div>
          </div>
          <!-- END Overview -->
            <div class="row">
                <div class="col-12">
                    <div class="block block-rounded">
                        <div class="block-content block-content-full text-break overflow-y-auto" style="height: 300px;">
                            <div id="messager"></div>
                        </div>
                        <div class="block-content p-2 bg-body-dark">
                            <form id="chat-form" action="/ajax/chat.php?t=2" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-alt" id="message" name="message" placeholder="Aa" />
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSystem" tabindex="-1" role="dialog" aria-labelledby="modalSystem" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-rounded block-transparent mb-0">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Thông báo</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content fs-sm">
                            <p>
                                <?=$setting['modal'];?>
                            </p>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Đóng</button>
                            <button type="button" class="btn btn-sm btn-primary" onclick="closeModalSystem()">Không hiển thị lại</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <?php require($_SERVER['DOCUMENT_ROOT'].'/layout/footer.php'); ?>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->
    <script>
        $(document).ready(function () {
            if (!getCookie("modalSystem")) {
                $("#modalSystem").modal("show");
            }
        });
        function closeModalSystem() {
            setCookie("modalSystem", true, 1);
            $("#modalSystem").modal("hide");
        }
    </script>
    <script src="/ajax/message.js"></script>
  </body>
</html>
