<?php 
require('../layout/head.php');
?>
  <body>
    <div id="page-container">
        <main id="main-container">
            <div class="hero-static d-flex align-items-center">
                <div class="content">
                    <div class="row justify-content-center push">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="block block-rounded mb-0">
                                <div class="block-header block-header-default bg-primary-light"></div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
                                        <h1 class="h3 mb-1 text-center">Đăng Kí Thành Viên</h1>
                                        <form id="register-form" action="/ajax/register.php" method="POST">
                                            <div class="py-3">
                                                <div class="mb-4">
                                                    <input type="text" class="form-control form-control-lg form-control-alt" id="myname" name="myname" placeholder="Vui lòng nhập họ và tên" />
                                                </div>
                                                <div class="mb-4">
                                                    <input type="text" class="form-control form-control-lg form-control-alt" id="username" name="username" placeholder="Vui lòng nhập tài khoản" />
                                                </div>
                                                <div class="mb-4">
                                                    <input type="email" class="form-control form-control-lg form-control-alt" id="email" name="email" placeholder="Vui lòng nhập email" />
                                                </div>
                                                <div class="mb-4">
                                                    <input type="password" class="form-control form-control-lg form-control-alt" id="password" name="password" placeholder="Vui lòng nhập mật khẩu" />
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-md-flex align-items-md-center justify-content-md-between">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="cookie" name="cookie" />
                                                            <label class="form-check-label" for="cookie">Tôi đồng ý các điều khoản.</label>
                                                        </div>
                                                        <div class="py-2">
                                                            <a class="fs-sm fw-medium" href="/login">Đăng Nhập</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-block btn-alt-primary"><i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> ĐĂNG KÍ</button>
                                                </div>
                                            </div>
                                            <p class="text-center pt-3">
                                                <span>Bạn chưa có tài khoản?</span>
                                                <a href="/login">
                                                    <span>đăng nhập</span>
                                                </a>.
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fs-sm text-muted text-center text-uppercase"><strong><?=$_SERVER['SERVER_NAME'];?></strong> &copy; <span data-toggle="year-copy"></span></div>
                </div>
            </div>
        </main>
    </div>
    <!-- END Page Container -->
    <script src="/assets/js/oneui.app.min.js"></script>

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Swal -->
    <script src="/assets/js/plugins/sweetalert2/sweetalert2.all.min.js"></script>

  </body>
</html>
