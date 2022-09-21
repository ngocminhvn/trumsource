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
        <div class="bg-image" style="background-image: url('/public/assets/media/photos/photo12@2x.jpg');">
          <div class="bg-black-50">
            <div class="content content-full text-center">
              <div class="my-3">
                <img class="img-avatar img-avatar-thumb" src="/public/assets/media/avatars/avatar13.jpg" alt="">
              </div>
              <h1 class="h2 text-white mb-0"><?=__($user['name']);?></h1>
              <span class="text-white-75">Số dư: <?=__($user['money'].'đ');?></span>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="block block-rounded row g-0">
                <ul class="nav nav-tabs nav-tabs-block flex-md-column col-md-4 col-xxl-2" role="tablist">
                    <li class="nav-item d-md-flex flex-md-column">
                        <button class="nav-link text-md-start active" id="btabs-vertical-info-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-info-profile" role="tab" aria-controls="btabs-vertical-info-profile" aria-selected="true">
                            <i class="fa fa-fw fa-user-circle opacity-50 me-1 d-none d-sm-inline-block"></i>
                            <span>CÀI ĐẶT TÀI KHOẢN</span>
                            <span class="d-none d-md-block fs-xs fw-medium opacity-75 mt-md-2">
                                Cập nhật thông tin công khai của bạn
                            </span>
                        </button>
                    </li>
                    <li class="nav-item d-md-flex flex-md-column">
                        <button class="nav-link text-md-start" id="btabs-vertical-info-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-info-settings" role="tab" aria-controls="btabs-vertical-info-settings" aria-selected="false">
                            <i class="fa fa-fw fa-cog opacity-50 me-1 d-none d-sm-inline-block"></i>
                            <span>CÀI ĐẶT MẬT KHẨU</span>
                            <span class="d-none d-md-block fs-xs fw-medium opacity-75 mt-md-2">
                                Cập nhật mật khẩu và thiết lập các tùy chọn khôi phục của bạn
                            </span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content col-md-8 col-xxl-10">
                    <div class="block-content tab-pane active" id="btabs-vertical-info-profile" role="tabpanel" aria-labelledby="btabs-vertical-info-profile-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="block block-rounded">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Cài đặt tài khoản</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-settings"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Tên đăng nhập:</td>
                                                        <td><strong><?=__($user['username']);?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email:</td>
                                                        <td><?=__($user['email']);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Token:</td>
                                                        <td>
                                                            <form id="changetoken" action="/ajax/settings.php?type=changetoken" method="POST">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control form-control-alt" id="token" value="<?=__($user['token']);?>" />
                                                                    <button type="submit" class="btn btn-sm btn-primary" style="text-transform: uppercase;">CẬP NHẬT</button>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cấp bậc:</td>
                                                        <td>
                                                            <span class="nav-main-link-badge badge bg-primary">
                                                                <?php 
                                                                if($user['role'] == 999){
                                                                    echo ('Admin Quản Trị');
                                                                }else{
                                                                    echo ('Thành Viên');
                                                                }
                                                                ?>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ngày đăng ký:</td>
                                                        <td><?=__(datetime($user['time']));?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số dư khả dụng:</td>
                                                        <td>
                                                            <span class="text-primary"><b><?=__(number_format($user['money']).'đ');?></b></span><br />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tổng số dư:</td>
                                                        <td>
                                                            <span class="text-primary"><b><?=__(number_format($user['total']).'đ');?></b></span><br />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content tab-pane" id="btabs-vertical-info-settings" role="tabpanel" aria-labelledby="btabs-vertical-info-settings-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="block block-rounded">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">CÀI ĐẶT MẬT KHẨU</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-settings"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <form id="changepassword" action="/ajax/settings.php?type=changepassword" method="POST">
                                            <div class="form-group mb-3">
                                                <label>Mật khẩu hiện tại</label>
                                                <input type="password" class="form-control form-control-alt" id="old_password" name="old_password" placeholder="Mật khẩu hiện tại" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Mật khẩu mới</label>
                                                <input type="password" class="form-control form-control-alt" id="new_password" name="new_password" placeholder="Mật khẩu mới" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Xác nhận mật khẩu</label>
                                                <input type="password" class="form-control form-control-alt" id="renew_password" name="renew_password" placeholder="Xác nhận mật khẩu" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
